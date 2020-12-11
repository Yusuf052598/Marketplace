<?php

namespace App\Http\Controllers\Back\Markets\Products;

use App\Categories;
use App\Http\Controllers\Controller as BaseController;
use App\Markets;
use App\Photo;
use App\Products;
use Illuminate\Database\Eloquent\Builder;
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
    {   $roleName = auth()->user()->getRoleNames();
        if ($roleName[0]=='super_admin_role'):
            $products=Products::whereHas('category',function (Builder $query){
                $query->where('market_id','!=','8');
            })->orderBy('id','DESC')->get();
        else:
            $auth=auth()->user()->id;
            $products=Products::whereHas('category',function (Builder $query){
                $query->where('market_id','!=','8');
            })->where('user_id','=',$auth)->orderBy('id','DESC')->get();
        endif;
        return view('Back.Markets.Products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {        $roleName = auth()->user()->getRoleNames();
             if ($roleName[0]=='super_admin_role'):
                 $markets=Markets::where('id','!=','8')->get();
             else:
                 $auth=auth()->user()->id;
                 $markets=Markets::where('id','!=','8')->where('user_id','=',$auth)->get();
             endif;
            return view('Back.Markets.Products.create',compact('markets'));
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
            'recommen'=>$request->rec,
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
        endforeach;   return redirect()->back()->with('success','Okey');

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
     * @param Products $products
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Products $products)
    {      foreach ($products->photos as $photo):
                $img=Photo::findOrfail($photo->id);
                $img->delete();
                File::delete($photo->filename);
           endforeach;
           $products->delete();
        return back()->with('success','Delete');
    }
    public function select(Request $request){
        $categories=Categories::where('market_id','=',$request->id)->get();

        $data='';
        foreach ($categories as $category):
            $data.= "<option "." "."value=".$category->id." ".">".$category->name()."</option>";
        endforeach;
        $success=$data;
        return response()->json(['success'=>$success]);
    }
}
