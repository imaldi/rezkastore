<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTokosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko');
            $table->string('no_telp');
            $table->text('alamat');
            $table->timestamps();
        });

        DB::table('tokos')->insert(
            array(
                'nama_toko' => 'Rezka Store',
                'no_telp' => '087878787878',
                'alamat' => 'Jalan By Pass Widasari'
            )
        );
    }

    public function down()
    {
        Schema::dropIfExists('tokos');
    }
}
