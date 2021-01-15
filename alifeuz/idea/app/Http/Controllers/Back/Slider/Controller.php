<?php

namespace App\Http\Controllers\Back\Slider;

use App\Http\Controllers\Controller as BaseController;
use App\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Controller extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {   $db=Sliders::latest()->latest()->get();
        return view('Back.Slider.index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('Back.Slider.create');
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
            'title'=>'required|array',
            'editor'=>'required|array',
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $img=($request->hasFile('img'))? $request->file('img')->store('Back/Uploads'): '';
        $db=New Sliders([
            'title'=>$request->title,
            'content_name'=>$request->editor,
            'img'=>$img,
            'status'=>$request->status
        ]);
        if ($db->save()){
            return redirect()->back()->with('success','Data wrote successfully');
        }
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
     * @param Sliders $sliders
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
      public function edit(Sliders $sliders)
    {
        return  view('Back.Slider.edit',compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Sliders $sliders
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Sliders $sliders)
    {
        $sliders=Sliders::findOrFail($request->id);
        if (($request->hasFile('img'))) {$img = $request->file('img')->store('Back/Uploads');
            File::delete($sliders->img);
        }
        else {
            $img = $sliders->img;
        }
        $sliders->update([
            'title'=>$request->title,
            'content_name'=>$request->editor,
            'status'=>$request->status,
            'img'=>$img,
        ]);
        return redirect()->route('slider')->with('success','Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sliders $sliders
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Sliders $sliders)
    {
        File::delete($sliders->img);
        $sliders->delete();
        return back()->with('success','Delete');
    }
    public function upload(Request $request)
    {

        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('Uploads', $filenametostore);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/Uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

}
