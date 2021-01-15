<?php

namespace App\Http\Controllers\Front;


use App\Announcement;
use App\Article;
use App\Http\Controllers\Controller as BaseController;
use App\Likes;
use App\News;
use App\Notify;
use App\Tags;
use App\Categories;
use App\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
    {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {   $latest_news=News::with('category')->with('user')
            ->where('status','=','active')
            ->orderBy('id','DESC')->take(5)
            ->get(['id','user_id','url','subtitle','title','img','category_id','created_at']);
        $news=News::with('category')->with('user')
            ->where('status','=','active')
            ->orderBy('id','DESC')
            ->get(['id','user_id','url','read_count','subtitle','title','img','category_id','created_at']);
        $notify=Notify::latest()->get();
        $announce=Announcement::latest()->get();
        $article=Article::latest()->get();
        return  view('Front.index' ,compact('news','latest_news','notify','announce','article'));
    }
    public function slider(Sliders $sliders){
           $slider_blog=$sliders;
        return view('Front.block',compact('slider_blog'));
    }
    public function about(){

        return view('Front.about');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  string  $title
     * @return \Illuminate\Http\Response
     */
    public function show($id,$title)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,News $news)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function ajax(Request $request){
        $news=News::with('category')
            ->where('id','<',$request->id)->take(6)
            ->orderByDesc('id')->get();
        $html='';
        $id=0;
        if (!$news->isEmpty())
        foreach ($news as $new):
            /*url*/
           $url=route('blog.show',['user'=>$new->user->name,'id'=>$new->id,'url'=>$new->slugName()]);
           $category=route('category',$new->category->name['uz']);
           $data=date('d-m-Y',strtotime($new->created_at));
           /*Post meta*/
           $post_meta="<div class='post-meta'><a class='post-category' style='background-color: #ff8700; color: white; padding: 2px 10px; border-radius: 3px;' href='{$category}'>{$new->category->name()}</a>
                        <span class='post-date'>{$data}</span>
                        </div>";
            /*Post-title*/
            $h3="<h3 class='post-title'><a href='{$url}'>{$new->title()}</a></h3>";
           $html.="<div class='col-md-4' style='height: 400px'>
                   <div class='post'><a class='post-img post_img' href='{$url}'>";
                   $html.="<img style='height:216px;width:360px;' src='/{$new->img}'>";
                   $html.="</a><div class='post-body' style='margin-top: 5px'>$post_meta$h3</div></div></div>";

           $id=$new->id;
        endforeach;
        return response()->json(['success'=>$html,'count'=>$id]);
    }
    public function filter(Request $request){
        $filter=DB::table('news')
            ->select('news.id','news.img','news.url','news.created_at',
                'news.subtitle->ru as subtitle_ru',
                'news.subtitle->uz as subtitle_uz',
                'news.title->ru as title_ru',
                'news.title->uz as title_uz',
                'categories.name->uz as category_uz',
                'categories.name->ru as category_ru',
                'categories.image as ca_img',
                'users.name as username')
            ->leftJoin('categories','categories.id','=','news.category_id')
            ->leftJoin('users','users.id','=','news.user_id')
            ->where('title','LIKE',"%{$request->name}%")
            ->orWhere('subtitle','LIKE',"%{$request->name}%")->latest()->take(5)->get();
        return view('Front.filter',compact('filter'));
    }
}
