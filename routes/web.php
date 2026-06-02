<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\DapurController;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| LOGIN & REGISTER
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::post('/login', [UserController::class, 'login']);

    Route::get('/register', function () {
        return view('register');
    });

    Route::post(
        '/register-pelanggan',
        [UserController::class, 'registerPelanggan']
    );
});

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::get(
    '/logout',
    [UserController::class, 'logout']
)->middleware('auth');

/*
|--------------------------------------------------------------------------
| PELANGGAN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:pelanggan'])->group(function () {

    Route::get(
        '/pelanggan',
        [PelangganController::class, 'pelanggan']
    );

    /*
    |--------------------------------------------------------------------------
    | MENU
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/menu-pelanggan',
        [CartController::class, 'menuMakanan']
    );

    Route::get(
        '/menu-minuman',
        [CartController::class, 'menuMinuman']
    );

    Route::get(
        '/menu-dessert',
        [CartController::class, 'menuDessert']
    );

    /*
    |--------------------------------------------------------------------------
    | KERANJANG
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/keranjang',
        [CartController::class, 'index']
    );

    Route::post(
        '/tambah-keranjang/{id}',
        [CartController::class, 'tambahKeranjang']
    );

    Route::post(
        '/kurang-keranjang/{id}',
        [CartController::class, 'kurangKeranjang']
    );

    Route::post(
        '/hapus-keranjang/{id}',
        [CartController::class, 'hapusKeranjang']
    );

    /*
    |--------------------------------------------------------------------------
    | PEMESANAN
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/informasi-pesanan',
        [CartController::class, 'informasiPesanan']
    );

    Route::post(
        '/kode-pesanan',
        [CartController::class, 'kodePesanan']
    );

    Route::get(
        '/riwayat-pesanan', 
        [PelangganController::class, 'riwayatPesanan']
    );

    Route::get(
        '/status-pesanan',
        [CartController::class, 'statusPesanan']
    );

    Route::get(
        '/profil-pelanggan',
        [CartController::class, 'profilPelanggan']
    );

    Route::get(
        '/status-pesanan',
        [PelangganController::class, 'statusPesanan']
    );

    /*
    |--------------------------------------------------------------------------
    | PROFIL SAYA
    |--------------------------------------------------------------------------
    */

    Route::post(
        '/ubah-password',
        [PelangganController::class, 'ubahPassword']
    );

    Route::post(
        '/update-profil',
        [PelangganController::class,
        'updateProfil']
    );

});

/*
|--------------------------------------------------------------------------
| KASIR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:kasir'])->group(function () {

    Route::get(
        '/kasir',
        [KasirController::class, 'index']
    );

    Route::get(
        '/pesanan-baru',
        [KasirController::class, 'pesananBaru']
    );

    Route::get(
        '/detail-pesanan-kasir/{id}',
        [KasirController::class, 'detailPesanan']
    );

    Route::get(
        '/konfirmasi-pembayaran/{id}',
        [KasirController::class, 'konfirmasiPembayaran']
    );

    Route::post(
        '/proses-pembayaran/{id}',
        [KasirController::class, 'prosesPembayaran']
    );

    Route::post(
        '/batalkan-pesanan/{id}',
        [KasirController::class, 'batalkanPesanan']
    );

    Route::get(
        '/riwayat-transaksi',
        [KasirController::class, 'riwayatTransaksi']
    );

});

/*
|--------------------------------------------------------------------------
| DAPUR
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:dapur'])->group(function () {

    Route::get(
        '/dapur',
        [DapurController::class, 'index']
    );

    Route::get(
        '/pesanan-masuk-dapur',
        [DapurController::class, 'pesananMasuk']
    );

    Route::get(
        '/detail-pesanan-dapur/{id}',
        [DapurController::class, 'detailPesanan']
    );

    Route::post(
        '/update-status-dapur/{id}',
        [DapurController::class, 'updateStatus']
    );

    Route::get(
        '/riwayat-pesanan-dapur',
        [DapurController::class, 'riwayatPesanan']
    );

});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get(
        '/admin',
        [AdminController::class, 'index']
    );

    Route::get(
        '/manajemen-akun',
        [AdminController::class, 'manajemenAkun']
    );

    Route::post(
        '/tambah-akun',
        [UserController::class, 'store']
    );

    Route::put(
        '/update-akun/{id}',
        [UserController::class, 'update']
    );

    Route::delete(
        '/hapus-akun/{id}',
        [UserController::class, 'destroy']
    );

    Route::get(
        '/kelola-menu', 
        [AdminController::class, 'kelolaMenu']
    );

    Route::post(
        '/tambah-menu',
        [AdminController::class, 'tambahMenu']
    );

    Route::put(
        '/update-menu/{id}', 
        [AdminController::class, 'updateMenu']
    );

    Route::delete(
        '/hapus-menu/{id}',
        [AdminController::class, 'hapusMenu']
    );

});