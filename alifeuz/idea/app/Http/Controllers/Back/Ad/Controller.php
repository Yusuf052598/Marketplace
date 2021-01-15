<?php

namespace App\Http\Controllers\Back\Ad;

use App\Ad;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $db=Ad::all();
        return view('Back.Ad.index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
          return view('Back.Ad.create');
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
            'title'=>'required|array',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $img=($request->hasFile('img'))? $request->file('img')->store('Back/Ad'): '';
        $db=New Ad([
            'title'=>$request->title,
            'img'=>$img,
            'status'=>$request->status
        ]);
        if ($db->save()){
            return redirect()->back()->with('success','Data wrote successfully');
        }
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
     * @param Ad $ad
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function edit(Ad $ad)
    {
         return view('Back.Ad.edit',compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Ad $ad
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Ad $ad)
    {
        $ad=Ad::findOrFail($request->id);
        if (($request->hasFile('img'))) {$img = $request->file('img')->store('Back/Ad');
            File::delete($ad->img);
        }
        else {
            $img = $ad->img;
        }
        $ad->update([
            'title'=>$request->title,
            'status'=>$request->status,
            'img'=>$img,
        ]);
        return redirect()->route('news');
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
