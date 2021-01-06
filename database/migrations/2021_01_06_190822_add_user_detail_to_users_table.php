<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserDetailToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
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
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
