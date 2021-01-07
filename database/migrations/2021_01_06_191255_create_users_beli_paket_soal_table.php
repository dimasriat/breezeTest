<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersBeliPaketSoalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_beli_paket_soal', function (Blueprint $table) {
            $table->bigInteger('users_id')->unsigned()->nullable();
			$table->bigInteger('paket_soal_id')->unsigned()->nullable();
			$table->foreign('users_id')->references('id')->on('users');
			$table->foreign('paket_soal_id')->references('id')->on('paket_soal');
			$table->primary(['users_id', 'paket_soal_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_beli_paket_soal');
    }
}
