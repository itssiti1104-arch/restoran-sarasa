<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class DapurController extends Controller
{
    public function index()
    {
        $pesananMasuk = Order::where('status', 'baru')->count();

        $diproses = Order::where('status', 'diproses')->count();

        $siapDiantar = Order::where('status', 'siap diantar')->count();

        $selesaiHariIni = Order::whereDate(
            'created_at',
            today()
        )->where(
            'status',
            'selesai'
        )->count();

        return view('dapur', compact(
            'pesananMasuk',
            'diproses',
            'siapDiantar',
            'selesaiHariIni'
        ));
    }

    public function pesananMasuk()
    {
        $orders = Order::where(
            'status',
            'pembayaran dikonfirmasi'
        )->latest()->get();

        return view(
            'pesanan-masuk-dapur',
            compact('orders')
        );
    }

    public function detailPesanan($id)
    {
        $order = Order::findOrFail($id);

        return view(
            'detail-pesanan-dapur',
            compact('order')
        );
    }

    public function updateStatus($id)
    {
        $order = Order::findOrFail($id);

        if($order->status == 'pembayaran dikonfirmasi')
        {
            $order->status = 'dalam proses';
        }

        elseif($order->status == 'dalam proses')
        {
            $order->status = 'selesai';
        }

        $order->save();

        return redirect()->back();
    }

}