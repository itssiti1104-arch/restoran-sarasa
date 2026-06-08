<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;

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
        $request->validate([
            'nama' => 'required|string|max:100',
            'meja' => 'required|integer|min:1|max:20',
        ],[
            'nama.required' => 'Nama wajib diisi',
            'meja.required' => 'Nomor meja wajib dipilih',
        ]);

        $keranjang = session('keranjang', []);

        if(empty($keranjang)){
            return back()->with(
                'error',
                'Keranjang masih kosong.'
            );
        }

        $total = 0;

        foreach($keranjang as $id => $item){

            $menu = Menu::findOrFail($id);

            if($menu->stok < $item['jumlah']){

                return back()->with(
                    'error',
                    'Stok '.$menu->nama_menu.' tidak mencukupi.'
                );
            }

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

            $menu = Menu::findOrFail($id);

            $menu->stok -= $item['jumlah'];

            $menu->save();
        }

        session()->forget('keranjang');

        return view('kode-pesanan', [

            'kode' => $kode,
            'total' => $total

        ]);
    }

    public function statusPesanan()
    {
        $orders = \App\Models\Order::where(
            'user_id',
            auth()->id()
        )
        ->whereDate('created_at', today())
        ->latest()
        ->get();

        return view(
            'status-pesanan',
            compact('orders')
        );
    }

    public function profilPelanggan()
    {
        return view('profil-pelanggan');
    }

    public function ubahPassword(Request $request)
    {
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:8|confirmed'
        ],[
            'password_lama.required' =>
                'Password lama wajib diisi.',

            'password_baru.required' =>
                'Password baru wajib diisi.',

            'password_baru.min' =>
                'Password baru minimal 8 karakter.',

            'password_baru.confirmed' =>
                'Konfirmasi password tidak cocok.'
        ]);

        $user = auth()->user();

        if(
            !Hash::check(
                $request->password_lama,
                $user->password
            )
        ){
            return back()
            ->with('error',
            'Password lama salah');
        }

        $user->password = Hash::make(
            $request->password_baru
        );

        $user->save();

        return back()
        ->with(
            'success',
            'Password berhasil diubah'
        );
    }

    public function updateProfil(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required|digits:12'
        ],[
            'nama.required' => 'Nama lengkap wajib diisi.',

            'username.required' => 'Username wajib diisi.',

            'email.required' => 'Email wajib diisi.',

            'email.email' => 'Format email tidak valid.',

            'nomor_telepon.required' => 'Nomor telepon wajib diisi.',

            'nomor_telepon.digits' => 'Nomor telepon harus 12 digit.'
        ]);

        $user = Auth::user();

        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->nomor_telepon = $request->nomor_telepon;

        $user->save();

        return back()->with(
            'success',
            'Profil berhasil diperbarui.'
        );
    }


    public function riwayatPesanan()
    {
        $orders = Order::with('items.menu', 'kasir')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('riwayat-pesanan', compact('orders'));
    }
}