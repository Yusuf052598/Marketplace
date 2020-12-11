<?php

namespace App\Http\Controllers\Back\Markets;

use App\Categories;
use App\Cities;
use App\Http\Controllers\Controller as BaseController;
use App\Markets;
use App\Products;
use App\Regions;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {  $markets=Markets::with('user')->latest()->get();

        return view('Back.Markets.index',compact('markets'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {   $regions=Regions::orderBy('id','DESC')->get();
        $users=User::where('admin','=','1')->get();
        return view('Back.Markets.create',compact('regions','users'));
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
             'user_id'=>'required|int',
             'region_id'=>'required|int',
             'name'=>'required',
             'img'=>'required|max:10240',
         ]);
        $img=($request->hasFile('img'))?$request->file('img')->store('vendor/uploads/brand'):'';
        $db=New Markets([
            'user_id'=>$request->user_id,
            'region_id'=>$request->region_id,
            'name'=>$request->name,
            'img'=>$img
        ]);
        $db->save();
        if($db){
            return redirect()->back()->with('success','Data successfuly');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Markets $markets
     * @return void
     */
    public function show(Markets $markets)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Markets $markets
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function edit(Markets $markets)
    {
          $users=User::where('admin','=','1')->get();
          $regions=Regions::orderBy('id','DESC')->get();
        return view('Back.Markets.update',compact('markets','users','regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Markets $markets
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Markets $markets)
    {

        $request->validate([
            'user_id'=>'required|int',
            'region_id'=>'required|int',
            'name'=>'required',
        ]);
        $markets=Markets::findOrFail($request->id);
        if (($request->hasFile('img'))):
            $img = $request->file('img')->store('vendor/uploads/brand');
            File::delete($markets->img);
        else :
            $img = $markets->img;
        endif;
        $markets->update([
            'user_id'=>$request->user_id,
            'region_id'=>$request->region_id,
            'name'=>$request->name,
            'img'=>$img
        ]);
        return redirect()->route('market')->with('success','Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Markets $markets
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Markets $markets)
    {
        File::delete($markets->img);
        $markets->delete();
        return back()->with('success','Delete');
    }
  /*  public function select(Request $request){
        $Cities=Cities::where('region_id','=',$request->id)->get();
        $data='';
        foreach ($Cities as $city):
            $data.= "<option "." "."value=".$city->id." ".">".$city->name."</option>";
        endforeach;
        $plh='<option>Tanlang</option>';
        $success=$plh.$data;
        return response()->json(['success'=>$success]);
    }*/
}
