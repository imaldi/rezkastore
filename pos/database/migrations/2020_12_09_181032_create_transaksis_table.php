<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_transaksi');
            $table->integer('total_barang');
            $table->integer('subtotal');
            $table->bigInteger('bayar');
            $table->bigInteger('kembali');
            //relasi produk
            $table->unsignedInteger('produk_id')->nullable();
            $table->foreign('produk_id')
                ->on('produks')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //relasi user
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            //relasi daftar_pelanggan
            $table->unsignedInteger('daftar_pelanggan_id')->nullable();
            $table->foreign('daftar_pelanggan_id')
                ->on('daftar_pelanggans')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
