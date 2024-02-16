<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Brand;
use DB;
use Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['brand_data']=Brand::orderBy('id','DESC')->get();

       return view('admin.list_brand',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand;

        $brand->name = $request->name;
        $brand->page_url = $request->page_url;

        if($request->hasfile('image') != '')
        {
            $image = $request->file('image');
            $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
            $data['image'] = time() . $remove_space;

            $destinationPath = public_path('upload/brand/large/');
            $img = Image::make($image->path());
            $width=95;
            $height=85;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['image']);
                
            $destinationPath = public_path('upload/brand');
            $image->move($destinationPath,$data['image']);

            $brand->image = $data['image'];
        }


        $brand->save();

        return redirect()->route('brand.index')->with('success','Brand Added Successfully.');  
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
        $data['brand_data'] = DB::table('brands')->where('id',$id)->first();

        return view('admin.edit_brand',$data);
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
        $brand = Brand::find($id);
       
        $brand->name     = $request->name;
        $brand->page_url = $request->page_url;
       
        if($request->hasfile('image') != '')
        {
            $image = $request->file('image');
            $remove_space = str_replace(' ', '-', $image->getClientOriginalName());
            $data['image'] = time() . $remove_space;

            $destinationPath = public_path('upload/brand/large/');
            $img = Image::make($image->path());
            $width=135;
            $height=85;

            $img->resize($width,$height,function($constraint){
            })->save($destinationPath.'/'.$data['image']);
                
            $destinationPath = public_path('upload/brand');
            $image->move($destinationPath,$data['image']);

            $brand->image = $data['image'];
        }
       
        // DB::table('brands')->where('id',$id)->update($brand);

        $brand->save();

        return redirect()->route('brand.index')->with('success','Brand Updated Successfully.');
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

        Brand::whereIn('id',$id)->delete();

        return redirect()->route('brand.index')->with('success','Brand Deleted successfully');

    }
    public function set_order_brand()
    {
        $id = $_POST['id'];
        $val = $_POST['val'];
        // echo $id."-".$val;exit;
        DB::table('brands')->where('id', $id)->update(array('set_order' => $val));
        echo "1";
        // return redirect()->route('product.index')->with('success','Set Order has been Updated successfully');
    }
    public function set_as_home_brand(Request $request){
        $id = $request->id;

        $val = $request->val;

        // echo $id."-".$val;exit;

        DB::table('brands')->where('id', $id)->update(array('set_as_home' => $val));

        echo "1";
    }
}
