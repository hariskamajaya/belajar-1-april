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
        // Barang::create([
        //     'nama_barang' => 'Pulpen',
        //     'jenis' => 'atk',
        //     'ukuran' => 'small'
        // ]);

        Barang::factory()->count(100)->create();

    }
}
