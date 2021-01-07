<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\PaketSoal;
// use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TryOutSKDController extends Controller
{
    public function index() {
		$paketSoal = DB::table('paket_soal')
			->where('tipe_soal', '=', 'SKD')
			->get();
		$paketSoalDibeli = DB::table('users_beli_paket_soal')
			->join('paket_soal', 'users_beli_paket_soal.paket_soal_id', '=', 'paket_soal.id')
			->select('paket_soal.*')
			->where('users_id', '=', Auth::user()->id)
			->where('tipe_soal', '=', 'SKD')
			->get();
		
		return view('tryout.index', [
			"paket_soal" => $paketSoal,
			"paket_soal_dibeli" => $paketSoalDibeli,
		]);
	}

	public function store(Request $request) {
		$paketSoalId = $request->input('paket_soal_id');
		[$paketSoal] = DB::table('paket_soal')
			->where('id', '=', $paketSoalId)
			->limit(1)
			->get();
		$sisakoin = Auth::user()->koin - $paketSoal->harga;
		if ($sisakoin < 0) {
			return redirect()->route('tryout_skd.index')->withErrors(['Koin tidak cukup untuk membeli']);	
		} else {
			DB::table('users_beli_paket_soal')
				->insert([
					'users_id' => Auth::user()->id,
					'paket_soal_id' => $paketSoalId,
				]);

			Auth::user()->update(['koin' => $sisakoin]);
			return redirect()->route('tryout_skd.index');
		}
	}
}
