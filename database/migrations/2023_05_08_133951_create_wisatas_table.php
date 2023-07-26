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
            $table->integer('id_pengelolah')->unsigned();
            $table->integer('id_kategori_wisata')->unsigned();
            $table->integer('id_fasilitas_wisata')->unsigned();
            $table->bigInteger('id_kecamatan')->unsigned();
            $table->string('nama_wisata');
            $table->integer('harga');
            $table->integer('diskon');
            $table->longText('artikel')->nullable();
            $table->timestamps();

            $table->foreign('id_pengelolah')
            ->references('id_user')->on('users')
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
            ->references('id')->on('kecamatans')
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
