<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class Apicontroller extends Controller
{
    public function register (Request $request){

        $data['owner1_name'] = $request->owner1_name;
        $data['owner1_address'] = $request->owner1_address;
        $data['owner1_pincode'] = $request->owner1_pincode;
        $data['owner1_contact_no'] = $request->owner1_contact_no;
        $data['owner2_name'] = $request->owner2_name;
        $data['owner2_address'] = $request->owner2_address;
        $data['owner2_pincode'] = $request->owner2_pincode;
        $data['owner2_contact_no'] = $request->owner2_contact_no;
        $data['name'] = $request->company_name;
        $data['address'] = $request->company_address;
        $data['company_pincode'] = $request->company_pincode;
        $data['vendor_name'] = $request->company_contact_person;
        $data['mobile'] = $request->company_contact_no;
        $data['email'] = $request->company_email;
        $data['password'] = $request->password;

        $front_users_data = DB::table('front_users')->where('email' , '=' ,  $data['company_email'])->first();
        $aaray = array();
        if(isset($front_users_data)){

            $aaray[] = array('status' => 'FAIL', 'error' => 'This User Already Register With this email');
        }else{

            $aaray[] = array(
                    'status' => 'SUCCESS', 
                    'error' => 'This User Already Register With this email'
                );
        }

        echo json_encode($aaray);
       
       // echo"<pre>";print_r($front_users_data);echo"</pre>";exit;
    }

    public function store(Request $request)
    {
        echo"<pre>";print_r($request->all());echo"</pre>";exit;
        
    }
}
