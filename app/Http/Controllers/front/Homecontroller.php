<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Email;

use DB;

class Homecontroller extends Controller
{
    public function index(){

       

        $data['meta_title'] = "Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        $data['banner'] = DB::table('banners')->orderBy('id','DESC')->get();

        $data['subbanner'] = DB::table('subbanners')->orderBy('id','DESC')->get();

        $data['categories'] = DB::table('categories')->where('set_as_home',1)->orderBy('set_order')->get();

        $data['blog'] = DB::table('blogs')->where('set_as_home',1)->orderBy('set_order')->get();

        // $data['best_seller_pro'] = DB::table('products')->where('best_seller',1)->orderBy('id', 'DESC')->get();

        $data['best_seller_pro'] =  DB::table('products')
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

        // $data['new_arrival_pro'] = DB::table('products')
        //                             ->where('new_product',1)
        //                             ->orderBy('id', 'DESC')
        //                             ->get();

        $data['new_arrival_pro'] = DB::table('products')
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

        $data['brand'] = DB::table('brands')->where('set_as_home',1)->orderBy('set_order')->get();
       
        
    	return view('front.index',$data);
    }
    public function about_us(){

        $data['testimonials'] = DB::table('testimonials')->orderBy('id','DESC')->get();

    //   echo"<pre>";print_r($data['testimonials']);echo"</pre>";exit;

        $data['ourteam'] = DB::table('our_team')->orderBy('id','ASC')->get();

        $data['meta_title'] = "About-Us - Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
    	return view('front.about_us',$data);
    }
	
	public function product_list(){

        $data['meta_title'] = "Product-list - Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
    	return view('front.product_listing',$data);
    }
	
	public function product_detail(){

        $data['meta_title'] = "Product-detail - Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
    	return view('front.product_detail',$data);
    }
    
    public function contact(Request $request){

        if($request->action == 'contact-form'){
            
            $data['full_name']=$request->full_name;
            $data['email']=$request->email;
            $data['mobile']=$request->mobile;
            $data['subject']=$request->subject;
            $data['message']=$request->message;

            DB::table('contact_us')->insert($data);

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
                                               Please find the below Contact details
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
                                                    <tr><td width="100px">Name: </td><td>'.$request->full_name.'</td></tr>
                                                    <tr><td width="100px">Email: </td><td>'.$request->email.'</td></tr>
                                                    <tr><td width="100px">Mobile: </td><td>'.$request->mobile.'</td></tr>
                                                    <tr><td width="100px">Subject: </td><td>'.$request->subject.'</td></tr>
                                                    <tr><td width="100px">Meassage: </td><td>'.$request->message.'</td></tr>
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
        $subject = "Contact-Us -Aneta";
        $to = "devang.hnrtechnologies@gmail.com";
        // $to = $request->email;

      

        Mail::send([], [], function($message) use($html, $to, $subject) {
            $message->to($to);
            $message->subject($subject);
            $message->from('devang.hnrtechnologies@gmail.com', 'Aneta');
            $message->html($html);
        });

        $message1 = '<div style="width:700px; height:auto; margin:0 auto;"><p>Dear '.$request->full_name.',</p><p>Hope you are doing good!</p><p>We aim to enrich your living experience through our specialised services. We will get in touch with you within 24 hours.</p><p>Regards,<br>Team Aneta</p></div>';

         $to = $request->email;

        Mail::send([], [], function($message) use($message1, $to, $subject) {

            $message->to($to);
            $message->subject($subject);
            $message->from('devang.hnrtechnologies@gmail.com', 'Aneta');
            $message->html($message1);
        });
            return redirect()->to('/contact')->with('L_strsucessMessage','Contact Us Detail Submitted Successfully.');
        }

        $data['meta_title'] = "Contact - Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.contact',$data);
    }
    

    public function cart(){

        $data['meta_title'] = "Cart - Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.cart',$data);
    }
	
	public function blogs(){

        $query= DB::table('blogs')->orderBy('set_order');
        // echo "<pre>";print_r($data);echo "</pre>";exit;

        
        $pagination = $query->paginate(9)->withQueryString();

        $data['blog'] = $pagination;
        $data['meta_title'] = "Blogs - Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.blogs',$data);
    }
	
