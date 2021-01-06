<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::post('/apitest', function(Request $req) {
	$data = $req->input();
	$user = User::find(1);
	$user->update($data);
	return response()->json($user);
	// PaketSoal::create($data);
	// return response()->json(PaketSoal::all());

});