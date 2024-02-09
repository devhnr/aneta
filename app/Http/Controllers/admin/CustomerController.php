<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use Response;


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
       
        $data['vendor_name']=$request->vendor_name;
        $data['gst_other']=$request->gst_other;
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']= Hash::make($request->password);
        $data['gender']=$request->radio; 
        $data['mobile']=$request->mobile; 
        $data['dob']=$request->dob; 
        $data['address']=$request->address; 

        if ($request->hasFile('documents')) 
    {
             
        $file = $request->file('documents');
             
        $path = public_path('upload/customer/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['documents']= $fileName;
           
    }

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
        //  echo"<pre>";
        // print_r($request->all());
        // echo"</pre>";
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['vendor_name']=$request->vendor_name;
        $data['gst_other']=$request->gst_other;
        // $data['password']= Hash::make($request->password);
        $data['gender']=$request->radio; 
        $data['mobile']=$request->mobile; 
        $data['dob']=$request->dob; 
        $data['address']=$request->address;
        
        if ($request->hasFile('documents')) 
        {
            
            $file = $request->file('documents');
                 
            $path = public_path('upload/customer/');
                
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
           
            $file->move($path, $fileName);
            
            $data['documents']= $fileName;           
               
        }       
        //  echo"<pre>";
        // print_r($data);
        // echo"</pre>";exit;
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
    public function download_gst($filename)
    {
        // echo "test";exit;
        $filepath = public_path("upload/customer/{$filename}");

        // echo "<pre>";print_r($filepath);echo "</pre>";exit;
        return Response::download($filepath);
    }
    public  function change_status(){



        $id=$_POST['id'];

        $value=$_POST['value'];       

        DB::table('front_users')->where('id',$id)->update(array('is_active'=>$value));

        echo"1";

    }
}