<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'name', 'department', 'class', 'gender', 'religion', 'birthDate', 'mobile', 'address', 'father', 'father_occupation', 'mother', 'mother_occupation', 'payment', 'amount', 'status', 'trxid', 'image',
    ];
}
