<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['product'];

    public static function getAll()
    {
    	return self::get();
    }
}
