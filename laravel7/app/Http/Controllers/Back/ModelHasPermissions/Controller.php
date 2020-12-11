<?php

namespace App\Http\Controllers\Back\ModelHasPermissions;

use App\Http\Controllers\Controller as BaseController;
use App\ModelHasPermissions;
use App\Permissions;
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
    {  $db=ModelHasPermissions::with('permission:id,name')->with('model:id,name,email')->get();

        return view('Back.PermissionUser.index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $permissions=Permissions::latest()->get();
        $users=User::where('admin','=','1')->latest()->get(['id','name']);
        return view('Back.PermissionUser.create',compact('permissions','users'));
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
            'permission_id'=>'required|int',
            'model_id'=>'required|int',
        ]);
        $db=new ModelHasPermissions([
            'permission_id'=>$request->permission_id,
            'model_type'=>'App\User',
            'model_id'=>$request->model_id,
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
     * @param ModelHasPermissions $modelHasPermissions
     * @return void
     */
    public function edit(ModelHasPermissions $modelHasPermissions)
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
