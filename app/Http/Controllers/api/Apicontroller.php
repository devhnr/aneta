<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        $data['vendor_name'] = $request->company_name;
        $data['address'] = $request->company_address;
        $data['pincode'] = $request->company_pincode;
        $data['name'] = $request->company_contact_person;
        $data['mobile'] = $request->company_contact_no;
        $data['email'] = $request->company_email;
        $data['password'] = Hash::make($request->password);
        $data['is_active'] = 0;
        $data['added_from'] = 1;

        $front_users_data = DB::table('front_users')->where('email' , '=' ,  $data['email'])->first();
        //$aaray = array();
        if(isset($front_users_data)){

            $aaray = array('status' => 'FAIL', 'error' => 'This User Already Register With this email');
        }else{

            DB::table('front_users')->insert($data);

            $aaray = array(
                    'status' => 'SUCCESS',
                );
        }

        echo json_encode($aaray);
       
       // echo"<pre>";print_r($front_users_data);echo"</pre>";exit;
    }

    public function login(Request $request)
    {
        $mobile = $request->mobile;
        $front_users_data = DB::table('front_users')->where('mobile' , '=' ,  $mobile)->first();

        $current_year = date('Y');
        $token = md5($front_users_data->id.$current_year.'aneta');

        //echo"<pre>";print_r($front_users_data->id);echo"</pre>";exit;

        if(isset($front_users_data)){

            $otp = rand (1000,9999);
            $data['otp'] = $otp;
            DB::table('front_users')->where('mobile' , '=' ,  $mobile)->update($data);

            $aaray = array('status' => 'SUCCESS','otp' =>$otp,'token' => $token,'userid' => $front_users_data->id);            
        }else{
            $aaray = array('status' => 'FAIL', 'error' => 'This Number Not Exit');            
        }

        echo json_encode($aaray);
        //echo"<pre>";print_r($front_users_data);echo"</pre>";exit;
        
    }

    public function otp_verify(Request $request){

        $token   = $request->token;
        $otp     = $request->otp;
        $userid     = $request->userid;
        //$mobile  = $request->mobile;

        $current_year = date('Y');
        $token_old = md5($userid.$current_year.'aneta');

        // echo $token."<br>";
        // echo $token_old."<br>";

        if($token_old != $token){
            $aaray = array('status' => 'FAIL','error' =>'Invalid Token'); 
        }else{

            $front_users_data = DB::table('front_users')->where('id' , '=' ,  $userid)->where('otp' , '=' ,  $otp)->first();

            if(isset($front_users_data)){
                $aaray = array(
                        'status' => 'SUCCESS',
                        'company_name' => $front_users_data->vendor_name,
                        'name'         => $front_users_data->name,
                        'email'        => $front_users_data->email,
                        'mobile' => $front_users_data->mobile
                    );
            }else{
                $aaray = array('status' => 'FAIL','error' =>'Invalid Otp');
            }

        }

        echo json_encode($aaray);

    }

    public function category(Request $request){


        $token = $request->token;
        $userid = $request->userid;

        $current_year = date('Y');
        $token_old = md5($userid.$current_year.'aneta');

        if($token_old != $token){
            $aaray = array('status' => 'FAIL','error' =>'Invalid Token'); 
        }else{

            $category = DB::table('categories')->orderBy('id','DESC')->get();
            //$banner = DB::table('banners')->orderBy('id','DESC')->get();

           // $aaray = array('status' => 'SUCCESS', 'category' => $category, 'banner' => $banner); 
            $aaray = array('status' => 'SUCCESS', 'category' => $category); 
        }
        echo json_encode($aaray);
        //
    }
}
