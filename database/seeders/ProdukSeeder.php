<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::insert([
            [
                'nama' => 'Kameja Hitam',
                'kategori_id' => 1,
                'stok' => 25,
                'harga' => 12000,
            ],
            [
                'nama' => 'Remote Televisi',
                'kategori_id' => 2,
                'stok' => 10,
                'harga' => 8000,
            ],
            [
                'nama' => 'Kripik Tempe',
                'kategori_id' => 3,
                'stok' => 30,
                'harga' => 2000,
            ]
        ]);
    }
}
