<?php

namespace App\Models;

use App\Http\Controllers\Functions;
use App\Http\Requests\FilmRequest;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{

	protected $guarded = ['id'];

	public function films(){
		return $this->belongsToMany(Film::class);
	}

}
