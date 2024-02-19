@include('front.includes.header')

  <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Checkout</h1>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

 <!-- Start Checkout Area -->
        <section class="checkout-area ptb-70">
            <div class="container">
                
                <form id="addressForm" name="addressForm" method="POST" action="{{ route('order_place') }}">
                     @csrf

                     @php
                        if(Session::get('userdata') !=''){
                            $company_name = Session::get('userdata')['company_name'];
                            $name = Session::get('userdata')['name'];
                            $address = Session::get('userdata')['address'];
                            $email = Session::get('userdata')['email'];
                            $mobile = Session::get('userdata')['mobile'];
                            $pincode = Session::get('userdata')['pincode'];
                        }else{
                            $company_name = "";
                            $name = "";
                            $address = "";
                            $email = "";
                            $mobile = "";
                            $pincode = "";
                        }
                     @endphp

                     <input type="hidden" name="checkout_address_already" id="checkout_address_already" value="">
                     
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="billing-details">
                                <h3 class="title">Shipping Details</h3>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12" style="display:none;">
                                        <div class="form-group">
                                            <label>Country <span class="required">*</span></label>
                                        
                                            <div class="select-box">
                                                <select name="country" id="country">
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Company Name<span class="required">*</span></label>
                                            <input type="text" class="form-control" name="company_name" id="company_name" value="{{$company_name}}">
                                            <p class="form-error-text" id="company_name_error" style="color: red;"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Contact Person <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="contact_person" name="first_name" value="{{$name}}">
                                            <p class="form-error-text" id="contact_person_error" style="color: red;"></p>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="address1" name="address1" value="{{$address}}">
                                            <p class="form-error-text" id="address1_error" style="color: red;"></p>
                                        </div>
                                    </div>
                                    @php

                                        $allstate = "Andaman and Nicobar Islands,Andhra Pradesh,Arunachal Pradesh,Assam,Bihar,Chandigarh,Chhattisgarh,Dadra and Nagar Haveli,Daman and Diu,Delhi,Goa,Gujarat,Haryana,Himachal Pradesh,Jammu and Kashmir,Jharkhand,Karnataka,Kashmir,Kerala,Laccadives,Lakshadweep,Madhya Pradesh,Maharashtra,Manipur,Meghalaya,Mizoram,Nagaland,Odisha,Pondicherry,Punjab,Rajasthan,Sikkim,Tamil Nadu,Telangana,Tripura,Uttarakhand,Uttar Pradesh,West Bengal"; $allstate1 = explode(',',$allstate);

                                    @endphp

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>State / County <span class="required">*</span></label>
                                            <div class="select-box">
                                                <select id="state_check" name="state">
                                                    <option value="">Select State / County</option>
                                                    @foreach($allstate1 as $key=>$value)
                                                        <option value="{{$value}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                                <p class="form-error-text" id="state_error" style="color: red;"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" class="form-control" id="city" name="city">
                                            <p class="form-error-text" id="city_error" style="color: red;"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input type="email" class="form-control" id="email_id" name="email_id" value="{{$email}}">
                                            <p class="form-error-text" id="email_id_error" style="color: red;"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="number" class="form-control" id="phone" name="phone" value="{{$mobile}}">
                                            <p class="form-error-text" id="phone_error" style="color: red;"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input type="number" class="form-control" id="post_code" name="post_code" value="{{$pincode}}">
                                            <p class="form-error-text" id="post_code_error" style="color: red;"></p>
                                        </div>
                                    </div>

                                    

                                    <!-- <div class="col-lg-12 col-md-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="create-an-account">
                                            <label class="form-check-label" for="create-an-account">Create an account?</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="ship-different-address">
                                            <label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
                                        </div>
                                    </div> -->

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Order notes</label>
                                            <textarea name="order_note" id="order_note" cols="30" rows="5" placeholder="Order Notes" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         @if(Cart::count() > 0)
                        <div class="col-lg-6 col-md-12">
                            <div class="order-details">
                                <h3 class="title">Your Order</h3>

                                <div class="order-table table-responsive">
                                    @php
                                        $subtotal = 0;
                                    @endphp
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach(Cart::content() as $items)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="#">{{$items->name}} × {{$items->qty}}</a>
                                                </td>

                                                @php

                                                    if($items->options->discount_type != ''){
                                                        if($items->options->discount_type == 0){ //percentage
                                                            $disc_price_new = $items->price * $items->options->discount /100 ;

                                                            $disc_price = $items->price - $disc_price_new;

                                                            $p_price = $disc_price;
                                                        }elseif($items->options->discount_type == 1){
                                                            $disc_price = $items->price - $items->options->discount;
                                                            $p_price = $disc_price;
                                                        }else{
                                                            $disc_price = '0';
                                                            $p_price = $items->price;
                                                        }

                                                    }else{
                                                        $disc_price = '0';
                                                    }

                                                 @endphp

                                                <td class="product-total">
                                                    <span class="subtotal-amount">Rs {{$items->qty * $p_price}}</span>
                                                </td>
                                            </tr>

                                            @php
                                                if($items->qty >= 1){
                                                    $subtotal += $items->qty * round($p_price);
                                                }else{
                                                    $subtotal += round($p_price);
                                                }

                                            @endphp

                                            @endforeach

                                           <!--  <tr>
                                                <td class="product-name">
                                                    <a href="#">TELMANETA CH</a>
                                                </td>

                                                <td class="product-total">
                                                    <span class="subtotal-amount">Rs 200.00</span>
                                                </td>
                                            </tr> -->

                                            

                                            <tr>
                                                <td class="order-subtotal">
                                                    <span>Subtotal</span>
                                                </td>

                                                <td class="order-subtotal-price">
                                                    <span class="order-subtotal-amount">Rs {{$subtotal}}</span>
                                                </td>
                                            </tr>

                                            @php
                                        //echo '<pre>';print_r(session('coupan_data'));echo"</pre>";

                                            $coupon_discounted = 0;   
                                                
                                            if(session('coupan_data.discount') !='' && session('coupan_data.coupanvalue') == 0 ){

                                                $coupon_discounted = round(($subtotal * session('coupan_data.discount'))/100);

                                            }

                                            if(session('coupan_data.discount') !='' && session('coupan_data.coupanvalue') == 1 ){ 

                                                $coupon_discounted = session('coupan_data.discount');

                                             }



                                            session(['discount_amount' => $coupon_discounted]);

                                            if($subtotal <= 100){
                                                $shippingcahrge = 499;
                                            }else{
                                                $shippingcahrge = 0;
                                            }

                                            

                                            $order_total=round($subtotal  - $coupon_discounted + $shippingcahrge );

                                            session(['order_total' => $order_total]);

                                            session(['shippingcahrge' => $shippingcahrge]);

                                            @endphp 

                                            <tr>
                                                <td class="order-shipping">
                                                    <span>Discount</span>
                                                </td>

                                                <td class="shipping-price">
                                                    <span>Rs {{$coupon_discounted}}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="order-shipping">
                                                    <span>Shipping</span>
                                                </td>

                                                <td class="shipping-price">
                                                    <span>Rs {{$shippingcahrge}}</span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="total-price">
                                                    <span>Total</span>
                                                </td>

                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">Rs {{$order_total}}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="payment-box">
                                    <div class="payment-method">
                                        
                                        <p>
                                            <input type="radio" id="paypal" name="payment_method" value="2">
                                            <label for="paypal">Online</label>
                                        </p>
                                        <p>
                                            <input type="radio" id="cash-on-delivery" name="payment_method" value="1">
                                            <label for="cash-on-delivery">Cash on Delivery</label>
                                        </p>
                                    </div>
                                     <p class="form-error-text" id="payment_error" style="color: red;"></p>
                                    <a href="javascript:void(0)" onclick="place_order();" class="default-btn"><i class="flaticon-tick"></i>Place Order<span></span></a>
                                </div>
                            </div>
                        </div>

                        @endif
                    </div>
                </form>
            </div>
        </section>
        <!-- End Checkout Area -->
