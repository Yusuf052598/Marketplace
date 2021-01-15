<?php

namespace App\Http\Controllers\Front\Marketplace\Article;

use App\Article;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('Front.article');
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
            'name'=>'required|string',
            'last_name'=>'required|string',
            'username'=>'required|string|unique:articles',
            'phone'=>'required|string',
            'email'=>'required|string',
            'tg_nick'=>'required|regex:/^@/',
            'theme'=>'required|string',
            'tg_canal'=>'required|regex:/^@/',
            'fac_canal'=>'required|string',
            'insta_canal'=>'required|string',
        ]);
        $db=new Article([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'username'=>$request->username,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'tg_nick'=>$request->tg_nick,
            'theme'=>$request->theme,
            'tg_canal'=>$request->tg_canal,
            'fac_canal'=>$request->fac_canal,
            'insta_canal'=>$request->insta_canal,
        ]);
        $db->save();
        return redirect()->back()->with('success','Data wrote successfully');


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
