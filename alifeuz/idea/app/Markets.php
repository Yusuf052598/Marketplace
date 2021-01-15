<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markets extends Model
{
    protected $fillable=[
        'id','user_id','name','img','region_id','created_at','updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function users()
    {
        return 12;
    }
    public function region()
    {
        return $this->belongsTo(Regions::class);
    }
    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
    public function category()
    {
        return $this->hasMany(MarketCategories::class,'market_id');
    }
}
