<?php

namespace admin\Card;

use App\Card;
use App\Http\Controllers\Controller as BaseController;
use App\Products;
use App\User;
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
        if(auth()->check()):
            $auth=auth()->user()->id;
        else:
            $auth=0;
        endif;
        $cards=Card::with('product')->where('user_id','=',$auth)->get();
        $counts=Card::count();
        $sum=Card::sum();
        return  view('Front.Cards.index',compact('cards','counts','sum'));
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

        $db=new Card([
            'user_id'=>auth()->user()->id,
            'market_id'=>$request->market_id,
            'product_id'=>$request->id,
            'quantity'=>1
        ]);
        $db->save();
        return response()->json(['success'=>'OK']);

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
     * @param Card $card
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->back();
    }
}
