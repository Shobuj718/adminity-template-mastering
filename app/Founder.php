<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    protected $fillable = [
    	'name', 'details', 'image',
    ];
}
