<?php
namespace App\Http\Controllers\front\UserRegistration;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\Mime\Email;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class UserRegistration extends Controller
{
public function register(Request $request){
       
        
        if($request->action == 'user-register'){

           
        //     echo"<pre>";
        // print_r($request->all());
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
     
           
            // DB::table('front_users')->insert($data);
    
           
            $plainPassword = $request->password;
            $data['id'] = DB::table('front_users')->insertGetId($data);
            
            $newuserdata = array(
                    'userid'  => $data['id'],
                    'name'  => $request->name,
                    'email'  => $request->email,
                    'mobile'  => $request->mobile,
                    'logged_in' => true
                );
                

            // Session::put('userdata', $newuserdata);
            $html = '<!doctype html> <html>
        
            <head>
                <meta charset="utf-8">
                <title>Registration Email</title>
                <style>
                    .logo {
                        text-align: center;
                        width: 100%;
                          }
        
                    .wrapper {
                        width: 100%;
                        max-width:500px;
                        margin:auto;               
                        font-size:14px;
                        line-height:24px;
                        font-family:Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
                        color:#555;
                    }
        
                    .wrapper div {                
                        height: auto;
                        float: left;
                        margin-bottom: 15px;
                        width:100%;
                    }
                    .text-center {
                        text-align: center;                
                    }
        
                    .email-wrapper {
                        padding:5px;
                        border:1px solid #ccc;
                        width:100%;
                    }
        
                    .big {
        
                        text-align: center;
        
                        font-size: 26px;
        
                        color: #e31e24;
        
                        font-weight: bold;
        
                        margin-bottom: 0 !important;
        
                        text-transform: uppercase;
        
                        line-height: 34px;
                    }
        
                    .welcome {                
        
                        font-size: 17px;                
        
                        font-weight: bold;
                    }
        
                    .footer {
        
                        text-align: center;
        
                        color: #999;
        
                        font-size: 13px;
                    }
        
                </style>
            </head>     
            <body>
                <div class="wrapper" >
                
                    <div class="logo">
                        <img src="'.asset("public/site/assets/img/logo.png").'" style="width: 30%;" >
                    </div>
                    <div class="email-wrapper" >
                        <table style="border-collapse:collapse;" width="100%" border="0" cellspacing="0" cellpadding="10">          
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="5">   
                                        <tr>
                                            <td style="font-size:18px;">Hello ,</td>
                                        </tr>
                                        <tr>
                                            <td style="line-height:20px;">
                                               Please find the below Registration details
                                            </td> 
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table style="border-top:3px solid #333;" bgcolor="#f7f7f7" width="100%" border="0" cellspacing="0" cellpadding="5">   
                                        <tr>
                                            <td width="50%">        
                                                <table width="100%" border="0" cellspacing="0" cellpadding="5">   
                                                    <tr><td width="150px">Company Name: </td><td>'.$request->vendor_name.'</td></tr>
                                                    <tr><td width="150px">Address: </td><td>'.$request->address.'</td></tr>
                                                    <tr><td width="150px">Pincode: </td><td>'.$request->pincode.'</td></tr>
                                                    <tr><td width="150px">Contact Person: </td><td>'.$request->name.'</td></tr>
                                                    <tr><td width="150px">Contact No: </td><td>'.$request->mobile.'</td></tr>
                                                    <tr><td width="150px">Email ID: </td><td>'.$request->email.'</td></tr>
                                                    <tr><td width="150px">Password: </td><td>'.$plainPassword.'</td></tr><br><br>
                                                    <tr><td style="margin: 0px;padding: 0px;"><h3 style="margin: 5px;">Owner-1 Details</h3></td></tr>
                                                    <tr><td width="150px">Owner Name 1: </td><td>'.$request->owner1_name.'</td></tr>';
                                                    if($request->owner1_address){
                                                        $html .= '<tr><td width="100px">Address-1: </td><td>'.$request->owner1_address.'</td></tr>';
                                                    }$html .= '                              
                                                    
                                                    <tr><td width="150px">Pincode-1: </td><td>'.$request->owner1_pincode.'</td></tr>
                                                    <tr><td width="150px">Contact No-1: </td><td>'.$request->owner1_contact_no.'</td></tr>';
                                                    
                                                    if($request->owner2_name !=''){
                                                        $html .= '<tr><td style="margin: 0px;padding: 0px;"><h3 style="margin: 5px;">Owner-2 Details</h3></td><tr>'; 
                                                    }
                                                    if($request->owner2_name !=''){
                                                        $html .= '<tr><td width="150px">Owner Name-2: </td><td>'.$request->owner2_name.'</td></tr>'; 
                                                    }
                                                    if($request->owner2_address !=''){
                                                        $html .= '<tr><td width="150px">Address-2: </td><td>'.$request->owner2_address.'</td></tr>';
                                                    }
                                                    if($request->owner2_pincode !=''){
                                                        $html .= '<tr><td width="150px">Pincode-2: </td><td>'.$request->owner2_address.'</td></tr>';
                                                    }
                                                    if($request->owner2_pincode !=''){
                                                        $html .= '<tr><td width="150px">Contact No-2: </td><td>'.$request->owner2_contact_no.'</td></tr>';
                                                    } $html .= '                                
                                                    
                                                </table>
                                            </td>   
                                        </tr>   
                                    </table>
                                </td>   
                            </tr>
                        </table>
                    </div>
                </div>
            </body>
        </html>';
        $subject = "Thank you for Registration -Aneta";
        $to = $request->email;      
        // echo $html;exit;
        Mail::send([], [], function($message) use($html, $to, $subject) {
            $message->to($to);
            $message->subject($subject);
            $message->from('devang.hnrtechnologies@gmail.com', 'Aneta');
            $message->html($html);
        });

        $admin = "mayudin.hnrtechnologies@gmail.com";
        
        Mail::send([], [], function($message) use($html, $admin, $subject) {
            $message->to($admin);
            $message->subject($subject);
            $message->from('devang.hnrtechnologies@gmail.com', 'Aneta');
            $message->html($html);
        });
        
        return redirect()->to('/')->with('L_strsucessMessage','Registration Successfully.');
    }

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

    	return view('front.register',$data);
    }
    public function download($documentType, $filename)
    {        
        $filepath = '';
    
        switch ($documentType) {
            case 'gst':
                $filepath = public_path("upload/customer/gst_professional_certificate/{$filename}");
                break;
            case 'aadhar':
                $filepath = public_path("upload/customer/owner_aadhar/{$filename}");
                break;
            case 'pan':
                $filepath = public_path("upload/customer/pan/{$filename}");
                break;
            case 'pharmacy-license':
                $filepath = public_path("upload/customer/pharmacy_license/{$filename}");
                break;
            default:
                // Handle invalid document type
                return response()->json(['error' => 'Invalid document type'], 404);
        }
    
        return response()->download($filepath);
    }
    public function checkmail()
    {
        $email = $_POST['email_id'];
        $user = DB::table('front_users')->select('*')->where('email','=',$email)->first();
        if ($user != '') {
            echo "0";die;
        }
        else{
            echo "1";die;
        }
    }
    public function checklogin()
    {
        $email = $_POST['email_id'];
        $password = $_POST['password'];
        $userdata = DB::table('front_users')->select('*')->where('email','=',$email)->first();

        if (!$userdata || !Hash::check($password, $userdata->password)) {
            echo 0;// return back()->withInput()->withErrors(['email' => 'Invalid credentials']);
        }else{
            echo 1;
        }
    }
    public function emailCheck()
    {
        $email = $_POST['email'];
        $user = DB::table('front_users')->select('*')->where('email','=',$email)->first();
        if ($user == '')
        {
            echo "0";
        }
        else
        {
            echo "1";
        }
    }
    public function login(Request $request){
        if($request->action == 'user-login'){
            $content['email'] = $request->email;
            $content['password'] = $request->password;
            $plainPassword = $request->password;
            $checklogin = DB::table('front_users')->select('*')->where('email','=',$content['email'])->first();
           
            if($checklogin !='')
            {
                $newuserdata = array(
                    'userid'  => $checklogin->id,
                    'name'  => $checklogin->name,
                    'email'  => $checklogin->email,       
                    'company_name'  => $checklogin->vendor_name,       
                    'address'  => $checklogin->address,       
                    'mobile'  => $checklogin->mobile,       
                    'pincode'  => $checklogin->pincode,  
                    'logged_in' => true
                );
                $check = Session::put('userdata', $newuserdata);
                $redirectUrl = Session::get('redirect_url');

                   if (!empty($redirectUrl)) {
                    return redirect()->to($redirectUrl)->with('L_strsucessMessage','Login Successfully.');
                    }else{
                    return redirect()->to('/')->with('L_strsucessMessage','Login Successfully.');
                    }
            }
        }

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";


        $lastReferringUrl = $request->server('HTTP_REFERER');
    
        $explodedUrls = explode('/', $lastReferringUrl);
        $endUrl = end($explodedUrls);
        
        if ($endUrl != 'register') {
            Session::put('redirect_url', $request->server('HTTP_REFERER'));
        }

    	return view('front.login',$data);
    }
    
