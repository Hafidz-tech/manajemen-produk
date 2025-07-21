<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Transaksi;
use App\Models\Transaksis;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KategoriSeeder::class,
            ProdukSeeder::class,
            PelangganSeeder::class,
            TransaksiSeeder::class,
            
        ]);
    }
}
