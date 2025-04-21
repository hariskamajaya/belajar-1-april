<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\UmurController;
use App\Http\Middleware\UmurMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// routing dengan method get
// jalankan di localhost:8000/hello
Route::get('hello', function(){
    return 'Ini adalah respon hello.';
});

// Routing dengan parameter
//biasa digunakan untuk menampilkan halaman dengan data spesifik
Route::get('mobil/{merek}', function($merek){
    $data = $merek;
    return 'hallo, Merek mobil saya adalah : ' . $data;
});

//Route parameter optional
Route::get('motor/{merek?}', function($merek = 'Yamaha'){
    return 'hallo, Merek motor saya adalah : '.$merek;
});

// Route dengan name 
Route::get('dashboard', function(){
    return view('latihan.dashboard');
})->name('halaman-dashboard');

Route::post('kirim', function(){
    return redirect()->route('halaman-dashboard');
})->name('kirim');

Route::get('profile', function(){
    return view('latihan.profile');
})->name('halaman-profile');


// Group dengan routing.
//ini groupnya
Route::prefix('training')->group(function(){

    // item 1
    Route::get('laravel', function(){
        return 'Ini adalah kelas Laravel';
    })->name('training.laravel');
    
    // item 2
    Route::get('ccna', function(){
        return 'Ini adalah kelas CCNA';
    })->name('training.ccna');

    // item 2
    Route::get('mtcna', function(){
        return 'Ini adalah kelas MTCNA';
    })->name('training.mtcna');

});

// pemanggilan controller.

Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');

// route resource
Route::resource('ruangan', RuanganController::class);

Route::get('report', [RuanganController::class, 'report'])->name('ruangan.report');

Route::prefix('umur')->group(function(){
    //Route untuk form umur : 
    Route::get('form-umur', [UmurController::class, 'form_umur'])->name('form');
    Route::post('proses', [UmurController::class, 'proses'])->name('proses');
    Route::get('berhasil', [UmurController::class, 'berhasil'])
    ->middleware(UmurMiddleware::class)->name('berhasil');

});






