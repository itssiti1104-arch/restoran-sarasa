<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [

        'user_id',
        'kode_order',
        'nama_pelanggan',
        'nomor_meja',
        'catatan',
        'total_harga',
        'uang_diterima',
        'kembalian',
        'status'

    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}