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
        // echo"<pre>";
        //     print_r($request->all());
        // echo"</pre>";exit;
       
        $data['vendor_name']=$request->vendor_name;
        $data['name']=$request->name;
        $data['mobile']=$request->mobile;
        $data['pincode']=$request->pincode;
        $data['email']=$request->email;
        $data['password']= Hash::make($request->password);        
        $data['address']=$request->address; 
        $data['owner1_name']=$request->owner1_name; 
        $data['owner1_pincode']=$request->owner1_pincode; 
        $data['owner1_contact_no']=$request->owner1_contact_no; 
        $data['owner1_address']=$request->owner1_address;
        $data['owner2_name']=$request->owner2_name; 
        $data['owner2_pincode']=$request->owner2_pincode; 
        $data['owner2_contact_no']=$request->owner2_contact_no; 
        $data['owner2_address']=$request->owner2_address; 
        $data['is_active']= $is_active = 1; 

        if ($request->hasFile('documents')) 
    {
             
        $file = $request->file('documents');
             
        $path = public_path('upload/customer/gst_professional_certificate/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['documents']= $fileName;
           
    }
    if ($request->hasFile('owner_aadhar')) 
    {
             
        $file = $request->file('owner_aadhar');
             
        $path = public_path('upload/customer/owner_aadhar/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['owner_aadhar']= $fileName;
           
    }
    if ($request->hasFile('pan')) 
    {
             
        $file = $request->file('pan');
             
        $path = public_path('upload/customer/pan/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['pan']= $fileName;
           
    }
    if ($request->hasFile('pharmacy_license')) 
    {
             
        $file = $request->file('pharmacy_license');
             
        $path = public_path('upload/customer/pharmacy_license/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['pharmacy_license']= $fileName;
           
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
        // echo"<pre>";
        //     print_r($request->post());
        // echo"</pre>";exit;
        
        $data['vendor_name']=$request->vendor_name;
        $data['name']=$request->name;
        $data['mobile']=$request->mobile;
        $data['pincode']=$request->pincode;
        $data['email']=$request->email;
        if($request->password!=''){

            $data['password']= Hash::make($request->password);
        } 
        
        $data['address']=$request->address; 
        $data['owner1_name']=$request->owner1_name; 
        $data['owner1_pincode']=$request->owner1_pincode; 
        $data['owner1_contact_no']=$request->owner1_contact_no; 
        $data['owner1_address']=$request->owner1_address; 

        $data['owner2_name']=$request->owner2_name; 
        $data['owner2_pincode']=$request->owner2_pincode; 
        $data['owner2_contact_no']=$request->owner2_contact_no; 
        $data['owner2_address']=$request->owner2_address; 

        if ($request->hasFile('documents')) 
    {
             
        $file = $request->file('documents');
             
        $path = public_path('upload/customer/gst_professional_certificate/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['documents']= $fileName;
           
    }
    if ($request->hasFile('owner_aadhar')) 
    {
             
        $file = $request->file('owner_aadhar');
             
        $path = public_path('upload/customer/owner_aadhar/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['owner_aadhar']= $fileName;
           
    }
    if ($request->hasFile('pan')) 
    {
             
        $file = $request->file('pan');
             
        $path = public_path('upload/customer/pan/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['pan']= $fileName;
           
    }
    if ($request->hasFile('pharmacy_license')) 
    {
             
        $file = $request->file('pharmacy_license');
             
        $path = public_path('upload/customer/pharmacy_license/');
            
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
       
        $file->move($path, $fileName);
        
        $data['pharmacy_license']= $fileName;
           
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
        $filepath = public_path("upload/customer/gst_professional_certificate/{$filename}");

        // echo "<pre>";print_r($filepath);echo "</pre>";exit;
        return Response::download($filepath);
    }
    public  function change_status(){



        $id=$_POST['id'];

        $value=$_POST['value'];       

        DB::table('front_users')->where('id',$id)->update(array('is_active'=>$value));

        echo"1";

    }
    function vendor_check_mail(){

        $email = $_POST['email']; // Replace with the email you want to search for

        $result = DB::table('front_users')
            ->select('*')
            ->where('email', $email)
            ->first();

        if ($result) {
            return 1;
        } else {
            return 0;
        }

            echo $result;
    }
}