<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;

class News extends Model
{   protected $fillable=[
        'id','user_id','url','subtitle','featured','category_id','title','content_name','img','like_count','read_count','status','created_at',
    ];
    protected $casts=[
      'title'=>'array',
      'subtitle'=>'array',
      'content_name'=>'array'
    ];
    public static function apiMoney(){
        $client = new \GuzzleHttp\Client();
        $request = $client->request( 'GET', "http://cbu.uz/ru/arkhiv-kursov-valyut/json/");
        $response = $request->getBody()->getContents();
        $obj=json_decode($response);
        $array=[$obj[0],$obj[1],$obj[2],$obj[3]];

        return $array;
    }
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
    public function subtitle(){
        switch (App::getLocale())
        {
            case 'ru':
                return $this->subtitle['ru'];
                break;
            default:
                return $this->subtitle['uz'];

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
          return Str::slug($this->url);
      }

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->hasMany(Tags::class);
    }
    public function check($auth,$id)
    {
       $likes=Likes::with('news')
           ->where('users_id','=',$auth)
           ->where('news_id','=',$id)
           ->get();
       if ($likes->isEmpty()){
       return 0;
       }
       else{
           if ($likes[0]->likes=='active'){
           return 1;
           }
           else{
               return 0;
           }
       }

    }
   static public function ItMostReads(){

      return News::with('category')->with('user')
           ->where('status','=','active')
           ->where('category_id','=',4)
           ->orderBy('read_count','DESC')->take(4)
           ->get(['id','user_id','url','title','img','category_id','created_at']);
   }
    static public function ItNews(){

        return News::with('category')->with('user')
            ->where('status','=','active')
            ->where( 'category_id','=',4)
            ->orderBy('id','DESC')->take(6)
            ->get(['id','user_id','url','title','img','category_id','created_at']);
    }
    static public function ItFeatured(){
        return News::with('category')->with('user')
            ->where('status','=','active')
            ->where('category_id','=',4)
            ->where('featured','=','1')
            ->orderBy('id','DESC')->take(3)
            ->get(['id','user_id','url','title','featured','img','category_id','created_at']);
    }
}
