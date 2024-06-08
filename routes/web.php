<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\LoginController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\produkbackendController;
use App\Http\Controllers\pesananbackendController;
use App\Http\Controllers\reviewbackendController;
use App\Http\Controllers\pegawaibackendController;
use App\Http\Controllers\kategoribackendController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\kategoriController;
use Intervention\Image\Facades\Image;


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
    return view('welcome');
});

//route untuk frontend
Route::get('frontend', function () {
    return view('layouts.main');
});

Route::get('home', function () {
    return view('frontend.home');
});


Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/produk', [produkController::class, 'index']);
Route::get('/pesanan', [pesananController::class, 'index']);
Route::get('/review', [reviewController::class, 'index']);
Route::get('/pegawai', [pegawaiController::class, 'index']);
Route::get('/kategori', [kategoriController::class, 'index']);


//route untuk backend
Route::get('/backend', function () {
    return view('backend.index');
});

Route::get('/dashbor', function () {
    return view('backend.dashbor');
});

Route::resource('/produk-backend', produkbackendController::class);
Route::resource('/review-backend', reviewbackendController::class);

Route::resource('/pesanan-backend',pesananbackendController::class);
Route::resource('/pegawai-backend',pegawaibackendController::class);
Route::resource('/kategori-backend',kategoribackendController::class);



