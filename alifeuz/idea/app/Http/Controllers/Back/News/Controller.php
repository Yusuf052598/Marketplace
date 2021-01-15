<?php

namespace App\Http\Controllers\Back\News;

use App\Categories;
use App\Http\Controllers\Controller as BaseController;
use App\News;
use App\Tags;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $roleName = auth()->user()->getRoleNames();
        if ($roleName[0]=='super_admin_role'):
            $db=News::with('category')->with('user')->orderBy('id','DESC')->paginate(10);
        else:
             $auth=auth()->user()->id;
             $db=News::with('category')->with('user')->where('user_id','=',$auth)->orderBy('id','DESC')->paginate(10);
        endif;
        return  view('Back.News.index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
           'url'=>'required|string',
           'title'=>'required|array',
           'subtitle'=>'required|array',
           'category_id'=>'required|int',
           'editor'=>'required|array',
           'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ]);
          $auth=auth()->user()->id;
          $img=($request->hasFile('img'))? $request->file('img')->store('Back/Uploads'): '';
          $db=New News([
            'user_id'=>$auth,
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'content_name'=>$request->editor,
            'img'=>$img,
            'url'=>$request->url,
            'featured'=>$request->featured,
            'slider'=>$request->slider,
            'status'=>$request->status
        ]);
           if ($db->save()){
            for($i=1;$i<=count($request->tags)-1;$i++) {
                $a =str_replace(['_','#'],['',''],$request->tags[$i-1]);
                $b =str_replace(['_','#'],['',''],$request->tags[$i]);
                $i=$i+++1;
                $db1=New Tags([
                    'news_id'=>$db->id,
                    'tags'=>['uz'=>$a,'ru'=>$b]
                ]);
                $db1->save();
            }
            return redirect()->back()->with('success','Data wrote successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {    $news=News::with('tags')->where('id','=',$id)->get();
        $categories=Categories::all();
        return  view('Back.News.edit',compact('news','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, News $news)
    {   $news=News::findOrFail($request->id);
        if (($request->hasFile('img'))) {$img = $request->file('img')->store('Back/Uploads');
         File::delete($news->img);
        }
        else {
            $img = $news->img;
        }
        $news->update([
            'url'=>$request->url,
            'title'=>$request->title,
            'content_name'=>$request->content_name,
            'status'=>$request->status,
            'category_id'=>$request->category_id,
            'img'=>$img,
            'featured'=>$request->featured,
            'slider'=>$request->slider,
        ]);
         if ($news->update()) {
            $k=0;
            for ($i = 1; $i <= count($request->tags) - 1; $i++) {
                $a =str_replace(['_','#'],['',''],$request->tags[$i-1]);
                $b =str_replace(['_','#'],['',''],$request->tags[$i]);
                $i = $i+++1;
                $tags=Tags::findOrFail($request->tag_id[$k]);
                $tags->update([
                    'tags' => ['uz' => $a, 'ru' => $b]
                ]);
                $k++;
            }
          }

      return redirect()->route('news')->with('success','Data Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\News $news
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(News $news)
    {
       $tags=Tags::where('news_id','=',$news->id)->get();
       if (!$tags->isEmpty()):
        foreach ($tags as $tag):
         $tag->delete();
        endforeach;
       endif;
        File::delete($news->img);
        $news->delete();
        return back()->with('success','Delete');
    }

    public function upload(Request $request)
    {

        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('Uploads', $filenametostore);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/Uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
