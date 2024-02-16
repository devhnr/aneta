<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['customer_data'] = DB::table('front_users')->orderBy("id","DESC")->get();     

        return view('admin.list_customer',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo"<pre>";
        // print_r($request->post());
        // echo"</pre>";exit;
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']= Hash::make($request->password);
        $data['gender']=$request->radio; 
        $data['mobile']=$request->mobile; 
        $data['dob']=$request->dob; 
        $data['address']=$request->address; 

        // $data->save();
        DB::table('front_users')->insert($data);

        return redirect()->route('customer.index')->with('success','Customer Data Added Successfully');

        
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
      $data['customer']=  DB::table('front_users')->where('id',$id)->first();
      
      return view('admin.edit_customer',$data);
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
        $data['name']=$request->name;
        $data['email']=$request->email;
        // $data['password']= Hash::make($request->password);
        $data['gender']=$request->radio; 
        $data['mobile']=$request->mobile; 
        $data['dob']=$request->dob; 
        $data['address']=$request->address; 

        // $data->save();
       
        DB::table('front_users')->where('id',$id)->update($data);

        return redirect()->route('customer.index')->with('success','Customer Data Updated Successfully');
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

        DB::table('front_users')->whereIn('id',$id)->delete();

        return redirect()->route('customer.index')->with('success','Customer Data Deleted Successfully');
    }
}