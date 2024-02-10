<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
Use DB;
Use Helper;
use Session;
Use Mail;
class checkoutcontroller extends Controller
{
    //
    public function checkout(){
		
		
		
        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";
        return view('front.checkout',$data);
    }

    
}
