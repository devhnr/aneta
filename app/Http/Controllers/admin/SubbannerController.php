<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Subbanner;
use Image;

class SubbannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['subbanner_data']=Subbanner::orderBy('id','DESC')->get();
        return view('admin.list_subbanner',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_subbanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subbanner= new Subbanner;

        $subbanner->title=$request->title;
        $subbanner->sub_title=$request->sub_title;
        $subbanner->link=$request->link;

        if($request->hasfile('image') != '')
        {
            $image = $request->file('image');
            $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
            $data['image'] = time() . $remove_space;

            $destinationPath = public_path('upload/subbanner/large/');
            $img = Image::make($image->path());
            $width=600;
            $height=253;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['image']);
                
            $destinationPath = public_path('upload/subbanner');
            $image->move($destinationPath,$data['image']);

            $subbanner->image = $data['image'];
        }
        $subbanner->save();
        return redirect()->route('subbanner.index')->with('success','Sub Banner Data Added Successfully');
       
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
    public function edit(Subbanner $subbanner)
    {
       return view('admin.edit_subbanner',compact('subbanner'));
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
        $subbanner=Subbanner::find($id);

        $subbanner->title=$request->title;
        $subbanner->sub_title=$request->sub_title;
        $subbanner->link=$request->link;

        if($request->hasfile('image') != '')
        {
            $image = $request->file('image');
            $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
            $data['image'] = time() . $remove_space;

            $destinationPath = public_path('upload/subbanner/large/');
            $img = Image::make($image->path());
            $width=600;
            $height=253;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['image']);
                
            $destinationPath = public_path('upload/subbanner');
            $image->move($destinationPath,$data['image']);

            $subbanner->image = $data['image'];
        }

        $subbanner->update();
        return redirect()->route('subbanner.index')->with('success','Sub Banner Data Updated Successfully');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $id=$request->selected;
 
        Subbanner::whereIn('id',$id)->delete();

        return redirect()->route('subbanner.index')->with('success','Subbanner Deleted Successfully');
         
    }
}