<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Importantlink extends Model
{
    use  SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'linkName', 'address', 'category_id'
    ];
}
