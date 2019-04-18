<?php

namespace App\Models;

use App\Http\Controllers\Functions;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $guarded = ['id','slug'];

	public static function findBySlug($slug){
		return static::where('slug',$slug)->first();
	}

	public function categories(){
		return $this->belongsToMany(Category::class);
	}

	public static function boot(){

		parent::boot();

		//slug auto generate
		static::creating(function($model){
			$model->slug = sha1($model->name . Functions::isRand('10'));
		});
	}
}
