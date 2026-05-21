<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'nama_menu' => 'Nasi Goreng',
            'harga' => 20000,
            'kategori' => 'makanan',
            'gambar' => 'nasi_goreng.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Ayam Geprek',
            'harga' => 15000,
            'kategori' => 'makanan',
            'gambar' => 'ayam_geprek.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Ayam Bakar',
            'harga' => 25000,
            'kategori' => 'makanan',
            'gambar' => 'ayam_bakar.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Spaghetti',
            'harga' => 20000,
            'kategori' => 'makanan',
            'gambar' => 'spaghetti.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Mie Goreng Jawa',
            'harga' => 15000,
            'kategori' => 'makanan',
            'gambar' => 'mie_jawa.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Nasi Uduk',
            'harga' => 15000,
            'kategori' => 'makanan',
            'gambar' => 'nasi_uduk.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Es Teh',
            'harga' => 3000,
            'kategori' => 'minuman',
            'gambar' => 'teh.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Thai Tea',
            'harga' => 7000,
            'kategori' => 'minuman',
            'gambar' => 'thai_tea.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Es Jeruk',
            'harga' => 5000,
            'kategori' => 'minuman',
            'gambar' => 'jeruk.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Es Teler',
            'harga' => 10000,
            'kategori' => 'minuman',
            'gambar' => 'teler.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Cendol',
            'harga' => 10000,
            'kategori' => 'minuman',
            'gambar' => 'cendol.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Air Mineral',
            'harga' => 3000,
            'kategori' => 'minuman',
            'gambar' => 'air.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Coklat Lava',
            'harga' => 18000,
            'kategori' => 'dessert',
            'gambar' => 'coklat_lava.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Martabak',
            'harga' => 15000,
            'kategori' => 'dessert',
            'gambar' => 'martabak.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Puding Coklat',
            'harga' => 20000,
            'kategori' => 'dessert',
            'gambar' => 'puding_coklat.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Kolak Pisang',
            'harga' => 20000,
            'kategori' => 'dessert',
            'gambar' => 'kolak_pisang.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Bubur Candil',
            'harga' => 15000,
            'kategori' => 'dessert',
            'gambar' => 'bubur_candil.jpeg'
        ]);

        Menu::create([
            'nama_menu' => 'Dadar Gulung',
            'harga' => 15000,
            'kategori' => 'dessert',
            'gambar' => 'dadar_gulung.jpeg'
        ]);
    }
}