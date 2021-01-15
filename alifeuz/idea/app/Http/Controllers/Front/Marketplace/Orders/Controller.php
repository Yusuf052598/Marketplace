<?php

namespace App\Http\Controllers\Front\Marketplace\Marketplace\Orders;

use App\Http\Controllers\Controller as BaseController;
use App\Orders;
use App\Products;
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

    }
    public function card(Request $request){

        return  view('Front.Cards.index');
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
    {    $auth=auth()->user()->id;
         $max=sizeof($request->product_id);
         for($i=0;$i<$max; $i++):
          $db=new Orders([
              'user_id'=>$auth,
              'product_id'=>$request->product_id[$i],
              'count'=>$request->quantity[$i],
              'tel'=>'998989',
              'location'=>'location',
              'status'=>'incomplete',
          ]);
            $db->save();
         endfor;
         return response()->json(['success','yozildi']);
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
