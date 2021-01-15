<?php

namespace App\Http\Controllers\Front\Marketplace\Register;

use App\Http\Controllers\Controller as BaseController;
use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return int
     */
    public function index()
    {
        return 12;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $news=News::with('category')->orderBy('id','DESC')->take(3)->get(['id','title','img','category_id']);
        return view('Front.Register.create',compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {   $request->validate([
        'name'=>'required|string|unique:users',
        'last_name'=>'required|string',
        'email'=>'required||unique:users',
        'password'=>'required|string|min:4|max:14',

    ]);
        $db=New User([
           'name'=>$request->name,
           'last_name'=>$request->last_name,
           'email'=>$request->email,
           'pass'=>$request->password,
           'admin'=>'1',
           'password'=>Hash::make($request->password),
           'email_verified_at' => now(),
           'remember_token' => Str::random(10)
        ]);
        $db->save();
        return  redirect()->route('index')->with('success','Royhatdan Otdingiz');
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
