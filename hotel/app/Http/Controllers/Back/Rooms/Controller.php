<?php

namespace App\Http\Controllers\Back\Rooms;

use App\Http\Controllers\Controller as Base;
use App\Rooms;
use Illuminate\Http\Request;

class Controller extends Base
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    { $rooms=Rooms::latest()->take(10)->paginate(10);

        return view('Back.Rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.Rooms.create');
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
            'name'=>'required',
            'body'=>'required|array',
            'price'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000000',
        ]);
        $img=($request->hasFile('img'))?$request->file('img')->store('Back/Uploads'):'';
        $db = new Rooms([
            'name'=>$request->name,
            'body'=>$request->body,
            'price'=>$request->price,
            'img'=>$img,
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
     * @param Rooms $rooms
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Rooms $rooms)
    {
        \Illuminate\Support\Facades\File::delete($rooms->img);
        $rooms->delete();
        return redirect()->back()->with('success','Delete');
    }
}
