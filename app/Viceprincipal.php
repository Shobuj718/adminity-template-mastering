<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Viceprincipal extends Model
{
    use SoftDeletes;

    protected $dates = ['deletes_at'];

    protected $fillable = [
    	'name', 'mobile', 'message', 'image',
    ];
}
