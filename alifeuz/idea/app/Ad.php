<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable=[
        'title','status','img'
    ];
    protected $casts=[
      'title'=>'array'
    ];
}
