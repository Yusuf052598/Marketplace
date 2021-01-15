<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class Card extends Model
{
    protected $fillable=[
        'market_id','user_id','product_id','quantity'
    ];
    public function product(){
        return $this->belongsTo(Products::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function market(){
        return $this->belongsTo(Markets::class);
    }
    public static function count(){
        if(auth()->check()):
            $auth=auth()->user()->id;
        else:
            $auth=0;
        endif;
        return Card::with('product')->where('user_id','=',$auth)->count('id');
    }
    public static function sum(){
        if(auth()->check()):
            $a=0;
            $auth=auth()->user()->id;
            $cards=Card::with('product')->where('user_id','=',$auth)->get();
            foreach ($cards as $card):
                $a+=(int) $card->product->price;
            endforeach;
            return $a;
        else:
            return 0;
        endif;
    }
    static function card(){

        $roleName = auth()->user()->getRoleNames();
        if ($roleName[0]=='super_admin_role'):
            return DB::table('cards')
                ->select('cards.id','cards.user_id','cards.product_id','cards.quantity','markets.name as market')
                ->join('users','users.id','=','cards.user_id')
                ->join('markets','markets.id','=','cards.market_id')
                ->where('cards.market_id','!=','8')
                ->get();
        else:
            $auth=auth()->user()->id;
            return DB::table('cards')
                ->select('cards.id','cards.user_id','cards.product_id','cards.quantity','markets.name as market')
                ->join('users','users.id','=','cards.user_id')
                ->join('markets','markets.id','=','cards.market_id')
                ->where('markets.user_id','=',$auth)
                ->get();
        endif;
    }


}
