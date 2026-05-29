<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $totalMenu = Menu::count();

        $totalPesanan = Order::whereDate(
            'created_at',
            today()
        )
        ->whereIn('status', [
            'pembayaran dikonfirmasi',
            'dalam proses',
            'selesai'
        ])
        ->count();

        $pendapatan = Order::whereDate(
            'created_at',
            today()
        )
        ->whereIn('status', [
            'pembayaran dikonfirmasi',
            'dalam proses',
            'selesai'
        ])
        ->sum('total_harga');

        $totalUser = User::count();

        return view('admin', compact(
            'totalMenu',
            'totalPesanan',
            'pendapatan',
            'totalUser'
        ));
    }
}