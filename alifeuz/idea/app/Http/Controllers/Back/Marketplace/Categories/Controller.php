<?php

namespace App\Http\Controllers\Back\Marketplace\Categories;

use App\M_Categories;
use App\Http\Controllers\Controller as BaseController;
use App\Markets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
              $roleName = auth()->user()->getRoleNames();
        if ($roleName[0]=='super_admin_role'):
              $categories=Markets::with('user')->get();
        else:
            $auth=auth()->user()->id;
            $categories=Markets::with('user')
                ->where('user_id','=',23)->get();
        endif;
        return view('Back.Marketplace.Categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {     $roleName = auth()->user()->getRoleNames();
        if ($roleName[0]=='super_admin_role'):
            $markets=Markets::all();
        else:
        $auth=auth()->user()->id;
        $markets=Markets::where('user_id','=',$auth)->get();
        endif;
        return view('Back.Categories.create',compact('markets'));
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
            'name'=>'required|array',
        ]);
        $db=New M_Categories([
            'market_id'=>$request->market_id,
            'name'=>$request->name,
        ]);
        $db->save();
        if($db){
            return redirect()->back()->with('success','Okey');
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
     * @param M_Categories $categories
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function edit(M_Categories $categories)
    {
        $roleName = auth()->user()->getRoleNames();
        if ($roleName[0]=='super_admin_role'):
            $markets=Markets::all();
        else:
            $auth=auth()->user()->id;
            $markets=Markets::where('user_id','=',$auth)->get();
        endif;
        return view('Back.MCategories.update',compact('categories','markets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param M_Categories $categories
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, M_Categories $categories)
    {
         $request->validate([
            'market_id'=>'required|int',
            'name'=>'required|array',
        ]);
        $categories=M_Categories::findOrFail($request->id);
        $categories->update([
            'market_id'=>$request->market_id,
            'name'=>$request->name,
        ]);
        return redirect()->route('categories')->with('success','update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param M_Categories $categories
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(M_Categories $categories)
    {
       $categories->delete();
       return back()->with('success','Delete');
    }
}