    public function lost_password(){

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        return view('front.lost_password',$data);
    }
    public function get_password(Request $request)
    {
        $email = $request->email;
        
        $user_data = DB::table('front_users')->where('email','=',$email)->first();
        $encrypted = Crypt::encryptString($user_data->id);
        $data = '<!doctype html> <html>
            <head>
                <meta charset="utf-8">
                <title>Forget Password Email</title>
                <style>
                    .logo {
                        text-align: center;
                        width: 100%;
                    }
                    .wrapper {
                        width: 100%;
                        max-width:500px;
                        margin:auto;
                        font-size:14px;
                        line-height:24px;
                        font-family:Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
                        color:#555;
                    }
                    .wrapper div {
                        height: auto;
                        float: left;
                        margin-bottom: 15px;
                        width:100%;
                    }
                    .text-center {
                        text-align: center;
                    }
                    .email-wrapper {
                        padding:5px;
                        border:1px solid #ccc;
                        width:100%;
                    }
        
                    .big {
                        text-align: center;
                        font-size: 26px;
                        color: #e31e24;
                        font-weight: bold;
                        margin-bottom: 0 !important;
                        text-transform: uppercase;
                        line-height: 34px;
                    }
        
                    .welcome {
                        font-size: 17px;
                        font-weight: bold;
                    }
                    .footer {
                        text-align: center;
                        color: #999;
                        font-size: 13px;
                    }
        
                </style>
            </head>
            <body>
                <div class="wrapper" >
                    <div class="logo" style="float: inherit;">
                    <img src="'.asset("public/site/assets/img/logo.png").'" style="width: 30%;float: inherit;" >
                    </div>
                    <div class="email-wrapper" >
                        <table style="border-collapse:collapse;" width="100%" border="0" cellspacing="0" cellpadding="10">          
                            <tr>
                                <td>
                                    <table width="100%" border="2" cellspacing="0" cellpadding="5">   
                                        <tr>
                                            <td ><br>Dear '.$user_data->name.',</td>
                                        </tr>
                                        <tr>
                                            <td > 
                                            You recently requested a password reset. To change your password,<br>
                                            click <a href="'.URL::to('/reset-password').'/'.$encrypted.'">here</a> or paste the following link into your browser: '.URL::to('/reset-password').'/'.$encrypted.'
                                           The link will expire in 24 hours, so be sure to use it right away.
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td><br><br>Regards,<br>Aneta </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </body>
        </html>';
        $subject = "Reset Password";
        $to = $email;
        Mail::send([], [], function($message) use($data, $to, $subject) {
            $message->to($to,'Aneta');
            $message->subject($subject);
            $message->from('devang.hnrtechnologies@gmail.com','Aneta');
            $message->html($data);
        });
        return redirect()->to('/')->with('L_strsucessMessage','E-mail has been sent Successfully');
    }
    function userLoginCheck(Request $request){
        $email = $request->email_id;
        $isActive = \DB::table('front_users')->where('email',$email)->where('is_active',0)->first();

       
        if($isActive !=''){
            echo 1;
        }else{
            echo 0;
        }

    }
    public function signout()
    {   
        Session::flush();
        return redirect()->to('/');
    }

