<?php

namespace App\Http\Controllers\Front\Marketplace\Markets;

use App\Card;
use App\MarketCategories;
use App\Http\Controllers\Controller as BaseController;
use App\Markets;
use App\Products;
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
    {   $counts=Card::count();
        $sum=Card::sum();
        $markets=Markets::with('category')->take(9)->orderByDesc('id')->latest()->get();
        return view('Front.Marketplace.Markets.index',compact('markets','counts','sum'));
    }
    public function load(Request $request){
        if ($request->id==2){
            $markets=Markets::with('category')->where('id','<',9)->take(3)->orderByDesc('id')->latest()->get();
            $div="";
            foreach ($markets as  $market):
                $html="<div>".$market->name."</div>";
                $div.=$html;
            endforeach;
            $success=$div;
            //echo $success;
           return response()->json(['success',$success]);
        }

    }
    public function page(Request $request){
        $products=Products::whereHas('category',function (Builder $query) use ($request) {
            $query->where('market_id','=',$request->id);
        })->take(12)->orderBy('id','DESC')->get();
        $categories=MarketCategories::where('market_id','=',$request->id)->get();
        $counts=Card::count();
        $sum=Card::sum();
        return view('Front.Marketplace.Markets.market_page',compact('products','categories','counts','sum'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(int $id)
    {    $counts=Card::count();
        $sum=Card::sum();
        $products=Products::with('photos')->with('category')->where('id','=',$id)->get();
       return view('Front.Marketplace.Markets.product',compact('products','counts','sum'));
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
