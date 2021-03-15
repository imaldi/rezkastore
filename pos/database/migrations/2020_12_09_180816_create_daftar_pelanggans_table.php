<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_pelanggans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('no_telp');
            //relasi diskon
            $table->unsignedInteger('diskon_id')->nullable();
            $table->foreign('diskon_id')
                ->on('diskons')
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
        Schema::dropIfExists('daftar_pelanggans');
    }
}
