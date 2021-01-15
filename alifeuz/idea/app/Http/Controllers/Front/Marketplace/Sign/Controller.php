<?php

namespace App\Http\Controllers\Front\Marketplace\Sign;

use App\Http\Controllers\Controller as BaseController;
use App\User;
use Faker\Provider\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
//use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{

    public function index(){
        return view('Front.Marketplace.Login.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param User $user
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function store(User $user, Request $request)
    {    $str= str_replace(' ','',$request->tel);
        $phone = str_replace('+','',$str);
        $rand=rand(1111,9999);
        $user=User::updateOrCreate(
            ['tel'=>$phone],
            [
                'sms'=>$rand,
                'pass'=>$rand,
                'password'=>Hash::make($rand)
            ]
        );
        Cache::put('sms',$rand,180);
        $id=$user->id;
        /* $response=Http::asForm()->post('https://information.mobitel.uz/admin/api',[
           'key'=>'-1i6xcwJAW9GJ83oLibv-ISGaQ6InxHI',
           'phone'=>$phone,
           'text'=>$rand
       ]);*/
        return view('Front.Marketplace.Login.verify',compact('id'));
    }
    public function verify(){
        return redirect()->route('sign.register');
    }
    public function check(Request $request)
    {
        $cache=Cache::get('sms');
        if ($cache==$request->sms){
            $password=Cache::get('sms');
            $sms=Cache::get('sms');
            if (Auth::attempt(['password'=>$password,'sms'=>$sms])) {
                $users=User::where( 'sms','=',$request->sms)->first();
                $phone=$users->tel;
                $user=User::updateOrCreate(
                    ['tel'=>$phone],
                    [
                        'sms'=>null,
                        'pass'=>null,
                        'password'=>null
                    ]
                );
                return redirect('/');
            }
        }
        else {
            $id=$request->number;
            return view('Front.Marketplace.Login.verify',compact('id'))->with('error','SMS kod xato');
        }
    }
    public function lost(Request $request){
        $rand=rand(1111,9999);
        $user=User::updateOrCreate(
            ['id'=>$request->number],
            [
                'sms'=>$rand,
                'pass'=>$rand,
                'password'=>Hash::make($rand)
            ]
        );
         Cache::put('sms',$rand,180);
         $id=$user->id;
         return view('Front.Marketplace.Login.verify',compact('id'));
    }

}
