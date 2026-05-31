<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;

class PelangganController extends Controller
{
    public function pelanggan()
    {
        return view('pelanggan');
    }

    public function menuMakanan()
    {
        $menus = Menu::whereHas('category', function($q){

            $q->where(
                'nama_kategori',
                'makanan'
            );

        })->get();

        return view(
            'menu-makanan',
            compact('menus')
        );
    }

    public function menuMinuman()
    {
        $menus = Menu::whereHas('category', function($q){

            $q->where(
                'nama_kategori',
                'minuman'
            );

        })->get();

        return view(
            'menu-minuman',
            compact('menus')
        );
    }

    public function menuDessert()
    {
        $menus = Menu::whereHas('category', function($q){

            $q->where(
                'nama_kategori',
                'dessert'
            );

        })->get();

        return view(
            'menu-dessert',
            compact('menus')
        );
    }

    public function informasiPesanan()
    {
        return view('informasi-pesanan');
    }

    public function kodePesanan(Request $request)
    {
        $keranjang = session('keranjang', []);

        $total = 0;

        foreach($keranjang as $item){

            $total += $item['harga'] * $item['jumlah'];

        }

        $kode = 'ORD-' . date('Ymd') . '-' . rand(1000,9999);

        $order = Order::create([

            'user_id' => Auth::id(),
            'kode_order' => $kode,
            'nama_pelanggan' => $request->nama,
            'nomor_meja' => $request->meja,
            'catatan' => $request->catatan,
            'total_harga' => $total,
            'status' => 'menunggu pembayaran'

        ]);

        foreach($keranjang as $id => $item){

            OrderItem::create([

                'order_id' => $order->id,
                'menu_id' => $id,
                'jumlah' => $item['jumlah'],
                'harga' => $item['harga'],
                'subtotal' => $item['harga'] * $item['jumlah']

            ]);

        }

        session()->forget('keranjang');

        return view('kode-pesanan', [

            'kode' => $kode,
            'total' => $total

        ]);
    }

    public function statusPesanan()
    {
        $order = \App\Models\Order::where(
            'user_id',
            auth()->id()
        )
        ->latest()
        ->first();

        return view(
            'status-pesanan',
            compact('order')
        );
    }

}