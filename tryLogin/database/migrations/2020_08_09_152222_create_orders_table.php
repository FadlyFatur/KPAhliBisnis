<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('name_depan');
          $table->string('name_belakang');
          $table->string('email');
          $table->string('telphone');
          $table->text('address');
          $table->string('Provinsi');
          $table->string('Kabupaten');
          $table->string('Kode_pos');
          $table->string('nama_produk');
          $table->string('konsep');
          $table->string('pengunaan_foto');
          $table->text('cart');
          $table->integer('user_id');
          $table->string('payment_id');
          $table->string('filename')->nullable();
          $table->boolean('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
