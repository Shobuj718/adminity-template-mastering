<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
   use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'category', 'title'
    ];

     public function subcategory()
    {
    	return $this->hadMany(Subcategory::class);
    }
}