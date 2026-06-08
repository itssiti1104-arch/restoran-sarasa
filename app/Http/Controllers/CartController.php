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

        if($menu->stok <= 0){

            return back()->with(
                'error',
                'Menu sedang habis.'
            );

        }

        $keranjang = session()->get('keranjang', []);

        $jumlahSaatIni =
            $keranjang[$id]['jumlah'] ?? 0;

        if($jumlahSaatIni >= $menu->stok){

            return back()->with(
                'error',
                'Jumlah pesanan melebihi stok yang tersedia.'
            );

        }

        if(isset($keranjang[$id])){

            $keranjang[$id]['jumlah']++;

        }else{

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
}