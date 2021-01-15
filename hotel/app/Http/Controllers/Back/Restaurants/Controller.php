<?php

namespace App\Http\Controllers\Back\Restaurants;

use App\Http\Controllers\Controller as BaseController;
use App\Restaurants;
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
    {  $res=Restaurants::latest()->paginate(10);
        return view('Back.Restaurants.index',compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.Restaurants.create');
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
            'name'=>'required',
            'title'=>'required|array',
            'price'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000000000',
        ]);
        $img=($request->hasFile('img'))?$request->file('img')->store('Back/Uploads'):'';
        $db = new Restaurants([
            'name'=>$request->name,
            'title'=>$request->title,
            'price'=>$request->price,
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
     * @param Restaurants $restaurants
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Restaurants $restaurants)
    {
        \Illuminate\Support\Facades\File::delete($restaurants->img);
        $restaurants->delete();
        return redirect()->back()->with('success','Delete');
    }
}
