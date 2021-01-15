<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Sliders extends Model
{
    protected $fillable=[
        'id','title','content_name','img','read_count','status',
    ];
    protected $casts=[
        'title'=>'array','content_name'=>'array'
    ];
    public function title(){
        switch (App::getLocale())
        {
            case 'ru':
                return $this->title['ru'];
                break;
            default:
                return $this->title['uz'];

        }
    }
    public function content_name(){
        switch (App::getLocale())
        {
            case 'ru':
                return $this->content_name['ru'];
                break;
            default:
                return $this->content_name['uz'];
        }
    }
    public function slugName(){
        return Str::slug($this->title['uz']);
    }
}
