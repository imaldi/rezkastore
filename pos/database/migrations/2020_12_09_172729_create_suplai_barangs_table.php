<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuplaiBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplai_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_pembelian');
            $table->bigInteger('total_pembelian');
            $table->integer('jumlah_beli');
            $table->bigInteger('harga_beli');
            //relasi produk
            $table->unsignedInteger('produk_id')->nullable();
            $table->foreign('produk_id')
                ->on('produks')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            //relasi supplier
            $table->unsignedInteger('supplier_id')->nullable();
            $table->foreign('supplier_id')
                ->on('suppliers')
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('suplai_barangs');
    }
}
