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
        $data['name'] = $request->input('name');
        $data['page_url'] = $request->input('page_url');

        DB::table('brands')->insert($data);

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
        $data['name'] = $request->input('name');
        $data['page_url'] = $request->input('page_url');
       
        DB::table('brands')->where('id',$id)->update($data);

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
}