<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {		
		Schema::create('tipe_voucher', function (Blueprint $table) {
			$table->id();
			$table->string('nama');
			$table->integer('koin')->unsigned();
            $table->timestamps();
		});
		
        Schema::create('voucher', function (Blueprint $table) {
			$table->id();
			$table->string('serial');
			$table->bigInteger('tipe_voucher_id')->unsigned()->nullable();
			$table->bigInteger('users_id')->unsigned()->nullable();
			$table->foreign('tipe_voucher_id')->references('id')->on('tipe_voucher');
			$table->foreign('users_id')->references('id')->on('users');
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
		Schema::dropIfExists('voucher');
		Schema::dropIfExists('tipe_voucher');
    }
}
