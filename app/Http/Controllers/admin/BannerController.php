<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Banner;
use DB;
use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['banner_data']=Banner::orderBy('id','DESC')->get();

       return view('admin.list_banner',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_banner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['title1'] = $request->input('title1');
        $data['title2'] = $request->input('title2');
        $data['title3'] = $request->input('title3');
        $data['short_des'] = $request->input('short_des');
        
        $data['button_name'] = $request->input('button_name');
        $data['button_link'] = $request->input('button_link');

        if($request->hasfile('image') != ''){
            $image = $request->file('image');
            $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
            $data['image'] = time() . $remove_space;
            $destinationPath = public_path('upload/banner/large');
            $img = Image::make($image->path());

            $width=570;
            $height=570;
            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['image']);


            $destinationPath = public_path('upload/banner');
            $image->move($destinationPath,$data['image']);
            $image = $data['image'];
            $data['image']  = $image;
        }else{
            $data['image'] = "";
        }

        if($request->hasfile('app_image') != ''){
            $app_image = $request->file('app_image');
            $remove_space = str_replace(' ', '-', $app_image->getClientOriginalName());
            $data['app_image'] = time() . $remove_space;
            $destinationPath = public_path('upload/banner/app_image/large/');
            $img = Image::make($app_image->path());

            $width=1500;
            $height=1000;
            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['app_image']);


            $destinationPath = public_path('upload/banner/app_image');
            $app_image->move($destinationPath,$data['app_image']);
            $app_image = $data['app_image'];
            $data['app_image']  = $app_image;
        }else{
            $data['app_image'] = "";
        }
        

        DB::table('banners')->insert($data);

        return redirect()->route('banner.index')->with('success','Banner Added Successfully.');  
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
        $data['banner_data'] = DB::table('banners')->where('id',$id)->first();

        return view('admin.edit_banner',$data);
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
        $data['title1'] = $request->input('title1');
        $data['title2'] = $request->input('title2');
        $data['title3'] = $request->input('title3');
        $data['short_des'] = $request->input('short_des');
       
        $data['button_name'] = $request->input('button_name');
        $data['button_link'] = $request->input('button_link');

        if($request->hasfile('image') != ''){
            $image = $request->file('image');
            $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
            $data['image'] = time() . $remove_space;
            $destinationPath = public_path('upload/banner/large');
            $img = Image::make($image->path());

            $width=570;
            $height=570;
            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['image']);


            $destinationPath = public_path('upload/banner');
            $image->move($destinationPath,$data['image']);
            $image = $data['image'];
            
        }

        if($request->hasfile('app_image') != ''){
            $app_image = $request->file('app_image');
            $remove_space = str_replace(' ', '-', $app_image->getClientOriginalName());
            $data['app_image'] = time() . $remove_space;
            $destinationPath = public_path('upload/banner/app_image/large/');
            $img = Image::make($app_image->path());

            $width=1500;
            $height=1000;
            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['app_image']);


            $destinationPath = public_path('upload/banner/app_image');
            $app_image->move($destinationPath,$data['app_image']);
            $app_image = $data['app_image'];
            $data['app_image']  = $app_image;
        }else{
            $data['app_image'] = "";
        }
      
        
        

        DB::table('banners')->where('id',$id)->update($data);

        return redirect()->route('banner.index')->with('success','Banner Updated Successfully.');
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

        Banner::whereIn('id',$id)->delete();

        return redirect()->route('banner.index')->with('success','Banner Deleted successfully');

    }
}