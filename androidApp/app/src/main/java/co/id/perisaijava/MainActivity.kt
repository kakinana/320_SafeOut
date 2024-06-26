package co.id.perisaijava

import android.Manifest
import android.app.AlarmManager
import android.app.PendingIntent
import android.content.Intent
import android.content.pm.PackageManager
import android.location.Geocoder
import android.media.MediaPlayer
import android.media.RingtoneManager
import android.net.ConnectivityManager
import android.net.Uri
import android.os.Build
import android.os.Bundle
import android.os.Handler
import android.widget.ImageView
import android.widget.Toast
import androidx.annotation.RequiresApi
import androidx.appcompat.app.AppCompatActivity
import androidx.core.app.ActivityCompat
import co.id.perisaijava.databinding.ActivityMainBinding
import co.id.perisaijava.util.Server
import com.androidnetworking.AndroidNetworking
import com.androidnetworking.common.Priority
import com.androidnetworking.error.ANError
import com.androidnetworking.interfaces.JSONObjectRequestListener
import com.bumptech.glide.Glide
import com.google.android.gms.auth.api.signin.GoogleSignIn
import com.google.android.gms.location.*
import com.google.android.material.bottomsheet.BottomSheetDialog
import org.json.JSONException
import org.json.JSONObject
import java.text.DateFormat
import java.text.SimpleDateFormat
import java.util.*


class MainActivity : AppCompatActivity() {
    private lateinit var fusedLocationClient: FusedLocationProviderClient
    private val LOCATION_PERMS = arrayOf(
        Manifest.permission.ACCESS_FINE_LOCATION
    )
    private var wayLatitude = 0.0
    private  var wayLongitude= 0.0

    private val isContinue = false
    private var locationRequest: LocationRequest? = null
    private var locationCallback: LocationCallback? = null
    private val LOCATION_REQUEST: Int = 1340
    private var geoCoder: Geocoder?=null
    private var dialogLayout: BottomSheetDialog?=null
    private lateinit var activityMainActivity: ActivityMainBinding
    var pendingIntent: PendingIntent? = null
    var alarmManager: AlarmManager? = null
    var handler: Handler = Handler()
    var refresh: Runnable? = null
    var idUser =""
    var conMgr: ConnectivityManager? = null
    var nameUser =""
    @RequiresApi(Build.VERSION_CODES.M)
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        activityMainActivity = ActivityMainBinding.inflate(layoutInflater)
        geoCoder = Geocoder(this, Locale.getDefault())
        setContentView(activityMainActivity.root)
        conMgr = getSystemService(CONNECTIVITY_SERVICE) as ConnectivityManager
        alarmManager = application.getSystemService(ALARM_SERVICE) as AlarmManager?;
        fusedLocationClient = LocationServices.getFusedLocationProviderClient(this)
        locationRequest = LocationRequest.create()
        locationRequest!!.priority = LocationRequest.PRIORITY_HIGH_ACCURACY
        locationRequest!!.interval = 20 * 1000
        locationCallback = object : LocationCallback() {
            override fun onLocationResult(locationResult: LocationResult) {
                if (locationResult == null) {
                    return
                }
                for (location in locationResult.locations) {
                    if (location != null) {
                        wayLatitude = location.latitude
                        wayLongitude = location.longitude
                    }
                }
            }
        }
        println("Jarak : "+distance(-6.96901631084332, 107.62812788523115,-6.966162217330814, 107.63881380588698,"K"))
        showDialog()
        if (canAccessLocation()) {
            loadLocationNow()
        }
        else {
            requestPermissions(LOCATION_PERMS, LOCATION_REQUEST)
        }
        loadDataProfile()
        if (idUser.isNotEmpty()) {
            refresh = Runnable { // Do something
                checkLocation(idUser)
                handler.postDelayed(refresh!!, 50000)
            }
            handler.post(refresh!!)
        }
        activityMainActivity.cardSafeHouse.setOnClickListener {
            var pindah = Intent(this@MainActivity,MapsActivity::class.java)
            startActivity(pindah)
        }

        activityMainActivity.btnPanic.setOnClickListener {
            setAlarmNow()
            run {
                if (conMgr!!.getActiveNetworkInfo() != null && conMgr!!.getActiveNetworkInfo()!!.isAvailable()
                    && conMgr!!.getActiveNetworkInfo()!!.isConnected()
                ) {
                    if (idUser.isNotEmpty() && nameUser.isNotEmpty()) {
                        createComplaint()
                    }
                } else {
                    var pindah = Intent(this@MainActivity, AlarmInfoActivity::class.java)
                    startActivity(pindah)
                     Toast.makeText(applicationContext, "No Internet Connection", Toast.LENGTH_LONG).show()
                }
            }
        }