    public function reset_password(Request $request)
    {
        $user_id = $request->uid;
        $user_id = Crypt::decryptString($user_id);
        $data['uid'] = $user_id;

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        return view('front.reset-password',$data);
    }

    public function set_password(Request $request)
    {
        
        $user_id = $request->uid;
        // $userid = Crypt::encryptString($request->uid);
        
        if ($_POST['action'] == "reset-password")
        {
            foreach($_POST as $key => $value)
            {
                $data[$key] = $_POST[$key];
            }
        }
        $password = Hash::make($data['password']);
        
        DB::table('front_users')->where('id','=',$user_id)->update(['password' => $password]);
        
        return redirect()->to('/')->with('L_strsucessMessage','Password Updated Successfully. Please Login With New Password');
        // return redirect()->to('reset-password/'.$userid)->with('messages', 'Password Updated Successfully. Please Login With New Password!');

    }

    public function my_profile(){
        
        

        if(Session::get('userdata') ==''){
            return redirect()->to('signin');
        }
        $userid = Session::get('userdata')['userid'];
        $data['my_profile'] = DB::table('front_users')->where('id',$userid)->first();
        // $data['my_address'] = DB::table('address_book')->where('userid',$userid)->get();
        // echo"<pre>";
        // print_r( $data['my_address']);
        // echo"</pre>";exit;   
        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        return view('front.my_profile',$data);
    } 
    public function my_orders(){
        if(Session::get('userdata') ==''){
            return redirect()->to('signin');
        }
        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.my_orders',$data);
    }
    public function edit_profile(){
        if(Session::get('userdata') ==''){
            return redirect()->to('signin');
        }
        $userdata = Session::get('userdata')['userid'];
        $data['my_profile_data'] = DB::table('front_users')->where('id',$userdata)->first(); 

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

            return view('front.edit_profile',$data);
    }   


