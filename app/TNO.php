<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TNO extends Model
{
    protected $fillable = [
    	'user_id', 'message', 'image',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
