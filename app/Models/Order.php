<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'nama_kasir',
        'kode_order',
        'nama_pelanggan',
        'nomor_meja',
        'catatan',
        'total_harga',
        'uang_diterima',
        'kembalian',
        'status'
    ];

    protected $casts = [
        'pembayaran_dikonfirmasi_at' => 'datetime',
        'mulai_proses_at' => 'datetime',
        'selesai_at' => 'datetime',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function kasir()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}