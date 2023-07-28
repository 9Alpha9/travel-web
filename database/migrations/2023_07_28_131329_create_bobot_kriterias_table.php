<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBobotKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobot_kriterias', function (Blueprint $table) {
            $table->increments('id_bobot');
            $table->integer('id_user')->unsigned();
            $table->integer('id_kriteria')->unsigned();
            $table->integer('bobot');
            $table->timestamps();

            $table->foreign('id_user')
            ->references('id_user')->on('users')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_kriteria')
            ->references('id_kriteria')->on('kriterias')
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
        Schema::dropIfExists('bobot_kriterias');
    }
}
