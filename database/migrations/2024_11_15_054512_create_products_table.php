<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
   
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); // Nama produk
            $table->bigInteger('price'); // Harga produk
            $table->string('category'); // Kategori produk
            $table->text('description'); // Deskripsi produk
            $table->string('image'); // Nama atau path gambar produk
            $table->timestamps(); // Waktu pembuatan dan pembaruan (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
