<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketSoal extends Model
{
	use HasFactory;
	protected $table = 'paket_soal';
	protected $fillable = [
		'nama', 'harga'
	];

	public function users() {
		return $this->belongsToMany(Users::class, 'user_beli_paket_soal', 'paket_soal_id', 'users_id');
	}
}
