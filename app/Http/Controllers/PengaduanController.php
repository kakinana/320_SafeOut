<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $data = Pengaduan::all();
        return view('pengaduan.index', compact('data'));
    }
    
    public function create(){
        return view('pengaduan.create');
    }

    public function store(Request $request){
        $data = $request->except(['_token','submit']);
        $data['status'] = 'pending';
        Pengaduan::create($data);
        return redirect('/pengaduan');
    }
    

    public function edit($id){
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.edit',compact(['pengaduan']));
    }

    public function update($id, Request $request){
        // unset($data['status']);
        $pengaduan = Pengaduan::find($id);
        $data = $request->except(['_token','submit']);
        $pengaduan->update($data);
        return redirect('/pengaduan');
    }

    public function destroy($id){
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();
        return redirect('/pengaduan');
    }
}
