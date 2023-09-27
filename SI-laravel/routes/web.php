<?php

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

Route::get('/', function () {
    return view('welcome');
});

<!--Merupakan Route untuk menampilkan halaman home.blade.php-->
Route::get('/home', function () {
    return view('home');
});

<!--Merupakan Route untuk menampilkan halaman dataprestasi.blade.php-->
Route::get('/dataprestasi', function () {
    return view('dataprestasi');
});

<!--Merupakan Route untuk menampilkan halaman tambahdataprestasi.blade.php-->
Route::get('/tambahprestasi', function () {
    return view('tambahprestasi');
});
