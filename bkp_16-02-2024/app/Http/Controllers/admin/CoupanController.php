<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Coupan;
use DB;

class CoupanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_coupan']= Coupan::orderBy('id','DESC')->get();

       return view('admin.list_coupan',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_coupan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['coupan_name'] = $request->input('coupan_name');

        $data['coupan_code'] = $request->input('coupan_code');

        $data['discount'] = $request->input('discount');

        $data['coupanvalue'] = $request->input('coupanvalue');

        $data['minimum_order'] = $request->input('minimum_order');

        $data['no_of_coupons'] = $request->input('no_of_coupons');

        $data['no_of_coupons_user'] = $request->input('no_of_coupons_user');

        $data['startdate'] = $request->input('startdate');

        $data['enddate'] = $request->input('enddate');

        

        // if( $request->input('category_id') !=''){

        //     $data['category_id'] = implode(',', $request->input('category_id'));

        // }

        // else{

        //     $data['category_id'] = null;

        // }

        // if($request->input('subcategory_id') !=''){

        //     $data['subcategory_id'] = implode(',', $request->input('subcategory_id'));

        // }

        // else{

        //     $data['subcategory_id'] = null;

        // }

       

       

        $data['description'] = $request->input('description');

        $data['is_active'] = 0;



        //  echo "<pre>";print_r($data);echo "</pre>";exit;



        DB::table('coupans')->insert($data);



        return redirect()->route('coupan.index')->with('success','Coupon Added Successfully.');  
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
        $data['coupan_data'] = DB::table('coupans')->where('id',$id)->first();

        // echo "<pre>";print_r($data);echo "</pre>";exit;

        return view('admin.edit_coupan',$data);

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

        // $data['category_id']='';

        // $data['subcategory_id']='';
        
        $data['coupan_name'] = $request->input('coupan_name');

        $data['coupan_code'] = $request->input('coupan_code');

        $data['discount'] = $request->input('discount');

        $data['coupanvalue'] = $request->input('coupanvalue');

        $data['minimum_order'] = $request->input('minimum_order');

        $data['no_of_coupons'] = $request->input('no_of_coupons');

        $data['no_of_coupons_user'] = $request->input('no_of_coupons_user');

        $data['startdate'] = $request->input('startdate');

        $data['enddate'] = $request->input('enddate');

        // if( $request->input('category_id') !=''){

        //     $data['category_id'] = implode(',', $request->input('category_id'));

        // }

        // else{

        //     $data['category_id'] = null;

        // }

        // if($request->input('subcategory_id') !=''){

        //     $data['subcategory_id'] = implode(',', $request->input('subcategory_id'));

        // }

        // else{

        //     $data['subcategory_id'] = null;

        // }


        $data['description'] = $request->input('description');


        DB::table('coupans')->where('id',$id)->update($data);



        return redirect()->route('coupan.index')->with('success','Coupon Updated Successfully.');

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

        // echo $delete_id;exit;

        Coupan::whereIn('id',$delete_id)->delete();

        return redirect()->route('coupan.index')->with('success','Coupon has been deleted successfully');

    }

    public  function change_status_coupan(){


        
        $id=$_POST['id'];

        $value=$_POST['value'];

        

        DB::table('coupans')->where('id',$id)->update(array('is_active'=>$value));

        echo"1";

    }
}
