@include('front.includes.header')

 <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Wishlist</h1>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->
        @php
        //echo "<pre>";print_r($allwishlist);echo "</pre>";
    @endphp
  <!-- Start Cart Area -->
  <section class="cart-area ptb-70">
    <div class="container">
        <form>
            <div class="cart-table table-responsive">
                @if($allwishlist != '')
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($allwishlist as $allwishlist_details)
                        <tr>
                               @if($allwishlist_details->base_image != '')
                                <td class="product-thumbnail"><a href="{{url('product-detail/' . $allwishlist_details->page_url)}}"><img class="cart-product-image" src="{{asset('public/upload/product/small/'.$allwishlist_details->base_image)}}" alt=""></a></td>
                                @else
                                <td class="product-thumbnail"><a href="#"><img class="cart-product-image" src="{{asset('public/upload/product/small/no-image.png')}}" alt=""></a></td>
                                @endif
                            </td>

                            <td class="product-name">
                                <a href="{{url('product-detail/' . $allwishlist_details->page_url)}}">{{ $allwishlist_details->name }}</a>

                            </td>

                            @php

                        $minprice = $allwishlist_details->minprice;
                            if($allwishlist_details->discount_type != ''){
                                if($allwishlist_details->discount_type == 0){ //percentage
                                    $disc_price_new = $minprice * $allwishlist_details->discount /100 ;
                                    $disc_price = $minprice - $disc_price_new;
                                }elseif($allwishlist_details->discount_type == 1){
                                    $disc_price = $minprice - $allwishlist_details->discount;
                                }else{
                                    $disc_price = '0';
                                }
                            }else{
                                $disc_price = '0';
                            }
                        @endphp
                            <td class="product-price products-details-desc">
                                <div class="price">
                                    @if($disc_price != '0')
                                    <span class="old-price">Rs {{ $minprice }}</span>
                                    <span class="new-price">Rs {{ $disc_price }}</span>
                                    @else
                                    <span class="new-price">Rs {{ $minprice }}</span>
                                            @endif
                                    
                                    </div>
                            </td>

                            

                            <td class="product-subtotal">
                                <a href="{{url('product-detail/' . $allwishlist_details->page_url)}}" class="default-btn" style="
                                padding-left: 25px;
                            ">View Detail</a>
                            </td>
                        </tr>
                        @endforeach

                        {{-- <tr>
                            <td class="product-thumbnail">
                                <a href="#">
                                    <img src="http://localhost/laravel_project/aneta_git/aneta/public/upload/product/large/1707732339-1.jpg" alt="item">
                                </a>
                            </td>

                            <td class="product-name">
                                <a href="#">NETASPRAY Pain Relief Spray</a>
                            </td>

                            <td class="product-price products-details-desc">
                                <div class="price">
                                    <span class="new-price">Rs 170</span>
                                    
                                    </div>
                            </td>

                            

                            <td class="product-subtotal">
                                <a href="#" class="default-btn" style="
                                padding-left: 25px;
                            ">View Detail</a>
                            </td>
                        </tr> --}}

                        

                        
                    </tbody>
                </table>
                @endif
            </div>

        </form>
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