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
        //echo "<pre>";print_r(Cart::content());echo "</pre>";
    @endphp
  <!-- Start Cart Area -->
  <section class="cart-area ptb-70">
    <div class="container">
        <form>
            <div class="cart-table table-responsive">
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
                        <tr>
                            <td class="product-thumbnail">
                                <a href="#">
                                    <img src="http://localhost/laravel_project/aneta_git/aneta/public/upload/product/large/1707737921-V2.jpg" alt="item">
                                </a>
                            </td>

                            <td class="product-name">
                                <a href="#">Vicks Vaporub 50ml</a>
                            </td>

                            <td class="product-price products-details-desc">
                                <div class="price">
                                    
                                    <span class="old-price">Rs 100</span>
                                    <span class="new-price">Rs 90</span>
                                    
                                    </div>
                            </td>

                            

                            <td class="product-subtotal">
                                <a href="#" class="default-btn" style="
                                padding-left: 25px;
                            ">View Detail</a>
                            </td>
                        </tr>

                        <tr>
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
                        </tr>

                        

                        
                    </tbody>
                </table>
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