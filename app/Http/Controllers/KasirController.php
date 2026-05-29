<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class KasirController extends Controller
{
    public function index()
    {
        $jumlahPesanan = Order::whereDate(
            'created_at',
            today()
        )
        ->where('status', 'menunggu pembayaran')
        ->count();

        $pesananDiproses = Order::whereDate(
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

        return view('kasir', compact(
            'jumlahPesanan',
            'pesananDiproses',
            'pendapatan'
        ));
    }

    public function pesananBaru()
    {
        $orders = Order::where(
            'status',
            'menunggu pembayaran'
        )
        ->latest()
        ->get();

        return view(
            'pesanan-baru',
            compact('orders')
        );
    }

    public function detailPesanan($id)
    {
        $order = Order::with('items.menu')
        ->findOrFail($id);

        return view(
            'detail-pesanan-kasir',
            compact('order')
        );
    }

    public function konfirmasiPembayaran($id)
    {
        $order = Order::findOrFail($id);

        return view(
            'konfirmasi-pembayaran',
            compact('order')
        );
    }

    public function prosesPembayaran($id)
    {
        $order = Order::findOrFail($id);

        $order->status = 'pembayaran dikonfirmasi';

        $order->save();

        return view(
            'pembayaran-berhasil',
            compact('order')
        );
    }

    public function batalkanPesanan($id)
    {
        $order = Order::findOrFail($id);

        $order->status = 'dibatalkan';

        $order->save();

        return redirect('/kasir');
    }
}