	public function blog_details($blog_page_url){

        // echo $blog_page_url;exit;
        $data['blog_detail'] = DB::table('blogs')->where('page_url',$blog_page_url)->orderBy('set_order')->first();

       
      
        $data['meta_title'] = "Blog-details - Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.blog_details',$data);
    }
	// public function edit_profile(){

    //     // $data['user_data'] = DB::table('front_users')->first();
        
    //     //    echo "<pre>";print_r($data);echo "</pre>";exit;

    //     $data['meta_title'] = "";
    //     $data['meta_keyword'] = "";
    //     $data['meta_description'] = "";
    //     return view('front.edit_profile',$data);
    // }

    public function check_email(Request $request){

        $email = $request->email;
        $result = DB::table('subscribes')->where('email',$email)->first();
        
        if($result !=''){
            echo 0;
        }else{

            // echo "test";exit;
            echo 1;
        }
    }

    public function news_letter_email(Request $request){

        // echo "<pre>";print_r($request->all());echo "</pre>";exit;

        if($request->action == 'news-form'){

        $data['email'] = $request->email;
        $data['created_at'] = date('Y-m-d');

        DB::table('subscribes')->insert($data);

        $html = '<!doctype html> <html>
        
            <head>
                <meta charset="utf-8">
                <title>Subscribes Email</title>
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
                                               Please find the below Subscribe details
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
                                                    
                                                    <tr><td width="100px">Email: </td><td>'.$data['email'].'</td></tr>
                                                   
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
        $subject = "Thank you for Subscribe - Aneta";
        $to = $data['email'];
        // $to = 'parth.hnrtechnologies@gmail.com';
        // $to = $request->email;
        Mail::send([], [], function($message) use($html, $to, $subject) {
            $message->to($to);
            $message->subject($subject);
            $message->from('devang.hnrtechnologies@gmail.com', 'Aneta');
            $message->html($html);
        });

        // $message1 = '<div style="width:700px; height:auto; margin:0 auto;"><p>Dear '.$request->full_name.',</p><p>Hope you are doing good!</p><p>We aim to enrich your living experience through our specialised services. We will get in touch with you within 24 hours.</p><p>Regards,<br>Team Aneta</p></div>';

        //  $to = 'devang.hnrtechnologies@gmail.com';

        // Mail::send([], [], function($message) use($message1, $to, $subject) {

        //     $message->to($to);
        //     $message->subject($subject);
        //     $message->from('devang.hnrtechnologies@gmail.com', 'Aneta');
        //     $message->html($message1);
        // });
   
        return redirect()->to('/')->with('L_strsucessMessage','News Letter Email Added successfully');
    }
}


    public function terms_conditions(){

        $data['cms_data'] = DB::table('cms')->where('id',1)->first();

        $data['meta_title'] = $data['cms_data']->meta_title;
        $data['meta_keyword'] = $data['cms_data']->meta_keyword;
        $data['meta_description'] = $data['cms_data']->meta_description;

        return view('front.cms',$data);
    }

    public function privacy_policy(){

        $data['cms_data'] = DB::table('cms')->where('id',2)->first();

        $data['meta_title'] = $data['cms_data']->meta_title;
        $data['meta_keyword'] = $data['cms_data']->meta_keyword;
        $data['meta_description'] = $data['cms_data']->meta_description;

        return view('front.cms',$data);
    }

    public function return_policy(){

        $data['cms_data'] = DB::table('cms')->where('id',4)->first();

        $data['meta_title'] = $data['cms_data']->meta_title;
        $data['meta_keyword'] = $data['cms_data']->meta_keyword;
        $data['meta_description'] = $data['cms_data']->meta_description;

        return view('front.cms',$data);
    }

    public function faqs(){

        $data['faq'] = DB::table('faq')->orderBy('id','DESC')->get();

        $data['meta_title'] = "FAQ - Aneta";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
    	return view('front.faqs',$data);

    }

   
    
}
