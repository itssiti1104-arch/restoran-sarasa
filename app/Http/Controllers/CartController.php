<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class CartController extends Controller
{
    public function add($id)
    {
        $menu = Menu::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])){

            $cart[$id]['jumlah']++;

        } else {

            $cart[$id] = [
                'nama_menu' => $menu->nama_menu,
                'harga' => $menu->harga,
                'gambar' => $menu->gambar,
                'jumlah' => 1
            ];
        }

        session()->put('cart', $cart);

        return back();
    }

    public function index()
    {
        $cart = session()->get('cart', []);

        return view('keranjang', compact('cart'));
    }
}