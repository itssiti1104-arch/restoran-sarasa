<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | MENU
    |--------------------------------------------------------------------------
    */

    public function menuMakanan()
    {
        $menus = Menu::where('kategori', 'makanan')->get();

        return view('menu-makanan', compact('menus'));
    }

    public function menuMinuman()
    {
        $menus = Menu::where('kategori', 'minuman')->get();

        return view('menu-minuman', compact('menus'));
    }

    public function menuDessert()
    {
        $menus = Menu::where('kategori', 'dessert')->get();

        return view('menu-dessert', compact('menus'));
    }

    /*
    |--------------------------------------------------------------------------
    | KERANJANG
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $keranjang = session()->get('keranjang', []);

        return view('keranjang', compact('keranjang'));
    }

    public function add($id)
    {
        $menu = Menu::findOrFail($id);

        $keranjang = session()->get('keranjang', []);

        if(isset($keranjang[$id])){

            $keranjang[$id]['jumlah']++;

        } else {

            $keranjang[$id] = [

                'nama' => $menu->nama_menu,
                'harga' => $menu->harga,
                'gambar' => $menu->gambar,
                'jumlah' => 1

            ];
        }

        session()->put('keranjang', $keranjang);

        return back();
    }

    public function tambahKeranjang($id)
    {
        $menu = Menu::findOrFail($id);

        $keranjang = session()->get('keranjang', []);

        if(isset($keranjang[$id])){

            $keranjang[$id]['jumlah']++;

        } else {

            $keranjang[$id] = [

                'nama' => $menu->nama_menu,
                'harga' => $menu->harga,
                'gambar' => $menu->gambar,
                'jumlah' => 1

            ];
        }

        session()->put('keranjang', $keranjang);

        return back();
    }

    public function kurangKeranjang($id)
    {
        $keranjang = session()->get('keranjang', []);

        if(isset($keranjang[$id])){

            $keranjang[$id]['jumlah']--;

            if($keranjang[$id]['jumlah'] <= 0){

                unset($keranjang[$id]);

            }
        }

        session()->put('keranjang', $keranjang);

        return back();
    }

    public function hapusKeranjang($id)
    {
        $keranjang = session()->get('keranjang', []);

        unset($keranjang[$id]);

        session()->put('keranjang', $keranjang);

        return back();
    }

    /*
    |--------------------------------------------------------------------------
    | PEMESANAN
    |--------------------------------------------------------------------------
    */

    public function informasiPesanan()
    {
        return view('informasi-pesanan');
    }

    public function riwayatPesanan()
    {
        return view('riwayat-pesanan');
    }

    public function statusPesanan()
    {
        return view('status-pesanan');
    }

    public function profilPelanggan()
    {
        return view('profil-pelanggan');
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
}