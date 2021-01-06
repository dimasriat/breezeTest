<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketSoal;

class TryOutSKDController extends Controller
{
    public function index() {
		$paketSoal = PaketSoal::all();
		return view('tryout.index', [
			"paket_soal" => $paketSoal,
		]);
	}
}
