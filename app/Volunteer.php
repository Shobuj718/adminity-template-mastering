<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Volunteer extends Model
{
    use SoftDeletes;

    protected $dates = ['deletes_at'];

    protected $fillable = [
    	'name', 'details', 'event_id', 'event_date', 'image',
    ];
}
