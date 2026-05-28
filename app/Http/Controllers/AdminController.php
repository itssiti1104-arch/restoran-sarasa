<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Menu;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        $totalMenu = Menu::count();

        $totalPesanan = Order::whereDate(
            'created_at',
            today()
        )->count();

        $pendapatan = Order::whereDate(
            'created_at',
            today()
        )
        ->where('status', 'pembayaran dikonfirmasi')
        ->sum('total_harga');

        $totalUser = User::count();

        return view('admin', compact(
            'totalMenu',
            'totalPesanan',
            'pendapatan',
            'totalUser'
        ));
    }

    public function manajemenAkun()
    {
        $users = User::latest()->get();

        return view(
            'manajemen-akun',
            compact('users')
        );
    }
}