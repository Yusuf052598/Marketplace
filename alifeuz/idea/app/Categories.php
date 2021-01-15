<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

/**
 * @method static findOrFail($name)
 */
class Categories extends Model
{
    protected $fillable=[
        'name','image'
    ];

    protected $casts = [
        'name'=>'array'
    ];


    public function getRouteKey()
    {
        return 'title';
    }
    public function name(){
        switch (App::getLocale())
        {
            case 'ru':
                return $this->name['ru'];
                break;
            default:
                return $this->name['uz'];

        }
    }
    public function news(){
     return    $this->hasMany(News::class,'category_id');
    }

    public static function LastCategories($name){
        $db=DB::table('news')
            ->leftJoin('categories','news.category_id','=','categories.id')
            ->select('news.id','news.title','news.img' ,'categories.name as category')
            ->where('categories.name->en','=',$name)
            ->where('news.status','=','active')
            ->orderBy('news.id','DESC')
            ->paginate(4);
        return $db;
    }
    public static function ReadCount($id)
    {
        $db=News::findOrFail($id);
        $k=$db->read_count+1;
        $db->update([
            'read_count'=>$k
        ]);
        return $db;

    }
}
