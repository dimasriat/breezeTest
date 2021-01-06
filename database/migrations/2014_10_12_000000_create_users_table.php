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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
			$table->timestamps();
			// TAMBAHAN
			$table->string('jenis_kelamin')->nullable();
			$table->string('no_telp')->nullable();
			$table->string('pendidikan_terakhir')->nullable();
			$table->string('jurusan')->nullable();
			$table->string('instansi_yang_dituju')->nullable();
			$table->integer('koin')->unsigned()->default(0);

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
