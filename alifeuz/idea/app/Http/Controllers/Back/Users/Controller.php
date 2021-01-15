<?php

namespace App\Http\Controllers\Back\Users;

use App\News;
use App\User;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users=User::all();
        return view('Back.Users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.Users.create');

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
           'name'=>'required|string|unique:users',
           'last_name'=>'required|string',
           'email'=>'required||unique:users',
           'password'=>'required|string|min:4|max:14',

        ]);
        $db=new User([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'email_verified_at' => now(),
            'pass'=>$request->password,
            'password'=>Hash::make($request->password),
            'remember_token' => Str::random(10)
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
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function edit(User $user)
    {
        return view('Back.Users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $user=User::findOrFail($request->id);
        $user->update([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'admin'=>$request->admin,
            'email'=>$request->email,
            'pass'=>$request->password,
            'password'=>Hash::make($request->password),
        ]);
       return redirect()->route('users')->with('success','Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
       $user->delete();
       return back()->with('success','ochirildi');
    }


}
