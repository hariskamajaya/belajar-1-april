<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    // aksi

    public function index()
    {
        return 'Ini adalah halaman index barang';
    }

    public function create()
    {
        return 'ini adalah halaman menampilkan form create barang';
    }

}
