<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Checkout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_brand');
            $table->integer('jumlah_produk');
            $table->string('jenis_produk');
            $table->string('konsep');
            $table->string('penggunaan');
            // $table->string('data_pemesan');        #nama, alamat lengkap, no.hp, email #dihubungin sama user
            $table->string('request')->nullable();
            $table->string('format_foto');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout');
    }
}
