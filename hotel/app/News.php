<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=[
        'img','url','title','body'
    ];
    protected $casts=[
        'title'=>'array',
        'body'=>'array'
    ];
}
