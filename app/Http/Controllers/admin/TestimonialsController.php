<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['testimonials']=DB::table('testimonials')->orderBy('id','DESC')->get();

        return view('admin.list_testimonials',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_testimonials');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data['customer_name'] = $request->input('customer_name');
       $data['role'] = $request->input('role');
       $data['description'] = $request->input('description');


       if($request->hasfile('image') != ''){
        $image = $request->file('image');
        $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
        $data['image'] = time() . $remove_space;
        $destinationPath = public_path('upload/testimonials/large');
        $img = Image::make($image->path());

        $width=300;
        $height=300;
        $img->resize($width,$height,function($constraint){
        })->save($destinationPath.'/'.$data['image']);


        $destinationPath = public_path('upload/testimonials');
        $image->move($destinationPath,$data['image']);
        $image = $data['image'];
        
    }
        DB::table('testimonials')->insert($data);

        return redirect()->route('testimonials.index')->with('success','Testimonials Added Successfully.'); 

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
        $data['testimonials'] = DB::table('testimonials')->where('id',$id)->first();

        return view('admin.edit_testimonials',$data);
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
        $data['customer_name'] = $request->input('customer_name');
        $data['role'] = $request->input('role');
        $data['description'] = $request->input('description');
 
        if($request->hasfile('image') != ''){
            $image = $request->file('image');
            $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
            $data['image'] = time() . $remove_space;
            $destinationPath = public_path('upload/testimonials/large');
            $img = Image::make($image->path());

            $width=300;
            $height=300;
            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['image']);


            $destinationPath = public_path('upload/testimonials');
            $image->move($destinationPath,$data['image']);
            $image = $data['image'];
            
        }

         DB::table('testimonials')->where('id',$id)->update($data);
 
         return redirect()->route('testimonials.index')->with('success','Testimonials Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $delete_id = $request->selected;

        DB::table('testimonials')->where('id',$delete_id)->delete();

        return redirect()->route('testimonials.index')->with('success','Testimonials has been deleted successfully');
    }
}
