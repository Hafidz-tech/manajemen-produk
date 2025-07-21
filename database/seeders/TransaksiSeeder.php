<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaksi::insert([
            [
                'pelanggan_id' => 2,
                'tanggal' => '2024-09-13',
                'total_harga' => 22000,
            ],
            [
                'pelanggan_id' => 1,
                'tanggal' => '2024-08-21',
                'total_harga' => 10000,
            ]
        ]);
    }
}
