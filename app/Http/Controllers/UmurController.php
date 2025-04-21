<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    //form umur
    public function form_umur()
    {
        return view('umur.form');
    }

    //proses
    public function proses(Request $request)
    {
        // validasi form
        $request->validate([
            'nama' => 'required|string|min:3|max:30',
            'umur' => 'required|integer|min:1|max:100',
        ]);

        // mengarahkan ke halaman berhasil
        return redirect()->route('berhasil')->with('msg', 'Selamat, umur anda memenuhi syarat');
        
    }

    //halaman berhasil
    public function berhasil()
    {
        return view('umur.berhasil');
    }
}
