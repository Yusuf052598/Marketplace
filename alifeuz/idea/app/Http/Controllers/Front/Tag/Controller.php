<?php

namespace App\Http\Controllers\Front\Marketplace\Tag;

use App\Http\Controllers\Controller as BaseController;
use App\Tags;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    public function filter($name)
    {
        $tags=Tags::where('tags->uz','=',$name)->get();
        Tags::ReadCount($tags[0]->id);
        $filter=DB::table('news')->select('news.id','news.img','news.url','news.created_at','news.title->en as title_en','news.title->uz as title_uz','categories.name->uz as category_uz','categories.name->en as category_en','users.name as username')
            ->leftJoin('categories','categories.id','=','news.category_id')
            ->leftJoin('users','users.id','=','news.user_id')
            ->where('title->uz','LIKE',"%{$name}%")
           ->orWhere('title->ru','LIKE',"%{$name}%")->paginate(6);
       return view('Front.filter',compact('filter'));
    }
}
