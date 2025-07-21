<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['pelanggan_id', 'tanggal', 'total_harga'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
