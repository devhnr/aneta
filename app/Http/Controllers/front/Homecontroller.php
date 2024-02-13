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

       

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        $data['banner'] = DB::table('banners')->orderBy('id','DESC')->get();

        $data['subbanner'] = DB::table('subbanners')->orderBy('id','DESC')->get();

        $data['categories'] = DB::table('categories')->where('set_as_home',1)->orderBy('set_order')->get();

        $data['best_seller_pro'] = DB::table('products')->where('best_seller',1)->orderBy('id', 'DESC')->get();

        $data['new_arrival_pro'] = DB::table('products')->where('new_product',1)->orderBy('id', 'DESC')->get();

        $data['brand'] = DB::table('brands')->where('set_as_home',1)->orderBy('set_order')->get();
       
        // echo "<pre>";print_r($data);echo "</pre>";exit;

    	return view('front.index',$data);
    }
    public function about_us(){

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
    	return view('front.about_us',$data);
    }
	
	public function product_list(){

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
    	return view('front.product_listing',$data);
    }
	
	public function product_detail(){

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
    	return view('front.product_detail',$data);
    }
    
    public function contact(){

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.contact',$data);
    }

    public function cart(){

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.cart',$data);
    }

   
    
}
