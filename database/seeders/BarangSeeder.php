<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // input data ke model barang : 
        Barang::create([
            'nama_barang' => 'Kertas A4',
            'jenis' => 'atk',
            'ukuran' => 'small'
        ]);
    }
}
