<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBeliPaketSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_beli_paket_soal', function (Blueprint $table) {
            $table->id();
			$table->timestamps();
			$table->bigInteger('users_id')->unsigned()->nullable();
			$table->bigInteger('paket_soal_id')->unsigned()->nullable();
			$table->foreign('users_id')->references('id')->on('users');
			$table->foreign('paket_soal_id')->references('id')->on('paket_soal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_beli_paket_soal');
    }
}
