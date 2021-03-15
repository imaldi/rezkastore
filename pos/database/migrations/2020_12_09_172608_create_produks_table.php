<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_barang');
            $table->enum('jenis_barang',['aksessoris','sparepart','service']);
            $table->string('nama_barang');
            $table->string('tipe')->nullable();
            $table->integer('stok')->default(0);
            $table->bigInteger('harga');
            $table->bigInteger('harga_beli');
            $table->string('keterangan')->default('Tersedia');
            //relasi kategori
            $table->unsignedInteger('kategori_id')->nullable();
            $table->foreign('kategori_id')
                ->on('kategoris')
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
        Schema::dropIfExists('produks');
        
    }
}
