<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MarketCategories extends Model
{
    protected $fillable=[
        'name','market_id',
    ];
    protected $casts=[
        'name'=>'array'
    ];
    public function market()
    {
        return $this->belongsTo(Markets::class);
    }
    public function product()
    {
        return $this->hasMany(Products::class,'category_id');
    }
    public function name()
    {
        switch (App::getLocale()) {
            case 'uz':
                return $this->name['uz'];
                break;
            default:
                return $this->name['ru'];
        }

    }
    static function CategoryData(){
        $roleName = auth()->user()->getRoleNames();
        if ($roleName[0]=='super_admin_role'):
            return $categories=DB::table('market_categories')
                ->select('market_categories.id','market_categories.name as category','markets.name as  market','markets.img as photo')
                ->join('markets','market_categories.market_id','=','markets.id')
                ->get();
        else:
            $auth=auth()->user()->id;
            return    $categories=DB::table('market_categories')
                ->select('market_categories.id','market_categories.name as category','markets.name as  market','markets.img as photo')
                ->join('markets','market_categories.market_id','=','markets.id')
                ->where('markets.user_id','=',$auth)->get();
        endif;
    }
}
