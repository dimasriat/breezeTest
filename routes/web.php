<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'index'])
	->middleware(['auth'])->name('dashboard.index');
Route::get('/dashboard/edit', [UserController::class, 'edit'])
	->middleware(['auth'])->name('dashboard.edit');
Route::put('/dashboard/edit', [UserController::class, 'update'])
	->middleware(['auth'])->name('dashboard.update');

Route::get('/voucher', [VoucherController::class, 'index'])
	->middleware(['auth'])->name('voucher.index');

require __DIR__ . '/auth.php';
