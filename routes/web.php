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
    return view('home');
});

Route::get('/menu-pelanggan', function () {
    return view('menu-makanan');
});

Route::get('/menu-minuman', function () {
    return view('menu-minuman');
});

Route::get('/menu-dessert', function () {
    return view('menu-dessert');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/informasi-pesanan', function () {
    return view('informasi-pesanan');
});

Route::get('/kode-pesanan', function () {
    return view('kode-pesanan');
});

Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/pelanggan', 'pelanggan');