<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
	   use SoftDeletes;

    protected $fillable = [
    	'time'
    ];

    protected $casts = [
	    'time' => 'datetime',
	];
}
