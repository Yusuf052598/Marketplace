<?php

namespace App\Http\Controllers\Back\Permissions;

use App\Http\Controllers\Controller as BaseController;
use App\Permissions;
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
        $db=Permissions::all();
        return view('Back.Permission.index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.Permission.create');
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
            'name'=>'required|string',
            'guard_name'=>'required|string',
        ]);
        $db=new Permissions([
            'name'=>$request->name,
            'guard_name'=>'web',
        ]);
        $db->save();
        return redirect()->back()->with('success','yozildi');
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
     * @param Permissions $permissions
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function edit(Permissions $permissions)
    {
        return view('Back.Permission.edit',compact('permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Permissions $permissions
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Permissions $permissions)
    {
        $request->validate([
            'name'=>'required|string',
            'guard_name'=>'required|string',
        ]);
        $permissions=Permissions::findOrFail($request->id);

        $permissions->update([
            'name'=>$request->name,
            'guard_name'=>'web',
        ]);
        return redirect()->route('permission')->with('success','Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Permissions $permissions
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Permissions $permissions)
    {
        $permissions->delete();
        return back()->with('success','ochirildi');
    }
}
