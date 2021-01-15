<?php

namespace App\Http\Controllers\Back\News;

use App\Http\Controllers\Controller as BaseController;
use App\News;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {  $news=News::take(10)->latest()->paginate(10);
        return view('Back.News.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.News.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'url'=>'required',
            'title'=>'required|array',
            'body'=>'required|array',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000000',
        ]);
        $img=($request->hasFile('img'))?$request->file('img')->store('Back/Uploads'):'';
        $db = new News([
            'url'=>Str::slug($request->url),
            'title'=>$request->title,
            'body'=>$request->body,
            'img'=>$img,
        ]);
        $db->save();
        return redirect()->back()->with('success','Yozildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @param News $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(News $news)
    { \Illuminate\Support\Facades\File::delete($news->img);
        $news->delete();
        return redirect()->back()->with('success','Delete');
    }
}
