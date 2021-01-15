<?php

namespace App\Http\Controllers\Back\Role;

use App\Http\Controllers\Controller as BaseController;
use App\Roles;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {   $db=Role::all();
        return view('Back.Role.index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.Role.create');
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
        $db=new Role([
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
     * @param Roles $roles
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Roles $roles)
    {
        return view('Back.Role.edit',compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Roles $roles
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Roles $roles)
    {
        $request->validate([
            'name'=>'required|string',
            'guard_name'=>'required|string',
        ]);
        $roles=Roles::findOrFail($request->id);

        $roles->update([
            'name'=>$request->name,
            'guard_name'=>'web',
        ]);
        return redirect()->route('role')->with('success','Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Roles $roles
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Roles $roles)
    {
        $roles->delete();
        return back()->with('success','ochirildi');
    }
}
