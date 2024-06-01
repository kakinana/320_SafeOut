<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PengaduanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('auth/google', [GoogleController::class, 'googlepage']);
route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);
route::get('/pengaduan',[PengaduanController::class,'index']);
route::get('/pengaduan/create',[PengaduanController::class,'create']);
route::post('/pengaduan/store',[PengaduanController::class,'store']);
route::get('/pengaduan/{id}/edit',[PengaduanController::class,'edit']);
route::put('/pengaduan/{id}',[PengaduanController::class,'update']);
route::delete('/pengaduan/{id}',[PengaduanController::class,'destroy']);