<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Eventinfo extends Model
{
    use SoftDeletes;

    protected $dates = ['deletes_at'];

    protected $fillable = [
    	'event_name', 'event_cat_id', 'details', 'image'
    ];

    public function event()
    {
    	return $this->belongsTo(Event::class, 'event_cat_id', 'id');
    }
}
