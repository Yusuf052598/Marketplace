<?php

namespace App\Http\Controllers\Front\Marketplace\Marketplace\Verify;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class Controller extends BaseController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function getVerify(){
        return view('Front.Marketplace.Login.verify');
    }
    public function verify(Request $request)
    {   $cache=Cache::get('sms');
        if($cache==$request->sms){
            return route('/');
        }
        else{
            return back()->with('error','xato');
        }
        /*$request->validate([
            'password'=>'required|string',
            'sms'=>'required|string',
        ]);
        $sms=$request->password;
        $credentials = $request->only( 'password','sms');
        if (Auth::attempt($credentials))
        {
            return redirect('/');
        }*/
        //return view('Front.Login.verify',compact('sms'))->with('error','Sms kod Xato');
    }

}
