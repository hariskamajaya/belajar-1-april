<?php

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



