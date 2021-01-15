<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    protected $fillable=[
       'title','name','company','tex','tel','salary','description','status'
    ];
}
