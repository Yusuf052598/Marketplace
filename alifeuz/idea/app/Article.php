<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
      'url','title','content_name','status'
    ];
    protected $casts=[
      'title'=>'array',
      'content_name'=>'array'
    ];
}
