<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoPaketSoalTipeSkd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		$paketSoalArray = [];
		for ($i = 1; $i <= 10; $i++) {
			array_push($paketSoalArray, [
				'nama' => 'TO REG ' . $i,
				'harga' => 50 + ($i % 3) * 2,
				'tipe_soal' => 'SKD'
			]);
		}
		DB::table('paket_soal')->insert($paketSoalArray);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
