<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar_wisatas', function (Blueprint $table) {
            $table->increments('id_gambar_wisata');
            $table->integer('id_wisata')->unsigned();
            $table->string('nama_gambar');
            $table->string('keterangan_gambar');
            $table->timestamps();

            $table->foreign('id_wisata')
            ->references('id_wisata')->on('wisatas')
            ->onUpdate('cascade')
            ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambar_wisatas');
    }
}
