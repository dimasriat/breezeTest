<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		// \App\Models\User::factory(10)->create();
		DB::table('paket_soal')->insert([
			['nama' => 'TO REG01', 'harga' => 50, 'tipe_soal' => 'SKD'],
			['nama' => 'TO REG02', 'harga' => 60, 'tipe_soal' => 'SKD'],
			['nama' => 'TO NEXT01', 'harga' => 80, 'tipe_soal' => 'TPA_TBI'],
		]);

		DB::table('tipe_voucher')->insert([
			['nama' => 'BRONZE', 'koin' => 100],
			['nama' => 'SILVER', 'koin' => 250],
			['nama' => 'GOLD', 'koin' => 500],
		]);
		
		DB::table('voucher')->insert([
			['serial' => 'ABC-123', 'tipe_voucher_id' => 1],
			['serial' => 'XYZ-696', 'tipe_voucher_id' => 2],
			['serial' => 'PPP-LLL', 'tipe_voucher_id' => 3],
			['serial' => 'AAA-ICE', 'tipe_voucher_id' => 1],
		]);

    }
}
