<?php

namespace App\Http\Controllers\Front\Marketplace\Likes;

use App\Http\Controllers\Controller as BaseController;
use App\News;
use Illuminate\Http\Request;
use App\Likes;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $auth=auth()->user()->id;
        $values=Likes::where('users_id','=',$auth)->where('news_id','=',$request->id)->get();
        if($values->isEmpty()){
        $like=New Likes([
            'users_id'=>$auth,
            'news_id'=>$request->id,
            'likes'=>'active'
        ]);
        $like->save();
        $status=$like->likes;
        $news=News::findOrFail($request->id);
        $count=$news->like_count+1;
        $news->update([
           'like_count'=> $count
        ]);
        $status='active';
    }
        elseif($values[0]->likes=='active'){
        $like=Likes::where('news_id','=',$request->id)
            ->where('users_id','=',$auth)
            ->update(['likes'=>'inactive']);

            $status='inactive';
            $news=News::findOrFail($request->id);
            $count=$news->like_count-1;
            $news->update([
                'like_count'=> $count
            ]);

            $status='inactive';
        }
        elseif($values[0]->likes=='inactive') {
            $like=Likes::where('news_id','=',$request->id)->where('users_id','=',$auth)->update(['likes'=>'active']);
            $news=News::findOrFail($request->id);
            $count=$news->like_count+1;
            $news->update([
                'like_count'=> $count
            ]);
            $status='active';
         }
        return  response()->json(['success'=>$status]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
