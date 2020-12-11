<?php

namespace App\Http\Controllers\Back\Users;

use App\Http\Controllers\Controller as BaseController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {    $users=User::all();
        return view('Back.Users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
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
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'confirm'=>'required|string|min:4',
            'tel'=>'required|regex:/[0-9]/|min:12|max:12',
            'password'=>'required|string|min:4',
            'admin'=>'required|boolean',
        ]);
            $db=new User([
                'name'=>$request->name,
                'email'=>$request->email,
                'tel'=>$request->tel,
                'email_verified_at' => now(),
                'pass'=>$request->password,
                'password'=>Hash::make($request->password),
                'remember_token' => Str::random(10),
                'admin'=>$request->admin
            ]);
            $db->save();

            return redirect()->back()->with('success','Ok ');

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
        return view('Back.Users.update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
        {  $request->validate([
                'name'=>'required|string',
                'email'=>'required|email',
                'tel'=>'required|regex:/[0-9]/|min:12|max:12',
                'password'=>'required|string|min:4',
                'admin'=>'required|boolean',
           ]);
        $user=User::findOrFail($request->id);
        $user->update([
            'name'=>$request->name,
            'tel'=>$request->tel,
            'admin'=>$request->admin,
            'email'=>$request->email,
            'pass'=>$request->password,
            'password'=>Hash::make($request->password),
        ]);
        return redirect()->route('user')->with('success','Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success','Delete');
    }
}
