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

        $data['blog'] = DB::table('blogs')->where('set_as_home',1)->orderBy('set_order')->get();

        // $data['best_seller_pro'] = DB::table('products')->where('best_seller',1)->orderBy('id', 'DESC')->get();

        $data['best_seller_pro'] =  DB::table('products')
                                    ->leftJoin('product_attribute', 'products.id', '=', 'product_attribute.pid')
                                    ->leftJoin('product_image', 'products.id', '=', 'product_image.pid')
                                    ->where('products.best_seller', 1)
                                    ->where('product_image.baseimage', 1)
                                    ->orderBy('products.id', 'DESC')
                                    ->select('products.*', 
                                            DB::raw('MIN(product_attribute.price) as min_price'), 
                                            'product_image.image as base_image')
                                    ->groupBy('products.id')
                                    ->get();

        // $data['new_arrival_pro'] = DB::table('products')
        //                             ->where('new_product',1)
        //                             ->orderBy('id', 'DESC')
        //                             ->get();

        $data['new_arrival_pro'] =  DB::table('products')
                                    ->leftJoin('product_attribute', 'products.id', '=', 'product_attribute.pid')
                                    ->leftJoin('product_image', 'products.id', '=', 'product_image.pid')
                                    ->where('products.new_product', 1)
                                    ->where('product_image.baseimage', 1)
                                    ->orderBy('products.id', 'DESC')
                                    ->select('products.*', 
                                            DB::raw('MIN(product_attribute.price) as min_price'), 
                                            'product_image.image as base_image')
                                    ->groupBy('products.id')
                                    ->get();

        $data['brand'] = DB::table('brands')->where('set_as_home',1)->orderBy('set_order')->get();
       
        

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
	
	public function blogs(){

        $data['blog'] = DB::table('blogs')->where('set_as_home',1)->orderBy('set_order')->get();
        // echo "<pre>";print_r($data);echo "</pre>";exit;

        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.blogs',$data);
    }
	
	public function blog_details($blog_page_url){

        // echo $blog_page_url;exit;
        $data['blog_detail'] = DB::table('blogs')->where('set_as_home',1)
                                                ->where('page_url',$blog_page_url)->orderBy('set_order')->first();

       
      
        $data['meta_title'] = "";
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


   
    
}
