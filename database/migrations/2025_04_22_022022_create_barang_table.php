<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id(); //column id
            $table->string('nama_barang'); //column nama barang -> varchar
            $table->enum('jenis',['elektronik', 'cair', 'atk']); //column jenis -> 
            $table->enum('ukuran', ['small', 'large', 'extra large']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
