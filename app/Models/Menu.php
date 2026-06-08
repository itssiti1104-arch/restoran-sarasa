<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Menu extends Model
{
    protected $fillable = [
        'nama_menu',
        'harga',
        'kategori',
        'gambar',
        'category_id',
        'stok'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}