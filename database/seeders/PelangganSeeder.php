<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::truncate(); //menghapus seluruh data 
        Pelanggan::insert([
            [
            'nama' => 'Budi',
            'telepon' => '082230266669',
            'alamat' => 'Surabaya',
        ],
        [
            'nama' => 'Agus',
            'telepon' => '082230267219',
            'alamat' => 'Sidoarjo',
        ],
        ]);
    }
}
