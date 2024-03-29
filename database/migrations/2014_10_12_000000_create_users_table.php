<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('user_type')->nullable();
            $table->string('social_id')->nullable();
            $table->string('full_name')->nullable();
            $table->text('image')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->boolean('pengajuan')->default(0);
            $table->string('status')->nullable();
            $table->string('alasan')->nullable();
            $table->timestamp('tanggal_pengajuan')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
