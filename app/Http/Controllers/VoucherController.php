<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    public function index()
	{
		$voucherAvailable = DB::table('voucher')
			->join('tipe_voucher', 'voucher.tipe_voucher_id', '=', 'tipe_voucher.id')
			->select('serial', 'nama', 'koin')
			->whereNull('voucher.users_id')
			->get();
		return view('voucher.index', ['voucherAvailable' => $voucherAvailable]);
	}

	public function update(Request $request) {
		$serialInput = $request->input('serial');
		$request->validate(['serial' => 'required']);
		/**
		 * @var $checkVoucher akan berisi [] apabila voucher dengan serial yg dimasukkan tidak tersedia
		 * @var $checkVoucher akan berisi [{nama: 'gold', koin: 500}] apabila ada isinya
		 */
		$checkVoucher = DB::table('voucher')
			->join('tipe_voucher', 'voucher.tipe_voucher_id', '=', 'tipe_voucher.id')
			->select('nama', 'koin')
			->where('serial', '=', $serialInput)
			->whereNull('voucher.users_id')
			->limit(1)
			->get();
		if (count($checkVoucher)) {
			DB::table('voucher')
				->where('serial', '=', $serialInput)
				->update(['users_id' => Auth::user()->id]);
			Auth::user()->update(['koin' => Auth::user()->koin + $checkVoucher[0]->koin]);
			return back()->with('status', 'sukses menambahkan ' . $checkVoucher[0]->koin . ' koin');
		} else {
			return back()->withErrors('serial tidak valid');
		}
	}
}
