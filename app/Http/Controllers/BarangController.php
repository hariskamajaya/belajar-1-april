<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    // aksi

    public function index()
    {
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    public function create()
    {
        return 'ini adalah halaman menampilkan form create barang';
    }

}
