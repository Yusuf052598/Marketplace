<?php

namespace App\Http\Controllers\Back\Products;

use App\Categories;
use App\Http\Controllers\Controller as BaseController;
use App\Markets;
use App\Photo;
use App\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $products=Products::whereHas('category',function (Builder $query){
            $query->where('market_id','=','8');
        })->where('recommen','=','0')->orderBy('id','DESC')->get();
        return view('Back.Products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $categories=Categories::with('market')->where('market_id','=','8')->get();
       $markets=Markets::where('id','=','8')->get();
       return view('Back.Products.create',compact('categories','markets'));
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
            'market_id'=>'required|int',
            'category_id'=>'required|int',
            'name'=>'required|array',
            'recommen'=>'required',
            'title'=>'required|array',
            'price'=>'regex:/[0-9]/',
            'share_price'=>'regex:/[0-9]/',
            'images'=>'required|array',
            'status'=>'required|string',
        ]);
        $db = new Products([
            'user_id'=>auth()->user()->id,
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'title'=>$request->title,
            'recommen'=>$request->recommen,
            'price'=>$request->price,
            'share_price'=>$request->share_price,
            'status' => $request->status
        ]);
        $db->save();
        foreach ($request->images as $image):
            $img=$image->store('vendor/uploads/products');
            Photo::create([
                'imageable_id'=>$db->id,
                'imageable_type'=>'App\Products',
                'filename'=>$img
            ]);
        endforeach;
            return redirect()->back()->with('success','Yozildi');

    }

    /**
     * Display the specified resource.
     *
     * @param Products $products
     * @return void
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Products $products
     * @return void
     */
    public function edit(Products $products)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Products $products
     * @return void
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Products $products
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Products $products)
    {     foreach ($products->photos as $photo):
                $img=Photo::findOrfail($photo->id);
                $img->delete();
                File::delete($photo->filename);
          endforeach;
          $products->delete();
          return back()->with('success','Delete');

    }

}
