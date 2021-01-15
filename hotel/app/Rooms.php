<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable=[
        'img','name','body','price'
    ];
    protected $casts=[
        'body'=>'array',
    ];
}
