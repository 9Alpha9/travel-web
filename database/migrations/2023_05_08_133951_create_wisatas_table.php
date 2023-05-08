<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->increments('id_wisata');
            $table->string('nama_wisata');
            $table->integer('id_kota')->unsigned();
            $table->integer('id_kategori_wisata')->unsigned();
            $table->integer('id_fasilitas_wisata')->unsigned();
            $table->integer('id_kecamatan')->unsigned();
            $table->timestamps();

            $table->foreign('id_kota')
            ->references('id_kota')->on('kotas')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_kategori_wisata')
            ->references('id_kategori_wisata')->on('kategori_wisatas')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_fasilitas_wisata')
            ->references('id_fasilitas_wisata')->on('fasilitas_wisatas')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_kecamatan')
            ->references('id_kecamatan')->on('kecamatans')
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
        Schema::dropIfExists('wisatas');
    }
}
