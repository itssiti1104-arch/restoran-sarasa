<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $request->validate([
            'nama_menu' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric|min:1',
            'gambar' => 'required|image'
        ],[
            'nama_menu.required' => 'Nama menu wajib diisi.',
            'kategori.required' => 'Kategori wajib dipilih.',
            'harga.required' => 'Harga wajib diisi.',
            'gambar.required' => 'Foto menu wajib dipilih.'
        ]);

        session()->flash('modal', 'tambah');

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

    public function laporanPenjualan(Request $request)
    {
        $tanggal = $request->tanggal ?? today()->toDateString();

        $orders = Order::with('items.menu')
            ->whereDate('created_at', $tanggal)
            ->whereIn('status', [
                'selesai',
                'dibatalkan'
            ])
            ->latest()
            ->get();

        $totalPenjualan = Order::whereDate(
            'created_at',
            $tanggal
        )
        ->where('status', 'selesai')
        ->sum('total_harga');

        $totalTransaksi = Order::whereDate(
            'created_at',
            $tanggal
        )
        ->where('status', 'selesai')
        ->count();

        $rataRataTransaksi =
            $totalTransaksi > 0
            ? $totalPenjualan / $totalTransaksi
            : 0;

        $menuTerlaris = OrderItem::selectRaw(
                'menu_id,
                SUM(jumlah) as total_terjual'
            )
            ->with('menu')
            ->whereHas('order', function($q)
            use ($tanggal){

                $q->whereDate(
                    'created_at',
                    $tanggal
                )
                ->where('status', 'selesai');

            })
            ->groupBy('menu_id')
            ->orderByDesc('total_terjual')
            ->first();

        return view(
            'laporan-penjualan',
            compact(
                'orders',
                'tanggal',
                'totalPenjualan',
                'totalTransaksi',
                'rataRataTransaksi',
                'menuTerlaris'
            )
        );
    }

    public function exportPdf(Request $request)
    {
        $tanggal =
            $request->tanggal ??
            today()->toDateString();

        $orders = Order::with('items.menu')
            ->whereDate('created_at', $tanggal)
            ->whereIn('status', [
                'selesai',
                'dibatalkan'
            ])
            ->latest()
            ->get();

        $totalPenjualan = Order::whereDate(
                'created_at',
                $tanggal
            )
            ->where('status', 'selesai')
            ->sum('total_harga');

        $totalTransaksi = Order::whereDate(
                'created_at',
                $tanggal
            )
            ->where('status', 'selesai')
            ->count();

        $rataRataTransaksi =
            $totalTransaksi > 0
            ? $totalPenjualan / $totalTransaksi
            : 0;

        $menuTerlaris = OrderItem::selectRaw(
                'menu_id,
                SUM(jumlah) as total_terjual'
            )
            ->with('menu')
            ->whereHas('order', function($q)
            use ($tanggal){

                $q->whereDate(
                    'created_at',
                    $tanggal
                )
                ->where('status', 'selesai');

            })
            ->groupBy('menu_id')
            ->orderByDesc('total_terjual')
            ->first();

        $pdf = Pdf::loadView(
            'pdf.laporan-penjualan',
            compact(
                'orders',
                'tanggal',
                'totalPenjualan',
                'totalTransaksi',
                'rataRataTransaksi',
                'menuTerlaris'
            )
        );

        return $pdf->download(
            'laporan-penjualan-'.$tanggal.'.pdf'
        );
    }

}