<?php

namespace App\Http\Controllers\Back\Categories;

use App\Categories;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {   $db=Categories::all();
        return view('Back.Categories.index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.Categories.create');
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
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        $img=($request->hasFile('image'))? $request->file('image')->store('Back/Uploads/Categories'): '';

        $db=New Categories([
          'name'=>$request->name,
          'image'=>$img
        ]);
            $db->save();
        if ($db){
            return back()->with('success', 'Saqlandi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Categories $categories)
    {
        return view('Back.Categories.edit',compact('categories'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Categories $categories)
    {  /**/
        $categories=Categories::findOrFail($request->id);
        if (($request->hasFile('image'))) {$img = $request->file('image')->store('Back/Uploads/Categories');
            File::delete($categories->img);
        }
        else {
            $img = $categories->img;
        }

          $categories=Categories::findOrFail($request->id);
           $categories->update([
               'name'=>$request->name,
               'image'=>$img
           ]);
       return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Categories $categories)
    {
        File::delete($categories->image);
        $categories->delete();
        return back()->with('success','delete');
    }
}
