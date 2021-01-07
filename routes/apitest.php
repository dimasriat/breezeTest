<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::get('/apitest', function(Request $req) {
	DB::table('users')->where('id', 1)->update(['koin' => 120]);
	return redirect()->route('tryout_skd.index');
	// PaketSoal::create($data);
	// return response()->json(PaketSoal::all());

});