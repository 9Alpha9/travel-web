<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas_wisatas', function (Blueprint $table) {
            $table->increments('id_fasilitas_wisata');
            $table->string('fasilitas_wisata');
            $table->integer('id_kategori_fasilitas')->unsigned();
            $table->timestamps();

            $table->foreign('id_kategori_fasilitas')
            ->references('id_kategori_fasilitas')->on('kategori_fasilitas')
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
        Schema::dropIfExists('fasilitas_wisatas');
    }
}
