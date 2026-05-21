<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Http\Controllers\CartController;

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

    $menus = Menu::where('kategori', 'makanan')->get();

    return view('menu-makanan', compact('menus'));

});

Route::get('/menu-minuman', function () {

    $menus = Menu::where('kategori', 'minuman')->get();

    return view('menu-minuman', compact('menus'));

});

Route::get('/menu-dessert', function () {

    $menus = Menu::where('kategori', 'dessert')->get();

    return view('menu-dessert', compact('menus'));

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

Route::get('/riwayat-pesanan', function () {
    return view('riwayat-pesanan');
});

Route::get('/status-pesanan', function () {
    return view('status-pesanan');
});

Route::get('/profil-pelanggan', function () {
    return view('profil-pelanggan');
});

Route::get('/kasir', function () {
    return view('kasir');
});

Route::get('/detail-pesanan-kasir', function () {
    return view('detail-pesanan-kasir');
});

Route::view('/login', 'login');
Route::view('/register', 'register');
Route::view('/pelanggan', 'pelanggan');

Route::post('/cart/add/{id}', [CartController::class, 'add']);
Route::get('/keranjang', [CartController::class, 'index']);