@include('front.includes.footer')
<script type="text/javascript">
    function place_order() {

        var company_name = jQuery("#company_name").val();
        if (company_name == '') {
            jQuery('#company_name_error').html("Please enter company name");
            jQuery('#company_name_error').show().delay(0).fadeIn('show');
            jQuery('#company_name_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#company_name').offset().top - 150
            }, 1000);
            return false;
        }

        var contact_person = jQuery("#contact_person").val();
        if (contact_person == '') {
            jQuery('#contact_person_error').html("Please enter Last Name");
            jQuery('#contact_person_error').show().delay(0).fadeIn('show');
            jQuery('#contact_person_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#contact_person').offset().top - 150
            }, 1000);
            return false;
        }

        var address1 = jQuery("#address1").val();
        if (address1 == '') {
            jQuery('#address1_error').html("Please enter Address");
            jQuery('#address1_error').show().delay(0).fadeIn('show');
            jQuery('#address1_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#address1').offset().top - 150
            }, 1000);
            return false;
        }

        var state = jQuery("#state_check").val();
        //alert(state);
        if (state == '') {
            jQuery('#state_error').html("Please enter State");
            jQuery('#state_error').show().delay(0).fadeIn('show');
            jQuery('#state_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#state_check').offset().top - 150
            }, 1000);
            return false;
        }

        var city = jQuery("#city").val();
        if (city == '') {
            jQuery('#city_error').html("Please enter City / Town");
            jQuery('#city_error').show().delay(0).fadeIn('show');
            jQuery('#city_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#city').offset().top - 150
            }, 1000);
            return false;
        }

        var email_id = jQuery("#email_id").val();
        if (email_id == '') {
            jQuery('#email_id_error').html("Please enter Email Address");
            jQuery('#email_id_error').show().delay(0).fadeIn('show');
            jQuery('#email_id_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#email_id').offset().top - 150
            }, 1000);
            return false;
        }

        var em = jQuery('#email_id').val();
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(em)) {
            jQuery('#email_id_error').html("Enter Valid Email Address");
            jQuery('#email_id_error').show().delay(0).fadeIn('show');
            jQuery('#email_id_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#email_id').offset().top - 150
            }, 1000);
            return false;
        }

        var phone = jQuery("#phone").val();
        if (phone == '') {
            jQuery('#phone_error').html("Please enter Phone Number");
            jQuery('#phone_error').show().delay(0).fadeIn('show');
            jQuery('#phone_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#phone').offset().top - 150
            }, 1000);
            return false;
        }

        var ph = jQuery('#phone').val();
        var filter = /^\d{10}$/;
        if (!filter.test(ph)) {
            jQuery('#phone_error').html("Enter Valid Phone Number");
            jQuery('#phone_error').show().delay(0).fadeIn('show');
            jQuery('#phone_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#phone').offset().top - 150
            }, 1000);
            return false;
        }

        

        var post_code = jQuery("#post_code").val();
        if (post_code == '') {
            jQuery('#post_code_error').html("Please enter Pin code");
            jQuery('#post_code_error').show().delay(0).fadeIn('show');
            jQuery('#post_code_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#post_code').offset().top - 150
            }, 1000);
            return false;
        }

        var pc = jQuery('#post_code').val();
        var filter = /^\d{6}$/;
        if (!filter.test(pc)) {
            jQuery('#post_code_error').html("Enter Valid Pin Code");
            jQuery('#post_code_error').show().delay(0).fadeIn('show');
            jQuery('#post_code_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#post_code').offset().top - 150
            }, 1000);
            return false;
        }

        var payment_method = $("input[name='payment_method']:checked").val();  
        if(payment_method == '' || payment_method == undefined){
            $("#payment_error").html("Please Select Payment method.");
            $('#payment_error').show().delay(0).fadeIn('show');
            $('#payment_error').show().delay(2000).fadeOut('show');
            return false;
        }

        $('#addressForm').submit();

        

    }
</script>
