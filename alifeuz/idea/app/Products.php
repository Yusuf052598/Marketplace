<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    protected $fillable=[
        'recommen','user_id','category_id','name','title','price','share_price','status'
    ];
    protected $casts=[
        'name'=>'array',
        'title'=>'array',
    ];
    public function category()
    {
        return $this->belongsTo(MarketCategories::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function photos(){
        return $this->morphMany('App\Photo','imageable');
    }

    public function name(){
        switch (App::getLocale())
        {
            case 'uz':
                return $this->name['uz'];
                break;
            default:
                return $this->name['ru'];

        }
    }
    public function title(){
        switch (App::getLocale())
        {
            case 'uz':
                return $this->title['uz'];
                break;
            default:
                return $this->title['ru'];

        }
    }

}
