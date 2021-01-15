<?php

namespace App\Http\Controllers\Front\Categories;

use App\Categories;
use App\Http\Controllers\Controller as BaseController;
use App\News;
use App\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param $name
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($name)
    {
        $id=Categories::where("name->uz",$name)->get();
        $id=$id[0]->id;
        $news=News::with('category')->with('user')
            ->where('status','=','active')
            ->where('category_id','=', $id)
            ->orderBy('id','DESC')->take(6)
            ->get(['id','user_id','read_count','url','title','img','category_id','created_at']);
        return  view('Front.categories',compact('news'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
     {

     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param string $url
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(int $id, string $url)
    {

        $singlePosts=News::with('category')->where('id',"=",$id)->get();
        Categories::ReadCount($id);
        $news=News::with('category')->orderBy('id','DESC')->take(6)->get();
        if($news) {
            return view('Front.block', compact('singlePosts','news'));
         }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
