<?php

namespace App\Http\Controllers;

use App\Models\Order;

class DapurController extends Controller
{
    public function index()
    {
        $pesananMasuk = Order::whereDate(
            'created_at',
            today()
        )
        ->where('status', 'pembayaran dikonfirmasi')
        ->count();

        $diproses = Order::whereDate(
            'created_at',
            today()
        )
        ->where('status', 'dalam proses')
        ->count();

        $siapDiantar = Order::whereDate(
            'created_at',
            today()
        )
        ->where('status', 'selesai')
        ->count();

        $selesaiHariIni = Order::whereDate(
            'created_at',
            today()
        )
        ->where('status', 'selesai')
        ->count();

        return view('dapur', compact(
            'pesananMasuk',
            'diproses',
            'siapDiantar',
            'selesaiHariIni'
        ));
    }

    public function pesananMasuk()
    {
        $orders = Order::with('items.menu')
        ->whereIn('status', [
            'pembayaran dikonfirmasi',
            'dalam proses'
        ])
        ->latest()
        ->get();

        return view(
            'pesanan-masuk-dapur',
            compact('orders')
        );
    }

    public function detailPesanan($id)
    {
        $order = Order::with('items.menu')
        ->findOrFail($id);

        return view(
            'detail-pesanan-dapur',
            compact('order')
        );
    }

    public function updateStatus($id)
    {
        $order = Order::findOrFail($id);

        if($order->status == 'pembayaran dikonfirmasi'){

            $order->status = 'dalam proses';
            $order->mulai_proses_at = now();

        }elseif($order->status == 'dalam proses'){

            $order->status = 'selesai';
            $order->selesai_at = now();

        }

        $order->save();

        return back();
    }

    public function riwayatPesanan()
    {
        $orders = Order::with('items')
            ->whereDate('created_at', today())
            ->where('status', 'selesai')
            ->latest()
            ->get();

        return view(
            'riwayat-pesanan-dapur',
            compact('orders')
        );
    }

    public function laporanHarian()
    {
        $orders = Order::with('items.menu')
            ->whereDate('created_at', today())
            ->where('status', 'selesai')
            ->latest()
            ->get();

        $totalPesanan = Order::whereDate(
            'created_at',
            today()
        )->count();

        $pesananSelesai = $orders->count();

        $rataRataMasak = Order::whereDate(
            'created_at',
            today()
        )
        ->whereNotNull('mulai_proses_at')
        ->whereNotNull('selesai_at')
        ->get()
        ->avg(function ($order) {

            return $order->mulai_proses_at
                ->diffInMinutes(
                    $order->selesai_at
                );

        });

        return view(
            'laporan-harian-dapur',
            compact(
                'orders',
                'totalPesanan',
                'pesananSelesai',
                'rataRataMasak'
            )
        );
    }
}