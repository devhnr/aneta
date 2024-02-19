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
        $data['is_active'] = 1;
        $data['added_from'] = 1;

        $front_users_data = DB::table('front_users')
        ->where('email', $data['email'])
        ->orWhere('mobile', $data['mobile'])
        ->first(); 

       //$aaray = array();
        if(isset($front_users_data)){
            $aaray = array(
                'status' => 'FAIL', 
                'message' => 'This user already registered'
            );
            return response()->json($aaray, 401);
        }else{

            if ($request->documents != ''){
                $documents = $request->documents;
                $docName = time().'_document.'.$documents->getClientOriginalExtension();
    
                $path1 = public_path('upload/customer/gst_professional_certificate');
                $documents->move($path1, $docName);

                $data['documents'] = $docName;
            }

            if ($request->owner_aadhar != ''){
                $owner_aadhar = $request->owner_aadhar;
                $aadharName = time().'_aadhar.'.$owner_aadhar->getClientOriginalExtension();
    
                $path2 = public_path('upload/customer/owner_aadhar');
                $owner_aadhar->move($path2, $aadharName);

                $data['owner_aadhar'] = $aadharName;
            }

            if ($request->pan != ''){
                $pan = $request->pan;
                $panName = time().'_pan.'.$pan->getClientOriginalExtension();
    
                $path3 = public_path('upload/customer/pan');
                $pan->move($path3, $panName);

                $data['pan'] = $panName;
            }

            if ($request->pharmacy_license != ''){
                $pharmacy_license = $request->pharmacy_license;
                $pharName = time().'_license.'.$pharmacy_license->getClientOriginalExtension();
    
                $path4 = public_path('upload/customer/pharmacy_license');
                $pharmacy_license->move($path4, $pharName);

                $data['pharmacy_license'] = $pharName;
            }

            DB::table('front_users')->insert($data);

            $aaray = array(
                'status' => 'SUCCESS', 
                'message' => 'Registered successfully'
            );
            return response()->json($aaray, 200);
        }

        // echo"<pre>";print_r($front_users_data);echo"</pre>";exit;
    }

    public function login(Request $request)
    {
        $mobile = $request->mobile;
        $front_users_data = DB::table('front_users')->where('mobile' , '=' ,  $mobile)->first();

        //echo"<pre>";print_r($front_users_data->id);echo"</pre>";exit;

        if(isset($front_users_data)){

            $current_year = date('Y');
            $token = md5($front_users_data->id.$current_year.'aneta');

            $otp = rand (1000,9999);
            $data['otp'] = $otp;
            DB::table('front_users')->where('mobile' , '=' ,  $mobile)->update($data);

            $aaray = array(
                'status' => 'SUCCESS',
                'message' => 'Otp Sent Successfully!',
                'data' => array(
                    'otp' =>$otp,
                    'token' => $token,
                    'userid' => $front_users_data->id
                )
            );            
            return response()->json($aaray, 200);
        }else{      
            $aaray = array(
                'status' => 'FAIL',
                'message' => 'This number does not exist'
            ); 
            return response()->json($aaray, 401);  
        }

        
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
            $aaray = array(
                'status' => 'FAIL',
                'message' =>'Invalid Token'
            ); 
            return response()->json($aaray, 401); 
        }else{

            $front_users_data = DB::table('front_users')->where('id' , '=' ,  $userid)->where('otp' , '=' ,  $otp)->first();

            if(isset($front_users_data)){
                $aaray = array(
                    'status' => 'SUCCESS',
                    'message' =>'User Data',
                    'data' => array(
                        'company_name' => $front_users_data->vendor_name,
                        'name'         => $front_users_data->name,
                        'email'        => $front_users_data->email,
                        'mobile' => $front_users_data->mobile
                    )
                ); 
                return response()->json($aaray, 200); 
            }else{
                $aaray = array(
                    'status' => 'FAIL',
                    'message' =>'Invalid Otp'
                );
                return response()->json($aaray, 401); 
            }

        }
    }

    public function category(Request $request){

        $token = $request->token;
        $userid = $request->userid;

        $current_year = date('Y');
        $token_old = md5($userid.$current_year.'aneta');

        if($token_old != $token){
            $aaray = array(
                'status' => 'FAIL',
                'message' =>'Invalid Token'
            ); 
            return response()->json($aaray, 401); 
        }else{

            $category = DB::table('categories')->orderBy('id','DESC')->get();
            //$banner = DB::table('banners')->orderBy('id','DESC')->get();

           // $aaray = array('status' => 'SUCCESS', 'category' => $category, 'banner' => $banner); 
            $aaray = array(
                'status' => 'SUCCESS',
                'message' =>'Category Data',
                'data' => $category
            ); 
            return response()->json($aaray, 200); 
        }
    }

    public function home(Request $request){

        $token = $request->token;
        $userid = $request->userid;

        $current_year = date('Y');
        $token_old = md5($userid.$current_year.'aneta');

        if($token_old != $token){
            $aaray = array(
                'status' => 'FAIL',
                'message' =>'Invalid Token'
            ); 
            return response()->json($aaray, 401); 
        }else{

            $banners = DB::table('banners')->orderBy('id','DESC')->get();

            $bestSeller = DB::table('products')
                            ->leftJoin('product_attribute', 'products.id', '=', 'product_attribute.pid')
                            ->leftJoin('product_image', function($join) {
                                $join->on('products.id', '=', 'product_image.pid')
                                    ->where('product_image.baseimage', '=', 1);
                            })
                            ->where('products.best_seller', 1)
                            ->orderBy('products.id', 'DESC')
                            ->select('products.*', 
                                    DB::raw('MIN(product_attribute.price) as min_price'), 
                                    DB::raw("COALESCE(product_image.image, 'no-image.png') as base_image"))
                            ->groupBy('products.id')
                            ->get();

            $newArrival = DB::table('products')
                            ->leftJoin('product_attribute', 'products.id', '=', 'product_attribute.pid')
                            ->leftJoin('product_image', function($join) {
                                $join->on('products.id', '=', 'product_image.pid')
                                    ->where('product_image.baseimage', '=', 1);
                            })
                            ->where('products.new_product', 1)
                            ->orderBy('products.id', 'DESC')
                            ->select('products.*', 
                                    DB::raw('MIN(product_attribute.price) as min_price'), 
                                    DB::raw("COALESCE(product_image.image, 'no-image.png') as base_image"))
                            ->groupBy('products.id')
                            ->get();

            $category = DB::table('categories')->orderBy('id','DESC')->get();

            $aaray = array(
                'status' => 'SUCCESS',
                'message' => 'Data',
                'data' => [
                    'categories' => $category,
                    'banners' => $banners,
                    'best_seller' => $bestSeller,
                    'new_arrival' => $newArrival
                ]
            );
            return response()->json($aaray, 200); 
        }
    }

}
