<?php

namespace App\Http\Controllers\Front\Marketplace\Api;

use App\Apimodels;
use App\Http\Controllers\Controller as BaseController;
use Facade\FlareClient\Api;
use Illuminate\Http\Request;


class Controller extends  BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Apimodels[]|\Illuminate\Database\Eloquent\Collection
     */
    public function list()
    {
        return  Apimodels::all();
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
        $api_models=new Apimodels([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
        ]);
        echo $api_models->save();
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
    public function update(Request $request)
    {   $db=Apimodels::find($request->id);

         $db->update([
             'name'=>$request->name,
             'last_name'=>$request->last_name
         ]);
         if($db){
              return  ['result'=>"success"];
         }
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
