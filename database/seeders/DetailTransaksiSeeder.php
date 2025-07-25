<?php

namespace Database\Seeders;

use App\Models\DetailTransaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailTransaksi::insert([
            [
                'transaksi_id' => 1,
                'produk_id' => 2,
                'jumlah' => 1,
                'harga_satuan' => 8000,
                'subtotal' => 8000,
            ],
            [
                'transaksi_id' => 2,
                'produk_id' => 1,
                'jumlah' => 2,
                'harga_satuan' => 12000,
                'subtotal' => 24000,
            ]
        ]);
    }
}
