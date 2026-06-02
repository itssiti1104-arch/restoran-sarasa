<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function manajemenAkun()
    {
        $users = User::latest()->get();

        return view(
            'manajemen-akun',
            compact('users')
        );
    }

    public function kelolaMenu()
    {
        $menus = Menu::latest()->get();

        return view(
            'kelola-menu',
            compact('menus')
        );
    }

    public function tambahMenu(Request $request)
    {
        $namaFile = time().'.'.$request->gambar->extension();

        $request->gambar->move(
            public_path('images'),
            $namaFile
        );

        Menu::create([
            'nama_menu' => $request->nama_menu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'gambar' => $namaFile
        ]);

        return redirect('/kelola-menu');
    }

    public function updateMenu(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        if ($request->hasFile('gambar')) {

            $namaFile =
                time().'.'.$request->gambar->extension();

            $request->gambar->move(
                public_path('images'),
                $namaFile
            );

            $menu->gambar = $namaFile;
        }

        $menu->nama_menu = $request->nama_menu;
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;

        $menu->save();

        return redirect('/kelola-menu');
    }

    public function hapusMenu($id)
    {
        Menu::findOrFail($id)->delete();

        return redirect('/kelola-menu');
    }

}