@include('front.includes.header')

 <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Cart</h1>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->
        @php
        //echo "<pre>";print_r(Cart::content());echo "</pre>";
    @endphp
  <!-- Start Cart Area -->
        <section class="cart-area ptb-70">
            <div class="container">

                @if(Cart::count() > 0)
                <div id="mydiv_pc">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @php
                                    $subtotal = 0;
                                @endphp

                                @foreach(Cart::content() as $items)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="{{url('product-detail/' . $items->options->page_url)}}">
                                            <img src="{{asset('public/upload/product/large/'.$items->options->image)}}" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="{{url('product-detail/' . $items->options->page_url)}}">{{$items->name}}</a>
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

                                    <td class="product-price products-details-desc">
                                        <div class="price">
                                        @if($disc_price != '0')
                                        <span class="old-price">Rs {{ $items->price }}</span>
                                        <span class="new-price">Rs {{ $disc_price }}</span>
                                        @else
                                           <span class="new-price">Rs {{ $items->price }}</span>
                                       @endif
                                        </div>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            {{-- <span class="minus-btn qty-btn minus_button_{{$items->rowId}}" onclick="minus_qty('{{$items->rowId}}', '{{$items->options->qty_left}}');"><i class='bx bx-minus'></i></span>

                                            <input type="number" min="1" name="quantity" class="input-text qty-text qty_input_{{$items->rowId}}" value="{{$items->qty}}" readonly>

                                            <span class="plus-btn plus_button_{{$items->rowId}}" onclick="plus_qty('{{$items->rowId}}', '{{$items->options->qty_left}}');"><i class='bx bx-plus'></i></span> --}}

                                            <button type="button" class="qty-minus-new qty-btn minus_button_{{$items->rowId}}" value="+" onclick="minus_qty('{{$items->rowId}}', '{{$items->options->qty_left}}');" style="width: 22%;display: inline-block;color: var(--blackColor);
                                                outline: 0;
                                                border: none;
                                                background-color: #f8f8f8;
                                                font-size: 17px;
                                                font-weight: 600;height: 45px;">-</button>

                                                    <input class="input-text qty-text qty_input_{{$items->rowId}}" type="number" name="quantity" value="{{$items->qty}}" style="width: 46%;
                                                    display: inline-block; height: 45px;
    color: var(--blackColor);
    outline: 0;
    border: none;
    background-color: #f8f8f8;
    font-size: 17px;
    font-weight: 600;" readonly>
                                                    <!-- <input type="button" value="+" class="qty-plus-new qty-btn plus_button_{{$items->rowId}}" onclick="plus_qty('{{$items->rowId}}', '{{$items->options->qty_left}}');"> -->
                                                    <button type="button" class="qty-plus-new qty-btn plus_button_{{$items->rowId}}" value="+" onclick="plus_qty('{{$items->rowId}}', '{{$items->options->qty_left}}');" style="width: 22%;display: inline-block;color: var(--blackColor);
                                                        outline: 0;
                                                        border: none;
                                                        background-color: #f8f8f8;
                                                        font-size: 17px;
                                                        font-weight: 600;height: 45px;">+</button>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        {{-- <span class="subtotal-amount">Rs {{$items->qty * $p_price}}</span> --}}

                                        <a href="javascript:void(0)" onclick="remove_to_cart('{{ $items->rowId }}'); return false;" class="remove"><i class='bx bx-trash'></i></a>
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

                                
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row ">
                            <div class="col-lg-8 col-sm-8 col-md-8">
                                <div class="shopping-coupon-code">
                                    <input type="text" class="form-control" placeholder="Coupon code" name="coupon_code" id="coupon_code" >
                                    <button type="button" onclick="apply_coupon();">Apply Coupon</button>
                                </div>
                                <div id="coupon_error" class="alert-message valierror "
                                style="display:none; margin-bottom: 5px; width: 76%;    margin-top: 18px;"></div>
                            <div id="coupon_success" class="successmain alert-message "
                                style="display:none; margin-bottom: 5px; width: 76%; color:green;    margin-top: 18px;"></div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4">


                    <div class="cart-totals" style="margin-top:0 ;">
                        <div id="sidebar_cart">
                        <h3>Cart Totals</h3>

                        <ul>
                            <li>Subtotal <span>Rs {{$subtotal}}</span></li>

                            @php
                                //echo '<pre>';print_r(session('coupan_data'));echo"</pre>";

                            $coupon_discounted = 0;   
                                
                            if(session('coupan_data.discount') !='' && session('coupan_data.coupanvalue') == 0 ){

                                $coupon_discounted = round(($subtotal * session('coupan_data.discount'))/100);

                            }

                            if(session('coupan_data.discount') !='' && session('coupan_data.coupanvalue') == 1 ){ 

                                $coupon_discounted = session('coupan_data.discount');

                            }

                            if($subtotal <= 1499){
                                $shippingcahrge = 499;
                            }else{
                                $shippingcahrge = 0;
                            }

                                

                                $order_total=round($subtotal  - $coupon_discounted + $shippingcahrge );

                                session(['shippingcahrge' => $shippingcahrge]);

                            @endphp 

                            <li>Discount <span>Rs @if($coupon_discounted !="")

                                @if($coupon_discounted !="" && $coupon_discounted > 0)

                                    {{$coupon_discounted}}
                                    <a href="javascript:void(0)" onclick="removecoupon();"
                                class="remove-button desk-remove-cart-button"><img
                                    src="{{asset('public/upload/remove.png')}}"></a>
                                @else
                                    {{'0'}}
                                   
                                @endif
                                    

                            @else


                            @endif
                        </span>
                    </li>
                            <li>Shipping Charge <span>Rs {{$shippingcahrge}}</span></li>
                            <li>Total <span>Rs {{$order_total}}</span></li>
                        </ul>

                        <a href="{{url('checkout')}}" class="default-btn"><i class="flaticon-trolley"></i> Proceed to Checkout</a>
                        </div>
                    </div>

                            </div>
                            

                            {{-- <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                                <a href="#" class="default-btn"><i class="flaticon-view"></i> Update Cart</a>
                            </div> --}}
                        </div>
                    </div>

                </form>
                </div>
                @else
                    <p>No Product In Cart</p>
                @endif
            </div>
        </section>
        <!-- End Cart Area -->
