<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event'];


	public static function getAll()
	{
		return self::get();
	}
	
}
