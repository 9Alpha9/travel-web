<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_wisatas', function (Blueprint $table) {
            $table->increments('id_rating_wisata');
            $table->integer('id_wisata');
            $table->string('niilai');
            $table->integer('id_user');
            $table->timestamps();

            $table->foreign('id_wisata')
            ->references('id_wisata')->on('wisatas')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_user')
            ->references('id_user')->on('users')
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
        Schema::dropIfExists('rating_wisatas');
    }
}