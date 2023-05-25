<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tickets', function (Blueprint $table) {
            $table->increments('id_ticket');
            $table->integer('id_wisata')->unsigned();
            $table->integer('id_pelanggan')->unsigned();
            $table->integer('jumlah_orang');
            $table->date('tanggal_tiket');
            $table->string('snap_token', 36)->nullable();
            $table->enum('payment_status', ['1', '2', '3', '4'])->comment('1=menunggu pembayaran, 2=sudah dibayar, 3=kadaluarsa, 4=batal');
            $table->integer('total_harga');
            $table->integer('diskon');
            $table->timestamps();

            $table->foreign('id_wisata')
            ->references('id_wisata')->on('wisatas')
            ->onUpdate('cascade')
            ->onDelete('restrict');

            $table->foreign('id_pelanggan')
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
        Schema::dropIfExists('order_tickets');
    }
}
