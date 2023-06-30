<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route grup untuk admin
Route::group(['middleware' => ['auth', 'role:admin']], function(){

// route untuk menampilkan form tambahan pasien
Route::get('/pasien/create', [PasienController::class, 'create']);

// route untuk memproses form tambah pasien
Route::post('/pasien', [PasienController::class, 'store']);  

// route untuk menampilkan form edit pasien
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);

// route untuk memproses update pasien
Route::put('/pasien/{id}', [PasienController::class, 'update']);

//Route untuk menghapus pasien
Route::delete('/pasien', [PasienController::class, 'destroy']);
});

// Route group untuk pengunjung yang sudah login
Route::group(['middleware' => ['auth']], function(){
Route::get('/', [DashboardController::class, 'index']);

// route untuk menampilkan daftar pasien
Route:: get('/pasien', [PasienController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
