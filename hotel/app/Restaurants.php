<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $fillable=[
        'img','name','title','price'
    ];
    protected $casts=[
        'title'=>'array',
    ];
}