        activityMainActivity.btnInfoPanic.setOnClickListener {
            dialogLayout!!.show()
        }

        activityMainActivity.homeBtn.setOnClickListener {
            var pindah = Intent(this@MainActivity, MainActivity::class.java)
            startActivity(pindah)
        }
        activityMainActivity.profileBtn.setOnClickListener {
            var pindah = Intent(this@MainActivity, ProfileActivity::class.java)
            startActivity(pindah)
        }
    }

    private fun createComplaint() {
        AndroidNetworking.post(Server.ENDPOINT_CREATE_COMPLAINT)
            .addBodyParameter("id", idUser)
            .addBodyParameter("name", nameUser)
            .addBodyParameter("lat", wayLatitude.toString())
            .addBodyParameter("lng", wayLongitude.toString())
            .setPriority(Priority.MEDIUM)
            .build()
            .getAsJSONObject(object : JSONObjectRequestListener {
                override fun onResponse(response: JSONObject) {
//                        setIsLoading(false);
                    println("Response $response")
                    if (response.getString("message").equals("success",ignoreCase = true)) {
                        var pindah = Intent(this@MainActivity, AlarmInfoActivity::class.java)
                        startActivity(pindah)
                    } else {
                        println("Create Complaint Failed")
                    }
                }

                override fun onError(anError: ANError) {
                    println("Erorr " + anError.message)
                }
            })
    }

    private fun setAlarmNow() {
        val mediaPlayer = MediaPlayer.create(this, RingtoneManager.getDefaultUri(RingtoneManager.TYPE_ALARM))
        mediaPlayer.start()
//        val dat = Date()
//        val cal_now = Calendar.getInstance()
//        cal_now.setTime(dat);
//        val myIntent = Intent(this@MainActivity, AlarmReceiver::class.java)
//        pendingIntent = PendingIntent.getBroadcast(this@MainActivity, 1, myIntent, 0)
//
//        alarmManager!!.set(AlarmManager.RTC_WAKEUP, cal_now.getTimeInMillis(), pendingIntent)
    }

    @RequiresApi(Build.VERSION_CODES.M)
    override fun onRequestPermissionsResult(
        requestCode: Int,
        permissions: Array<out String>,
        grantResults: IntArray
    ) {
        super.onRequestPermissionsResult(requestCode, permissions, grantResults)
        when (requestCode) {
            1000 -> if (canAccessLocation()) {
                if (grantResults.isNotEmpty()
                    && grantResults[0] === PackageManager.PERMISSION_GRANTED
                ) {
                    if (isContinue) {
                        loadLocationNow()
                    } else {
                       loadLocationNow()
                    }
                } else {
                    Toast.makeText(this, "Permission denied", Toast.LENGTH_SHORT).show()
                }
            } else {
                requestPermissions(LOCATION_PERMS, LOCATION_REQUEST)
            }
        }
    }

    private fun distance(
        lat1: Double,
        lon1: Double,
        lat2: Double,
        lon2: Double,
        unit: String
    ): Double {
         if (lat1 == lat2 && lon1 == lon2) {
             return  0.0
        } else {
            val theta = lon1 - lon2
            var dist = Math.sin(Math.toRadians(lat1)) * Math.sin(Math.toRadians(lat2)) + Math.cos(
                Math.toRadians(lat1)
            ) * Math.cos(Math.toRadians(lat2)) * Math.cos(Math.toRadians(theta))
            dist = Math.acos(dist)
            dist = Math.toDegrees(dist)
            dist = dist * 60 * 1.1515
            if (unit == "K") {
                dist = dist * 1.609344
            } else if (unit == "N") {
                dist = dist * 0.8684
            }
             return dist
        }
    }

    fun showDialog() {

        dialogLayout= BottomSheetDialog(this)
        dialogLayout!!.setContentView(R.layout.dialog_panic_button_info)
        val btnClose= dialogLayout!!.findViewById<ImageView>(R.id.btnClose)
        btnClose?.setOnClickListener {
            dialogLayout!!.hide()
        }
    }
    private fun loadLocationNow() {
        if (ActivityCompat.checkSelfPermission(
                this@MainActivity,
                Manifest.permission.ACCESS_FINE_LOCATION
            ) != PackageManager.PERMISSION_GRANTED
            && ActivityCompat.checkSelfPermission(
                this@MainActivity,
                Manifest.permission.ACCESS_COARSE_LOCATION
            ) != PackageManager.PERMISSION_GRANTED
        ) {
            ActivityCompat.requestPermissions(
                this@MainActivity,
                arrayOf(
                    Manifest.permission.ACCESS_FINE_LOCATION,
                    Manifest.permission.ACCESS_COARSE_LOCATION
                ),
               1000
            )
        } else {
        if (isContinue) {
            fusedLocationClient.requestLocationUpdates(locationRequest!!, locationCallback!!, null)
        } else {
            fusedLocationClient.getLastLocation()
                .addOnSuccessListener(this@MainActivity) { location ->
                    if (location != null) {
                        wayLatitude = location.getLatitude()
                        wayLongitude = location.getLongitude()
                        println("Lat :" + location!!.latitude)
                        println("Long :" + location.longitude)
                        try {
            var addresses =
                geoCoder!!.getFromLocation(wayLatitude, wayLongitude, 1);
            if (addresses.isEmpty()) {
                activityMainActivity.txtLocation.setText("Waiting for Location");
            } else {
                activityMainActivity.txtLocation.setText(
                   addresses.get(0)
                        .getLocality() + ", " + addresses.get(0)
                        .getAdminArea()
                );
            }
        } catch (e: java.lang.Exception) {
            println("Catch " + e.message)
        }
                    } else {
                        fusedLocationClient.requestLocationUpdates(
                            locationRequest!!,
                            locationCallback!!,
                            null
                        )
                    }
                }
        }
        }


//
    }

    @RequiresApi(Build.VERSION_CODES.M)
    private fun canAccessLocation(): Boolean {
        return hasPermission(Manifest.permission.ACCESS_FINE_LOCATION)
    }
    @RequiresApi(Build.VERSION_CODES.M)
    private fun hasPermission(perm: String): Boolean {
        return PackageManager.PERMISSION_GRANTED == checkSelfPermission(perm)
    }
    private fun loadDataProfile() {
        val dateFormat: DateFormat = SimpleDateFormat("HH")
        val date = Date()
        var waktuSaatIni = dateFormat.format(date)
        println("Waktu Saat ini "+dateFormat.format(date))
        if (waktuSaatIni.toInt() in 5..11){
            activityMainActivity.txtSelamat.text = "Selamat Pagi"
        } else if (waktuSaatIni.toInt() in 11..14){
            activityMainActivity.txtSelamat.text = "Selamat Siang"
        }else if (waktuSaatIni.toInt() in 15..17){
            activityMainActivity.txtSelamat.text = "Selamat Sore"
        } else {
            activityMainActivity.txtSelamat.text = "Selamat Malam"
        }
        val acct = GoogleSignIn.getLastSignedInAccount(this)
        if (acct != null) {
            val personName = acct.displayName
            val personGivenName = acct.givenName
            val personFamilyName = acct.familyName
            val personEmail = acct.email
            val personId = acct.id
            val personPhoto: Uri? = acct.photoUrl
            idUser = acct.id.toString()
            nameUser = acct.displayName.toString()

            activityMainActivity.txtName.text = "Halo, $personName"
            Glide.with(this).load(personPhoto).placeholder(R.drawable.ic_user_).error(R.drawable.ic_user_).into(activityMainActivity.avatar)
            checkLocation(personId)
        }

    }

    override fun onResume() {
        super.onResume()
        loadDataProfile()
    }

    private fun checkLocation(id:String?) {
        AndroidNetworking.post(Server.ENDPOINT_GET_DETAIL_USER + id)
            .setPriority(Priority.HIGH)
            .build()
            .getAsJSONObject(object : JSONObjectRequestListener {
                override fun onResponse(response: JSONObject) {
//                        setIsLoading(false);
                    println("Response $response")
                    try {
                        if (!response.getString("lat").equals(wayLatitude.toString()) || !response.getString("lng").equals(wayLongitude.toString())){
                            updateLocation(id)
                        }
                    } catch (e: JSONException) {
                        e.printStackTrace()
                    }
                }

                override fun onError(anError: ANError) {
                    println("Erorr Login")
                }
            })
    }

    private fun updateLocation(id: String?) {
        AndroidNetworking.post(Server.ENDPOINT_UPDATE_LOCATION + id)
            .addBodyParameter("lat", wayLatitude.toString())
            .addBodyParameter("lng", wayLongitude.toString())
            .setPriority(Priority.MEDIUM)
            .build()
            .getAsJSONObject(object : JSONObjectRequestListener {
                override fun onResponse(response: JSONObject) {
//                        setIsLoading(false);
                    try {
                        if (response.getString("message").equals("success", ignoreCase = true)) {
                            println("Response $response")
                        } else {
                            Toast.makeText(
                                this@MainActivity,
                                "Update Location Failed",
                                Toast.LENGTH_SHORT
                            ).show()
                        }
                    } catch (e: JSONException) {
                        e.printStackTrace()
                    }
                }

                override fun onError(anError: ANError) {
                    println("Erorr " + anError.message)
                }
            })
    }
}