    public function changepassword(){
        if(Session::get('userdata') ==''){
            return redirect()->to('signin');
        }
        
        $data['meta_title'] = "Change Password - SagarStore";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        return view('front.changepassword',$data);
    }


    public function update_password(Request $request)
    {
        $user_id = $request->uid;
        $new_password = $request->new_pass;
        $password = Hash::make($new_password);
        
        DB::table('front_users')->where('id','=',$user_id)->update(['password' => $password]);
        return redirect()->to('changepassword')->with('L_strsucessMessage','Password has been Changed Successfully');  
    }


    public function edit_address($id){
        if(Session::get('userdata') ==''){
            return redirect()->to('signin');
        }
        $userid = Session::get('userdata')['userid'];
        $data['my_editaddress'] = DB::table('address_book')->where('id',$id)->first();
        $data['country_data'] = DB::table('countries')->select('*')->get();
        $data['state_data'] = DB::table('states')->select('*')->get();
        // echo"<pre>";
        // print_r($data['my_editaddress']);
        // echo"</pre>";exit;

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        return view('front.edit_address',$data);
    } 


    public function remove_address($id)
    {
        // echo "test";exit;
        $userid = Session::get('userdata')['userid'];

        DB::table('address_book')->where('userid',$userid)->where('id',$id)->delete();
        return redirect()->to('/my-profile')->with('L_strsucessMessage','Address Deleted Successfully');
    }
    public function add_address(){
        if(Session::get('userdata') == ''){
            return redirect()->to('signin');
        }
        $userdata = Session::get('userdata')['userid'];
        $data['my_profile_add_data'] = DB::table('front_users')->where('id',$userdata)->first();
        $data['country_data'] = DB::table('countries')->select('*')->get();
        $data['state_data'] = DB::table('states')->select('*')->get();

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        return view('front.add_address',$data);
    }
    public function add_useraddress(Request $request)
    {
        
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['address1'] = $request->address1;
        if($request->address2 !=''){
            $data['address2'] = $request->address2;
        }
        else{
            $data['address2']=null;
        }       
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['city'] = $request->city;
        $data['pincode'] = $request->pincode;
        $data['state'] = $request->state;
        $data['country'] = $request->country;
        $data['userid'] = Session::get('userdata')['userid'];
        // echo "<pre>";print_r($data);echo "</pre>";exit;
        
        DB::table('address_book')->insert($data);
        return redirect()->to('/my-profile')->with('L_strsucessMessage','Address has been Added Successfully');
    }

    public function update_address(Request $request)
    {
        // echo "<pre>";print_r($request->post());echo "</pre>";exit;
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['address1'] = $request->address1;
        if($request->address2 !=''){
            $data['address2'] = $request->address2;
        }
        else{
            $data['address2']=null;
        }       
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['city'] = $request->city;
        $data['pincode'] = $request->pincode;
        $data['state'] = $request->state;
        $data['country'] = $request->country;
        $address_id = $request->address_id; 
               
        // echo "<pre>";print_r($data);echo "</pre>";exit;
        DB::table('address_book')->where('id',$address_id)->update($data); 
           
        return redirect()->to('/my-profile')->with('L_strsucessMessage','Address has been Updated Successfully');
       
    }
    public function wishlist(){
        if(Session::get('userdata') == ''){
            return redirect()->to('signin');
        }

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        return view('front.wishlist',$data);
    }

    public function add_to_wishlist(Request $request){

        $userid = Session::get('userdata')['userid'];         

        $product_id = $request->product_id;
        $data['userid'] =   $userid;
        $data['product_id'] = $product_id;
        $data['added_date'] = date("Y-m-d");
        //echo "<pre>";print_r($data);echo "</pre>";
        $query = DB::table('wishlist')->where('userid',$userid)->where('product_id',$product_id)->first();
        // echo "<pre>";print_r($query);echo "</pre>";exit;

        if(!$query){

            $result = \DB::table('wishlist')->insert($data);
            return "1";
        } 
        return "0";
    }

