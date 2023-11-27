<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_kriterias', function (Blueprint $table) {
            $table->increments('id_nilai');
            $table->integer('id_user')->unsigned();
            $table->integer('id_kriteria')->unsigned();
            $table->integer('min');
            $table->integer('max');
            $table->integer('nilai');
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
        Schema::dropIfExists('utility_kriterias');
    }
}
