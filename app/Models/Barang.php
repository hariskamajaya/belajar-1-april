<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

    use HasFactory;

    //koneksi tabel barang dengan model barang
    protected $table = 'barang';

    protected $fillable = [
        'nama_barang', 'jenis', 'ukuran'
    ];
}

/**
 * buat model barang -> php artisan make:model Barang
 * php artisan make:seeder BarangSeeder
 * 
 * mengirimkan data : 
 * php artisan db:seed --class=BarangSeeder
 * 
 */