    public function delete_wishlist($id){

        $userid = Session::get('userdata')['userid'];

        DB::table('wishlist')->where('userid',$userid)->where('product_id',$id)->delete();
        return redirect()->to('/wishlist')->with('L_strsucessMessage','Product Deleted Successfully from your Wishlist');
    }



    public function update_profile(Request $request){
        // echo "Test";exit;
    // Assuming $request->dob is in a different format, for example, "d/m/Y"
    // $dob = Carbon::createFromFormat('d/m/Y', $request->date('dob'))->format('Y-m-d');
       $data['vendor_name'] = $request->vendor_name;
    
        if($request->hasfile('documents') != '')
        {
            $documents = $request->file('documents');
            $remove_space = str_replace(' ', '-', $documents->getClientOriginalName());
            $data['documents'] = time() . $remove_space;

            $destinationPath = public_path('upload/customer/gst_professional_certificate');
            $documents->move($destinationPath,$data['documents']);

            $documents->image = $data['documents'];
        }
    
       if($request->hasfile('owner_aadhar') != '')
       {
           $owner_aadhar = $request->file('owner_aadhar');
           $remove_space = str_replace(' ', '-', $owner_aadhar->getClientOriginalName());
           $data['owner_aadhar'] = time() . $remove_space;

           $destinationPath = public_path('upload/customer/owner_aadhar');
           $owner_aadhar->move($destinationPath,$data['owner_aadhar']);

           $owner_aadhar->image = $data['owner_aadhar'];
       }
    
       if($request->hasfile('pan') != '')
       {
           $pan = $request->file('pan');
           $remove_space = str_replace(' ', '-', $pan->getClientOriginalName());
           $data['pan'] = time() . $remove_space;

           $destinationPath = public_path('upload/customer/pan');
           $pan->move($destinationPath,$data['pan']);

           $pan->image = $data['pan'];
       }

     
       if($request->hasfile('pharmacy_license') != '')
       {
           $pharmacy_license = $request->file('pharmacy_license');
           $remove_space = str_replace(' ', '-', $pharmacy_license->getClientOriginalName());
           $data['pharmacy_license'] = time() . $remove_space;

           $destinationPath = public_path('upload/customer/pharmacy_license');
           $pharmacy_license->move($destinationPath,$data['pharmacy_license']);

           $pharmacy_license->image = $data['pharmacy_license'];
       }
       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['mobile'] = $request->mobile;
       $data['pincode'] = $request->pincode;
       $data['address'] = $request->address;
       $data['owner1_name'] = $request->owner1_name;
       $data['owner1_address'] = $request->owner1_address;
       $data['owner1_pincode'] = $request->owner1_pincode;
       $data['owner1_contact_no'] = $request->owner1_contact_no;
       $data['owner2_name'] = $request->owner2_name;
       $data['owner2_address'] = $request->owner2_address;
       $data['owner2_pincode'] = $request->owner2_pincode;
       $data['owner2_contact_no'] = $request->owner2_contact_no;
       $userid = Session::get('userdata')['userid'];
        // echo"<pre>";
        // print_r($request->all());
        // print_r($data);
        // print_r($userid);
        // echo"</pre>";exit;
       DB::table('front_users')->where('id',$userid)->update($data);
       return redirect()->to('/my-profile')->with('L_strsucessMessage','Profile has been Updated Successfully');
        
    }

    function state_show(){
        $country_id = $_POST['country_id'];
        //echo $cat_id;exit;
        $result = DB::table('states')->select('*')->where('country_id','=',$country_id)->get();

        $result_new = $result->toArray();

        $html = "<select id='state' name='state' class='country-options'>";
        $html .= "<option value=''>Select State</option>";
        if($result != '' && count($result) >0)
        {
            for($i=0;$i<count($result);$i++)
            {
                //echo "<pre>";print_r($result[$i]->id);echo "</pre>";exit;
                $html .= "<option value='".$result[$i]->id ."'>".$result[$i]->state ."</option>";
            }
        }
        $html .="</select>";
        //echo "<pre>";print_r($html);echo "</pre>";exit;
        echo $html;
    }

    function add_review(Request $request){
        

        $userdata = Session::get('userdata');

        $userid = $userdata['userid'];

        $data['product_id'] = $_POST['product_id'];
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['rate'] = $_POST['rate'];
        $data['comment'] = $_POST['comment'];
        $data['user_id'] = $userid;

        //echo "<pre>";print_r($data);echo"</pre>";exit;

        DB::table('reviews')->insertGetId($data);

        return "1";

    }
}