@include('front.includes.footer')
<script>
    function plus_qty(rowid, max_qty) {

//alert(max_qty);
var input = $('.qty_input_' + rowid).val();
//alert(input);
var count = parseInt(input) + 1;
//alert(count);
if (count >= max_qty) {
    //alert('sd');
    $('.plus_button_' + rowid).prop("disabled", true);
} else {
    count = count;
}
$('.qty_input_' + rowid).val(count);

 var url = '{{ url('update_cart') }}';

$.ajax({
    url: url,
    type: 'post',
    data: {
        '_token': '{{ csrf_token() }}',
        'rowid': rowid,
        'max_qty': max_qty,
        'count': count,
    },
    success: function(msg) {
        //$("#mydiv_pc").load(location.href + " #mydiv_pc");
        $("#sidebar_cart").load(location.href + " #sidebar_cart");
        // $("#header_cart").load(location.href + " #header_cart");
        // $("#header_cart_count").load(location.href + " #header_cart_count");
        //$("#total_cart_value").load(location.href + " #total_cart_value");
    }
});

return false;
}

function minus_qty(rowid, max_qty) {

var input = $('.qty_input_' + rowid).val();
var count = parseInt(input) - 1;

//alert(count);
if (count <= 1) {
    count = 1;
}

$('.qty_input_' + rowid).val(count);

var url = '{{ url('update_cart') }}';

$.ajax({
    url: url,
    type: 'post',
    data: {
        '_token': '{{ csrf_token() }}',
        'rowid': rowid,
        'max_qty': max_qty,
        'count': count,
    },
    success: function(msg) {
        //$("#mydiv_pc").load(location.href + " #mydiv_pc");
    $("#sidebar_cart").load(location.href + " #sidebar_cart");
    //     $("#header_cart").load(location.href + " #header_cart");
    //     $("#header_cart_count").load(location.href + " #header_cart_count");
    //     $('.plus_button_' + rowid).prop("disabled", false);
        //$("#total_cart_value").load(location.href + " #total_cart_value");
    }
});

return false;
}

function apply_coupon(){

var coupon_code = $("#coupon_code").val();

if(coupon_code == ''){

    $("#coupon_error").html("Enter Coupon Code.");
    $('#coupon_error').show().delay(0).fadeIn('show');
    $('#coupon_error').show().delay(2000).fadeOut('show');
    $("#coupon_success").html("");
    return false;
}


var url = '{{ url('couponcheck') }}';
$.ajax({
    url: url,
    type: 'POST',

    data: {
        '_token': '{{ csrf_token() }}',
        'coupon': coupon_code,
    },
success: function(result) {
    console.log(result);

    //alert(result);
    if (result == 'invalid') {
        $("#coupon_error").html("Invalid Coupon Code.");
        $('#coupon_error').show().delay(0).fadeIn('show');
        $('#coupon_error').show().delay(2000).fadeOut('show');
        $("#coupon_success").html("");
        return false;
    } else if (result == 'Already') {
        $("#coupon_error").html("Coupan Code is Already Applied");
        $('#coupon_error').show().delay(0).fadeIn('show');
        $('#coupon_error').show().delay(2000).fadeOut('show');
        $("#coupon_success").html("");
        return false;
    } else if (result == 'success') {
        // cartupdatetotal();
        $("#coupon_error").html("");
        $("#coupon_success").html("Coupon Code Applied Succsessfully");
        $('#coupon_success').show().delay(0).fadeIn('show');
        $('#coupon_success').show().delay(2000).fadeOut('show');
        setTimeout(location.reload.bind(location), 2000);
        //$("#cart_total").load(location.href + " #cart_total");
        // $("#input-coupon").val("");
    } 
    else if (result == 'grater') {
        // cartupdatetotal();
        $("#coupon_error").html("");
        $("#coupon_error").html("Coupon Code Value Grater Then Your total");
        $('#coupon_error').show().delay(0).fadeIn('show');
        $('#coupon_error').show().delay(2000).fadeOut('show');
        $("#coupon_success").html("");
        return false;
    } else {
        $("#coupon_error").html("Minimum order amount should be RS. " + result);
        $('#coupon_error').show().delay(0).fadeIn('show');
        $('#coupon_error').show().delay(2000).fadeOut('show');
        $("#coupon_success").html("");
        return false;
    }
}
});

}

function removecoupon(){

var answer = window.confirm("Do you want to remove this Coupon Code?");
if (answer) {

    var url = '{{ url('removecoupon') }}';
    $.ajax({

        type : 'POST',
        url : url,
        data :{'_token': '{{ csrf_token() }}'},

        success : function(msg){
            setTimeout(location.reload.bind(location), 0);
        }

    });

}
}
</script>