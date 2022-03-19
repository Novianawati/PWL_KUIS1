<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shoesController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TablesupplierController;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/shoes', function(){
    return view('shoes');
    Route::get('/bestshoes', [shoesController::class, 's1']);
    Route::get('/sportshoes', [shoesController::class, 's2']);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/collection', function () {
    return view('collection');
});

Route::get('/racingshoes', function () {
    return view('racingshoes');
});

Route::get('/pegawai', [PegawaiController::class, 'pg']);
Route::get('/supplier', [TablesupplierController::class, 's']);

Route::get('/barang', [BarangController::class, 'br']);