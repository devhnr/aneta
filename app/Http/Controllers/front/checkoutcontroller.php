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

        $data['country'] = DB::table('countries')->orderBy('id','DESC')->get();
        $data['state'] = DB::table('states')->orderBy('id','DESC')->get();

        return view('front.checkout',$data);
    }

    function ship_state_change(){

        $country_id=$_POST['country_id'];

        $result=DB::table('states')
                    ->select('*')
                    ->where('country_id','=',$country_id)
                    ->get();

            $result_new=$result->toArray();
            // echo"<pre>";print_r($result_new);echo"</pre>";exit;
            $html  ="<select name='state' id='state' class='small-input'>";
            $html .="<option value=''>Select a state</option>";
            if($result !='' &&  count($result)>0){
    
                for($i=0; $i<count($result); $i++){
                    
                    $html .="<option value='".$result[$i]->id."'>".$result[$i]->state."</option>";
                }
            }
            $html  .="<select>";
            echo $html;
    }

    function bill_state_change(){

        $country_id=$_POST['country_id'];

        $result=DB::table('states')
                    ->select('*')
                    ->where('country_id','=',$country_id)
                    ->get();

            $result_new=$result->toArray();
            // echo"<pre>";print_r($result_new);echo"</pre>";exit;
            $html  ="<select name='bill_state' id='bill_state' class='small-input'>";
            $html .="<option value=''>Select a state</option>";
            if($result !='' &&  count($result)>0){
    
                for($i=0; $i<count($result); $i++){
                    
                    $html .="<option value='".$result[$i]->id."'>".$result[$i]->state."</option>";
                }
            }
            $html  .="<select>";
            echo $html;
    }


    function order_place(){

         $userdata = Session::get('userdata');
        // echo "<pre>";print_r($_POST);echo"</pre>";
        // //echo "<pre>";print_r($userdata);echo"</pre>";
        // exit;

        $checkout_address_already = $_POST['checkout_address_already'];

        $id = $_POST['payment_method'];

        if($id == '1'){
            $order_status = 'P';
            $paymentmode = $id;
            $list_order_status = '0';
            $payment_status = 'Success';
            $payment_mode = "COD";
        }else {
            $order_status = 'P';
            $paymentmode = $id;
            $list_order_status = '0';
            $payment_status = 'FAILED';
            $payment_mode = "ONLINE PAYMENT";   
        }


        $billaddress=array(         
                        'first_name'    => $_POST['first_name'],
                        'last_name'     => $_POST['last_name'],
                        'company'     => $_POST['company_name'],
                        'address1'      => $_POST['address1'],
                        'address2'      => $_POST['address2'],
                        'city'          => $_POST['city'],
                        'pincode'     => $_POST['post_code'],
                        'country'       => $_POST['country'],
                        'state'         => $_POST['state'],
                        'phone'  => $_POST['phone_number'],
                        'email' => $_POST['email_address'],
                        'userid' => $userdata['userid'],
                        'default_address' => 1,
                );

        $userid = $userdata['userid'];


        $intOrderNumber = DB::table('ci_orders')
                ->select(DB::raw('MAX(order_id) as lastOrderNumber'))
                ->first();



        if ($intOrderNumber) {
            $intOrderNumber = $intOrderNumber->lastOrderNumber + 1;

            $intOrderNumber_new = $intOrderNumber;
            $nextOrderNumber;
        } else {
            $intOrderNumber_new = 1;
        }

        //echo $intOrderNumber_new;exit;

       
        Session::put('order_number', $intOrderNumber_new);
        
       $order_number = Session::get('order_number');

        

        if($checkout_address_already != ''){
            // insert if already use address remaining
        }else{

            $bill_address_id = DB::table('address_book')->insertGetId($billaddress);

            if ($bill_address_id) {
                $bill_address_id;
            } 
        }



        $shiaddress_data=array(          
            'first_name'        => $_POST['first_name'],
            'last_name'         => $_POST['last_name'],
            'company'           => $_POST['company_name'],
            'address1'          => $_POST['address1'],
            'address2'          => $_POST['address2'],
            'city'              => $_POST['city'],
            'post_code'         => $_POST['post_code'],
            'country'           => $_POST['country'],
            'state'             => $_POST['state'],
            'phone_number'      => $_POST['phone_number'],
            'email_address'     => $_POST['email_address'],
            'bill_first_name'   => $_POST['bill_first_name'],
            'bill_last_name'    => $_POST['bill_last_name'],
            'bill_company'      => $_POST['company_name'],
            'bill_address1'     => $_POST['bill_address1'],
            'bill_address2'     => $_POST['bill_address2'],
            'bill_city'         => $_POST['bill_city'],
            'bill_post_code'    => $_POST['bill_post_code'],
            'bill_country'      => $_POST['bill_country'],
            'bill_state'        => $_POST['bill_state'],
            'bill_phone_number' => $_POST['bill_phone_number'],
            'bill_email_address'=> $_POST['bill_email_address'],
            'user_id'=> $userid,
            'order_id'=> $order_number,
        );

        $shiaddress_id = DB::table('ci_shipping_address')->insertGetId($shiaddress_data);

            if ($shiaddress_id) {
                $shiaddress_id;
            } 

        if(session('coupan_data.coupancode') != ''){
            $coupancode=session('coupan_data.coupancode');
        }else{
            $coupancode="";
        }


        $content=array(
                'user_id'               => $userid,
                'order_number'          => $order_number,
                'user_id'               => $userid,
                'order_total'           => session('order_total'),
                'shippingcost'          => session('shippingcahrge'),
                'order_currency'        => 'INR',
                'order_status'          => $order_status,
                'paymentmode'           => $paymentmode,
                'payment_status'        => $payment_status,
                'created_at'                 => date('Y-m-d H:i:s'),
                'coupondiscount'        => session('discount_amount'),
                'coupon_code'           => $coupancode,
                'ip_address'            => $_SERVER['REMOTE_ADDR'],
                'list_order_status'     => $list_order_status,
        );

        $arrOrderId = DB::table('ci_orders')->insertGetId($content);

            if ($arrOrderId) {
                $arrOrderId;
            }

        foreach(\Cart::content() as $arrRowDeailts){

                $arrData=array(
                        'order_id'          => $arrOrderId,
                        'user_info_id'      => $userid,
                        'product_id'        => $arrRowDeailts->id,
                        'order_item_code'   => "",
                        'order_item_name'   => $arrRowDeailts->name,
                        'product_quantity'  => $arrRowDeailts->qty,
                        'product_item_price'=> $arrRowDeailts->price,
                        'size_id'           => $arrRowDeailts->options->size_id,
                        'size_name'         => $arrRowDeailts->options->size_name,
                        'colour_id'         => $arrRowDeailts->options->color_id,
                        'colour_name'       => $arrRowDeailts->options->color_name,
                        'base_image'        => $arrRowDeailts->options->image,
                        'product_code'        => $arrRowDeailts->options->product_code,
                        'sku_code'        => $arrRowDeailts->options->sku_code,
                        'product_discount_amount'        => $arrRowDeailts->options->product_discount_amount,
                        'cdate'=> date('Y-m-d'),
                     );

                DB::table('ci_order_item')->insertGetId($arrData);

                DB::table('product_attribute')
                    ->where('id', $arrRowDeailts->options->attribute_id)
                    ->decrement('qty', $arrRowDeailts->qty);
        }

        if($id == 1){

            //return redirect('thankyou');

            $success = $this->success_mail();

            if ($success) {
                // Redirect to the 'thankyou' route
                return redirect('thankyou');
            } 
        }else{

            $state_name = DB::table('states')
                    ->where('id', $shiaddress_data['state'])->value('state');

            $bill_state_name = DB::table('states')
                    ->where('id', $shiaddress_data['bill_state'])->value('state');

            $country_name = DB::table('countries')
                    ->where('id', $shiaddress_data['country'])->value('country');

            $bill_country_name = DB::table('countries')
                    ->where('id', $shiaddress_data['bill_country'])->value('country');

            

            //echo"<pre>";print_r($shiaddress_data);echo"</pre>";

            $data_pass['merchant_id'] = 3071895;
            $data_pass['order_id'] = $order_number;
            $data_pass['amount'] = session('order_total');
            $data_pass['currency'] = 'INR';
            $data_pass['redirect_url'] = route('hdfc-redirect-url');
            $data_pass['cancel_url'] = route('hdfc-redirect-url');
            $data_pass['language'] = 'EN';
            $data_pass['billing_name'] = $shiaddress_data['first_name']." ".$shiaddress_data['last_name'];
            $data_pass['billing_address'] = $shiaddress_data['address1'];
            $data_pass['billing_city'] = $shiaddress_data['city'];
            $data_pass['billing_state'] = $state_name;
            $data_pass['billing_zip'] = $shiaddress_data['post_code'];
            $data_pass['billing_country'] = $country_name;
            $data_pass['billing_tel'] = $shiaddress_data['phone_number'];
            $data_pass['billing_email'] = $shiaddress_data['email_address'];
            $data_pass['delivery_name'] = $shiaddress_data['bill_first_name']." ".$shiaddress_data['bill_last_name'];
            $data_pass['delivery_address'] = $shiaddress_data['bill_address1'];
            $data_pass['delivery_city'] = $shiaddress_data['bill_city'];
            $data_pass['delivery_state'] = $bill_state_name;
            $data_pass['delivery_zip'] = $shiaddress_data['bill_post_code'];
            $data_pass['delivery_country'] = $bill_country_name;
            $data_pass['delivery_tel'] = $shiaddress_data['bill_phone_number'];
            $data_pass['merchant_param1'] = "additional Info.";
            $data_pass['merchant_param2'] = "additional Info.";
            $data_pass['merchant_param3'] = "additional Info.";
            $data_pass['merchant_param4'] = "additional Info.";
            $data_pass['merchant_param5'] = "additional Info.";

            //echo"<pre>";print_r($data_pass);echo"</pre>";exit;

            return view('front.dataFrom',$data_pass);

            //
        }

       

        //echo "<pre>";print_r($_POST);echo"</pre>";exit;

        
    }

    public function hdfc_redirect_url(){




        $workingKey='A8DC258803F58C3509C476874958CC6E';     //Working Key should be provided here.
        $encResponse=$_POST["encResp"];         //This is the response sent by the CCAvenue Server
        $rcvdString=$this->decrypt($encResponse,$workingKey);      //Crypto Decryption used as per the specified working key.
        $order_status="";
        $decryptValues=explode('&', $rcvdString);
        $dataSize=sizeof($decryptValues);

        $order_id="";
        $tracking_id="";
        $bank_ref_no="";

        for($i = 0; $i < $dataSize; $i++) 
        {
            $information=explode('=',$decryptValues[$i]);
            if($i==3)   $order_status=$information[1];
            if($i==0)   $order_id=$information[1];
            if($i==1)   $tracking_id=$information[1];
            if($i==2)   $bank_ref_no=$information[1];

             
        }
		
		//echo "<pre>";print_r($decryptValues);echo"</pre>";exit;

        if($order_status == 'Success'){

            $data_u['order_id'] = $order_id;
            $data_u['tracking_id'] = $tracking_id;
            $data_u['bank_ref_no'] = $bank_ref_no;
            $data_u['payment_status'] ='Success'; 

            Session::put('order_number', $order_id);

            $affectedRows = DB::table('ci_orders')->where('order_id', $data_u['order_id'])->update($data_u);

            $success = $this->success_mail();

            if ($success) {
                // Redirect to the 'thankyou' route
                return redirect('thankyou');
            }
        }else{
            return redirect('fail');
        }

    }

    public function hdfcrequestHandler(){

        $merchant_data='2';
        $working_key='A8DC258803F58C3509C476874958CC6E';//Shared by CCAVENUES
        $access_code='AVTX37KL24AH54XTHA';//Shared by CCAVENUES
        
        foreach ($_POST as $key => $value){
            $merchant_data.=$key.'='.$value.'&';
        }

        $encrypted_data=$this->encrypt($merchant_data,$working_key);

        $data_pass['encrypted_data'] = $encrypted_data;
        $data_pass['access_code'] = $access_code;
		
		//echo "<pre>";print_r($data_pass);echo "</pre>";exit;

        return view('front.ccavenurequesthandlerform',$data_pass);

    }

    function encrypt($plainText,$key)
    {
        $key = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        $encryptedText = bin2hex($openMode);
        return $encryptedText;
    }

    function decrypt($encryptedText,$key)
    {
        $key = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText = $this->hextobin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return $decryptedText;
    }


    function hextobin($hexString) 
     { 
            $length = strlen($hexString); 
            $binString="";   
            $count=0; 
            while($count<$length) 
            {       
                $subString =substr($hexString,$count,2);           
                $packedString = pack("H*",$subString); 
                if ($count==0)
            {
                $binString=$packedString;
            } 
                
            else 
            {
                $binString.=$packedString;
            } 
                
            $count+=2; 
            } 
            return $binString; 
          } 

    function success_mail(){

       // echo "thankyou";exit;
        //return redirect()->to('thank-you');
        //return redirect()->route('thank_you');
       // return redirect()->route("thankyou");
        //return redirect()->action([checkoutcontroller::class, 'thankyou']);

        $order_number = Session::get('order_number');

        //

        $orderdata = DB::table('ci_orders')->where('order_number',$order_number)->first();

        $user_data_new = DB::table('front_users')->where('id',$orderdata->user_id)->first();


        

        //echo "<pre>";print_r($orderdata);echo "</pre>";exit;

        if($orderdata->paymentmode == 1){
            $payment_mode = "Cash On Delivery";
        }else{
            $payment_mode = "Online Payment";
        }

        $order_item_data = DB::table('ci_order_item')->where('order_id',$order_number)->get();
        $shiaddress = DB::table('ci_shipping_address')->where('order_id',$order_number)->first();

        // echo "<pre>";print_r($orderdata);echo "</pre>";
        // echo "<pre>";print_r($order_item_data);echo "</pre>";
        // echo "<pre>";print_r($shiaddress);echo "</pre>";exit;


        $i=1;

            $message_body ='';

            $message_body .='<!doctype html>

<html lang="en">

    <body style="margin: 0;font-family: Arial, Helvetica, sans-serif;">

        <div style="max-width:630px;margin: 0 auto;border: thin solid #f3f0f0;">

            <header style="text-align:center;"><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

                <a href="{{ config("app.url") }}"><img style="max-width:100%;display: inline-block;" src="'.asset("public/site/images/sagar-logo.png").'"></a>           </header>

            <div style="background:#ababab;padding: 7% 8% 6%;">

                <p style="font-size: 17px;letter-spacing: 0.5px;text-align:center;line-height: 30px;color:#fff;margin:0;">

                    Hi, Your order number <strong>'.$order_number.'</strong> has been<br>

                    successfully placed.

                </p>

            </div>

            <div style="background:#EDEDED;padding: 20px 7%;font-size: 14px;text-align: left;">

                <div style="width:55%;background:#EDEDED;text-align: left;display: inline-block;margin-bottom: 10px;">

                    <p style="margin:0">

                        <strong>Order Details</strong><br>

                        Order No.: '.$order_number.'<br><br>

                        Payment Mode: '.$payment_mode.'<br>

                    </p>

                </div>

                <div style="width:44%;background:#EDEDED;text-align: left;display: inline-block;margin-bottom: 10px;">

                    <p style="padding-left:7%;margin:0">

                    <strong>Delivery Details</strong><br>

                    '.$shiaddress->first_name.' '.$shiaddress->last_name.'<br>

                    '.$shiaddress->address1.' ,'.$shiaddress->city.','.Helper::state_name($shiaddress->state).','.Helper::countryname($shiaddress->country).'- '.$shiaddress->post_code.'

                    </p>

                </div>

            </div>

            <div style="padding: 0px 30px;">

                <p style="text-align: left;text-align: left;border-bottom: 2px solid #727171;padding-bottom: 4px;"><strong>Item(s) in Your Order</strong></p>

                <table style="border-collapse: collapse;width: 100%;">';

                $pvalue = '0';

                // $userdata = Session::get('userdata');

                // $userid = $userdata['userid'];

                foreach($order_item_data as $arrRowDeailts )  

                {

                    if($arrRowDeailts->product_discount_amount != 0 && $arrRowDeailts->product_discount_amount != ''){
                        $product_discount_amount = $arrRowDeailts->product_discount_amount;
                    }else{
                        $product_discount_amount = $arrRowDeailts->product_item_price;
                    }

                    $totalgst='0';

                    $message_body .='<tr style="border-bottom: 2px solid #CCCECF;">';

                    if($arrRowDeailts->base_image != ''){

                    $message_body .=' <td style="width: 85px;padding-bottom: 10px;vertical-align: top;"><img src="'.asset("public/upload/product/small/".$arrRowDeailts->base_image).'" style="width:85px;height:97px;border: 2px solid gray;" /></td>';
                    }else{
                    $message_body .='<td style="width: 85px;padding-bottom: 10px;vertical-align: top;"><img src="'.asset("public/upload/product/small/no-image.png").'" style="width:85px;height:97px;border: 2px solid gray;" /></td>';
                    }

                    $message_body .='<td style="text-align: left;vertical-align: top;padding-left: 15px;padding-bottom: 10px;">

                        <p style="margin: 0;"><strong>'.$arrRowDeailts->order_item_name.'</strong></p>

                        <p style="margin: 0;"><span style="color:gray;">Size:</span> '.$arrRowDeailts->size_name.' | <span style="color:gray;">Quantity:</span> '.$arrRowDeailts->product_quantity.'| <span style="color:gray;">Colour:</span> '.$arrRowDeailts->colour_name.'</p><br>

                    </td>

                    <td style="vertical-align: top;width: 150px;text-align: right;padding-bottom: 10px;">&#8377; '.number_format(($product_discount_amount * $arrRowDeailts->product_quantity),2); 

                    /* $message .='&nbsp; <del style="color:gray;">Rs.: 1599</del></td>';*/

                    $message_body .='</tr>';

                    $i++;

                    $pvalue = ($pvalue +  (($product_discount_amount) * $arrRowDeailts->product_quantity));

                }

                    $message_body .='<tr style="border-bottom: 2px solid #CCCECF;color: #808080;">

                        <td style="text-align:left;" colspan="2">Price</td>

                        <td style="text-align:right;">&#8377; '.number_format($pvalue,2).'</td>

                    </tr>';

                    if($orderdata->coupondiscount != "")  {

                    $message_body .='<tr style="border-bottom: 2px solid #CCCECF;color: #808080;">

                        <td style="text-align:left;" colspan="2">Discount</td>

                        <td style="text-align:right;">-&#8377; '.number_format($orderdata->coupondiscount,2).'</td>

                    </tr>';

                    }


                    if($orderdata->shippingcost != ""){

                    $message_body .='<tr style="color: #808080;">

                     <td style="text-align:left;" colspan="2">Shipping</td>

                     <td style="text-align:right;">+&#8377; '.number_format($orderdata->shippingcost,2).'</td>

                    </tr>';

                    }

                    $message_body .='<tr style="border-bottom: 1px solid #000;border-top: 1px solid #000;font-weight: bold;">

                        <td style="text-align:left;" colspan="2">Total</td>

                        <td style="text-align:right;">Rs.: '.number_format($orderdata->order_total,2).'</td>

                    </tr>

                </table>

            </div>

        </div>

    </body>

</html>';
$subject = "Thank you for shopping with Sagar store";
        $user_mail = $user_data_new->email;
        // $admin_mail = 'parth.hnrtechnologies@gmail.com';
        // $to = [$user_mail,$admin_mail];
        $to = [$user_mail];
        // $to = $request->email;
        Mail::send([], [], function($message) use($message_body, $to, $subject) {
            $message->to($to);
            $message->subject($subject);
            $message->from('devang.hnrtechnologies@gmail.com', 'Sagar store');
            $message->html($message_body);
        });
		
		$mobile = $shiaddress->phone_number;
		$name = $shiaddress->first_name.' '.$shiaddress->last_name;
		
		/* $msg = "Hey ".$username.", use this 4-digit OTP ".$fourRandomDigit." to verify your mobile number with Not So Pink. Please note that this code is only valid for 1 minute. Thank you for shopping with Soch Retail Private Limited"; */
		
		$msg = "Thanks for shopping with us, Hi ".$name.", We just received your order! We are processing Your order now & will let you know when it ships. Sagar & Menza, Jalna";
    		
			$message = urlencode($msg);


            $curl = curl_init();
           
			curl_setopt_array($curl, array(CURLOPT_URL =>"http://smsjust.com/sms/user/urlsms.php?apikey=a280da-a9a87d-7cfa8f-18e771-e7469c&senderid=SGRJLN&message=$message&dest_mobileno=91$mobile&msgtype=TXT&response=y",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_SSL_VERIFYHOST => 0,
              CURLOPT_SSL_VERIFYPEER => 0,
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
			
            curl_close($curl);


    
        return true;

    }

    function thankyou(){
         \Cart::destroy(); 
         session()->forget('coupan_data');
         session()->forget('shippingcahrge');
         session()->forget('discount_amount');
         session()->forget('order_total');
         
        //echo "here";exit;
        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        $data['message'] =  "Thank you for Order. Your order will be delivered soon";

        return view('front.thank_you',$data);
    }

     function fail(){
         \Cart::destroy(); 
         session()->forget('coupan_data');
         session()->forget('shippingcahrge');
         session()->forget('discount_amount');
         session()->forget('order_total');
         
        //echo "here";exit;
        $data['meta_title'] = "";
        $data['meta_keyword'] = "";
        $data['meta_description'] = "";

        $data['message'] =  "Thank you for shopping with us.However,the transaction has been declined.";

        return view('front.fail',$data);
    }


}
