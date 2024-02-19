<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Order;
Use Helper;
use DB;
use Illuminate\Support\Facades\View;

class Ordercontroller extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index($order_id = '', $status = '')

    {
        $data['error'] = '';

        //$data['subscribe_data'] = Subscribe::orderBy('id','DESC')->get();    

        $query = DB::table('ci_orders')
        ->leftJoin('front_users', 'ci_orders.user_id', '=', 'front_users.id')
        ->leftJoin('ci_shipping_address', 'ci_orders.order_id', '=', 'ci_shipping_address.order_id')
        ->select('front_users.email as user_email', 'front_users.name as user_name', 'front_users.mobile as user_mobile',  'ci_orders.*', 'ci_shipping_address.*');

    if (!empty($order_id)) {
        $query->where('ci_orders.order_id', $order_id);
    }

    if (!empty($status)) {
        if ($status == 'SUCCESS' || $status == 'FAILED') {
            $query->where('ci_orders.payment_status', $status);
        } else {
            $query->where('ci_orders.order_status', $status);
        }
    }

    $query->orderBy('ci_orders.order_id', 'DESC');

    $orderList = $query->get();

    foreach ($orderList as $order) {
        $itemList = DB::table('ci_order_item')
            ->where('order_id', $order->order_id)
            ->get();

        $total = 0;
        $additionalCost = 0;

        foreach ($itemList as $item) {
            $product = DB::table('products')
                ->where('id', $item->product_id)
                ->first();

            $total += $item->product_item_price * $item->product_quantity;
        }

        $order->items = $itemList;
        $order->sub_total = $total;
    }

   $orderList;  

    $data['orders_list'] = $orderList;

    //echo "<pre>";print_r($data);echo"</pre>";exit;  

        return view('admin.list_order',$data);

    }

    function detail($order_id){
        //echo $id;exit;
        $data['error'] = '';

        $query = DB::table('ci_orders')
        ->leftJoin('front_users', 'ci_orders.user_id', '=', 'front_users.id')
        ->leftJoin('ci_shipping_address', 'ci_orders.order_id', '=', 'ci_shipping_address.order_id')
        ->select('front_users.email as user_email', 'front_users.name as user_name', 'front_users.mobile as user_mobile',  'ci_orders.*', 'ci_shipping_address.*');

    if (!empty($order_id)) {
        $query->where('ci_orders.order_id', $order_id);
    }

    if (!empty($status)) {
        if ($status == 'SUCCESS' || $status == 'FAILED') {
            $query->where('ci_orders.payment_status', $status);
        } else {
            $query->where('ci_orders.order_status', $status);
        }
    }

    $query->orderBy('ci_orders.order_id', 'DESC');

    $orderList = $query->get();

    foreach ($orderList as $order) {
        $itemList = DB::table('ci_order_item')
            ->where('order_id', $order->order_id)
            ->get();

        $total = 0;
        $additionalCost = 0;

        foreach ($itemList as $item) {
            $product = DB::table('products')
                ->where('id', $item->product_id)
                ->first();

            $total += $item->product_item_price * $item->product_quantity;
        }

        $order->items = $itemList;
        $order->sub_total = $total;
    }

    $orderList;  

    $data['order'] = $orderList[0];


         // echo "<pre>";print_r($data);echo"</pre>";exit;  

        return view('admin.view_order',$data);
    }

    public function destroy(Request $request)

    {

        $delete_id = $request->selected;

        // echo $delete_id;exit;

        Order::whereIn('id',$delete_id)->delete();

        return redirect()->route('order.index')->with('success','Order has been deleted successfully');

        // $id=$request->id;

        // Subscribe::whereIn('id',$id)->delete();

        // return redirect()->route('subscribe.index');

    }

    function create_shipment(){

        $id = $_POST['itemid'];

        $data['order_detail'] = DB::table('ci_order_item as ci')
                                ->select('ci.*', 'u.name',  'sp.*')
                                ->join('ci_orders as o', 'o.order_id', '=', 'ci.order_id')
                                ->join('front_users as u', 'u.id', '=', 'ci.user_info_id')
                                ->leftJoin('ci_shipping_address as sp', 'sp.order_id', '=', 'o.order_id')
                                ->where('ci.order_id', $id)
                                ->orderBy('ci.order_id', 'desc')
                                ->get();
        $data["productdetails"] = DB::table('product_attribute')
                    ->where('pid', $data['order_detail'][0]->product_id)
                    ->where('colour_id', $data['order_detail'][0]->colour_id)
                    ->where('size_id', $data['order_detail'][0]->size_id)
                    ->first();

        $html = View::make('admin.create_label', $data)->render();

        echo $html;
        //echo "<pre>";print_r($html);echo"</pre>";exit;  

    }

    function create_label_add(){
        //echo "here";exit;

        $email     = "yatrik.fiveonline@gmail.com";
        $password  = "Create1.";
        $channelid = "4547476";

        $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/auth/login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                "email": "'.$email.'",
                "password": "'.$password.'"
            }',
                
                CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
                ),
            ));
            
            $authtoken = curl_exec($curl);
            $tokenarray = json_decode($authtoken); 

            //print_r($tokenarray);
            curl_close($curl);

            $data["weight"]                 = $_POST['weight'];
            $data["length"]                 = $_POST['length'];
            $data["height"]                 = $_POST['height'];
            $data["width"]                  = $_POST['width'];
            $data["order_item_id"]          = $_POST['order_item_id'];
            $data["vendor_id"]              = $_POST['vendor_id'];
            $data["user_id"]                = $_POST['user_id'];
            $data["order_id"]    = $order_id           = $_POST['order_id'];

            $status = '';

            $order_list = DB::table('ci_orders')
                            ->leftJoin('front_users', 'ci_orders.user_id', '=', 'front_users.id')
                            ->leftJoin('ci_shipping_address', 'ci_orders.order_id', '=', 'ci_shipping_address.order_id')
                            ->select('front_users.email as user_email', 'front_users.name as user_name', 'front_users.mobile as user_mobile',  'ci_orders.*', 'ci_shipping_address.*')
                            ->when(!empty($order_id), function ($query) use ($order_id) {
                                return $query->where('ci_orders.order_id', $order_id);
                            })
                            ->when(!empty($status), function ($query) use ($status) {
                                return $query->where(function ($query) use ($status) {
                                    if ($status == 'SUCCESS' || $status == 'FAILED') {
                                        $query->where('ci_orders.payment_status', $status);
                                    } else {
                                        $query->where('ci_orders.order_status', $status);
                                    }
                                });
                            })
                            ->orderBy('ci_orders.order_id', 'DESC')
                            ->get();

                        foreach ($order_list as &$order) {
                            $item_list = DB::table('ci_order_item')
                                ->where('order_id', $order->order_id)
                                ->get();

                            $total = 0;
                            $additional_cost = 0;

                            foreach ($item_list as &$item) {
                                $product = DB::table('products')
                                    ->where('id', $item->product_id)
                                    ->get();

                                $total += $item->product_item_price * $item->product_quantity;
                            }

                            $order->items = $item_list;
                            $order->sub_total = $total;
                        }
        
        $orders_iten_data = $order_list[0]->items;

        $productarray = array();
            if($orders_iten_data !=""){ $mn='0';
                foreach($orders_iten_data as $orderitme){  

                     //echo "<pre>";print_r($orderitme);echo "</pre>";

                     $productarray[$mn]['name'] = $orderitme->order_item_name;
                     $productarray[$mn]['sku'] = $orderitme->sku_code;
                     $productarray[$mn]['units'] = $orderitme->product_quantity;
                      $productarray[$mn]['selling_price'] = $orderitme->product_item_price;
                       $productarray[$mn]['discount'] = "";
                       $productarray[$mn]['tax'] = "";
                        $productarray[$mn]['hsn'] = "";
                $mn++; }}
         
            $productjson = json_encode($productarray);

        $orders = $order_list[0];

        if($orders->paymentmode == '1'){  
                $paymentMethod = 'COD';
        }else{  
            $paymentMethod = 'Prepaid';
        }

       // echo "<pre>";print_r($productarray);echo "</pre>"; exit;

        
            $state_name = Helper::state_name($orders->bill_state);
            $countryname = Helper::countryname($orders->bill_country);



        $authorization = "Authorization: Bearer ".$tokenarray->token."";
            $curl = curl_init();
 
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/orders/create/adhoc',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS =>'{
              "order_id": "'.$orders->order_id.'",
              "order_date": "'.$orders->created_at.'",
              "pickup_location": "Primary",
              "channel_id": "'.$channelid.'",
              "comment": "",
              "billing_customer_name": "'.$orders->bill_first_name.'",
              "billing_last_name": "'.$orders->bill_last_name.'",
              "billing_address": "'.$orders->bill_address1.'",
              "billing_address_2": "'.$orders->bill_address2.'",
              "billing_city": "'.$orders->bill_city.'",
              "billing_pincode": "'.$orders->bill_post_code.'",
              "billing_state": "'.$state_name.'",
              "billing_country": "'.$countryname.'",
              "billing_email": "'.$orders->bill_email_address.'",
              "billing_phone": "'.$orders->bill_phone_number.'",
              "shipping_is_billing": true,
              "shipping_customer_name": "",
              "shipping_last_name": "",
              "shipping_address": "",
              "shipping_address_2": "",
              "shipping_city": "",
              "shipping_pincode": "",
              "shipping_country": "",
              "shipping_state": "",
              "shipping_email": "",
              "shipping_phone": "",
              "order_items": '.$productjson.',
              "payment_method": "'.$paymentMethod.'",
              "shipping_charges": "'.$orders->shippingcost.'",
              "giftwrap_charges": 0,
              "transaction_charges": 0,
              "total_discount": "'.$orders->coupondiscount.'",
              "sub_total": "'.round($orders->sub_total).'",
              "length": "'.$data['length'].'",
              "breadth": "'.$data['width'].'",
              "height": "'.$data['height'].'",
              "weight": "'.$data['weight'].'"
            }',
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json', $authorization
              ),
            ));
            
            $response = curl_exec($curl);
             
            curl_close($curl);
         
            $responsearray = json_decode($response); 

            //echo "<pre>";print_r($responsearray);echo "</pre>";

            

            $data_shipment["shipment_id"] = $responsearray->shipment_id;
            $data_shipment["shipment_order_id"] = $responsearray->order_id;

            if($responsearray->status == 'NEW'){

                $data_update['create_lable_weight'] = $data['weight'];
                $data_update['create_lable_length'] = $data['length'];
                $data_update['create_lable_height'] = $data['height'];
                $data_update['create_lable_width'] = $data['width'];
                $data_update['shipment_id'] = $data_shipment["shipment_id"];
                $data_update['shipment_order_id'] = $data_shipment["shipment_order_id"];

                $updateResult = DB::table('ci_orders')
                                ->where('order_id', $data['order_id'])
                                ->update($data_update);
            }

            if (!empty($responsearray->errors)) {
                $errorShow = '';

                if (!empty($responsearray->errors->billing_address)) {
                    $errorShow = $responsearray->errors->billing_address[0];
                }

                if (!empty($responsearray->errors->billing_phone)) {
                    $errorShow = $responsearray->errors->billing_phone[0];
                }

                session()->flash('success', $errorShow);
                return redirect()->route('order.index'); // Adjust the route name based on your Laravel routes
            }

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/courier/assign/awb',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
            "shipment_id": "'.$data_shipment['shipment_id'].'",
            "courier_id": "",
            "status": ""
            
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json', $authorization
            ),
            ));

            $response = curl_exec($curl);

            $response_awb = json_decode($response); 

            //echo "<pre>";print_r($response_awb);echo "</pre>";exit;


            return redirect()->route('order.index')->with('success','Shipment Created Succefully');


            //echo "<pre>";print_r($data_shipment);echo "</pre>"; exit;
    }

    function schedule_pickup(){
       // echo "<pre>";print_r($_POST);echo "</pre>"; exit;

        $order_id = $_POST['order_id1'];
        $shipment_id = $_POST['shipment_id'];

        $email     = "yatrik.fiveonline@gmail.com";
        $password  = "Create1.";
        $channelid = "4547476";

        $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/auth/login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                "email": "'.$email.'",
                "password": "'.$password.'"
            }',
                
                CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
                ),
            ));
            
            $authtoken = curl_exec($curl);
            $tokenarray = json_decode($authtoken); 


            $authorization = "Authorization: Bearer ".$tokenarray->token."";

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/courier/generate/pickup',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
            "shipment_id": ["'.$shipment_id.'"]
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json', $authorization
            ),
            ));

            $response = curl_exec($curl);

            $schedulepickuparray = json_decode($response); 

            echo "<pre>";print_r($schedulepickuparray);echo "</pre>"; exit;


            //session()->flash('success', $schedulepickuparray->message);

            // if($schedulepickuparray->pickup_status == 1){
            //     $co['schedule_pickup'] = 'Scheduled';
            //    // $co['order_id'] = $order_id;
            //     $updateResult = DB::table('ci_orders')
            //                     ->where('order_id', $order_id)
            //                     ->update($co);

            //     return redirect()->route('order.index')->with('success','Pickup Scheduled Succefully');

            // }else{
            //     return redirect()->route('order.index')->with('success','No Services Available please try again');
            // }
            echo "1";
            //echo "<pre>";print_r($schedulepickuparray);echo "</pre>"; exit;
    }

    function create_label(){
        //echo "<pre>";print_r($_POST);echo "</pre>"; exit;

        $order_id = $_POST['order_id2'];
        $shipment_id = $_POST['shipment_id2'];

        $email     = "yatrik.fiveonline@gmail.com";
        $password  = "Create1.";
        $channelid = "4547476";

        $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/auth/login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                "email": "'.$email.'",
                "password": "'.$password.'"
            }',
                
                CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
                ),
            ));
            
            $authtoken = curl_exec($curl);
            $tokenarray = json_decode($authtoken); 
            // echo $tokenarray->token;exit;
            $authorization = "Authorization: Bearer ".$tokenarray->token."";

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/courier/generate/label',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
            "shipment_id": ["'.$shipment_id.'"]
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json', $authorization
            ),
            ));

            $response = curl_exec($curl);

            $schedulepickuparray = json_decode($response); 

            if($schedulepickuparray->label_created == 1){
                $co['generate_label'] = $schedulepickuparray->label_url;

                $updateResult = DB::table('ci_orders')
                                ->where('order_id', $order_id)
                                ->update($co);

                return redirect()->route('order.index')->with('success','Label Generated Succefully');

            }else{

                return redirect()->route('order.index')->with('success','No Services Available please try again.');
            }

           // echo "<pre>";print_r($schedulepickuparray);echo "</pre>";exit;
    }

    function track_package(){

        $id = $_POST['itemid'];
        $data['productid'] = $id;

        $data["order_detail"] = DB::table('ci_orders')->where('order_id', $id)->first();

        if($data["order_detail"]->shipment_id != '') {

            $email     = "yatrik.fiveonline@gmail.com";
            $password  = "Create1.";
            $channelid = "4547476";


            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/auth/login',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                "email": "'.$email.'",
                "password": "'.$password.'"
            }',
                
                CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
                ),
            ));
            
            $authtoken = curl_exec($curl);
            $tokenarray = json_decode($authtoken); 
            // echo $tokenarray->token;exit;
            $authorization = "Authorization: Bearer ".$tokenarray->token."";

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://apiv2.shiprocket.in/v1/external/courier/track/shipment/'.$data["order_detail"]->shipment_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                $authorization
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $response;

            $schedulepickuparray = json_decode($response); 

            $data['schedulepickuparray'] = $schedulepickuparray;

            if($schedulepickuparray->tracking_data->track_status == 1){
                if($schedulepickuparray->tracking_data->track_url != ''){

                    $co['track_url'] = $schedulepickuparray->tracking_data->track_url;

                    $updateResult = DB::table('ci_orders')
                                ->where('order_id', $id)
                                ->update($co);

                }

            }

            $html = View::make('admin.track_package', $data)->render();

            echo $html;exit;

            //echo "<pre>";print_r($schedulepickuparray);echo "</pre>";exit;
        }

        
    }


}