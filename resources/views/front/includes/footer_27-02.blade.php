 <!-- Start Facility Area -->
        <section class="facility-area bg-f7f8fa pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                        <div class="single-facility-box">
                            <div class="icon">
                                <i class="flaticon-free-shipping"></i>
                            </div>
                            <h3>Free Shipping</h3>
                            <p>Free shipping world wide</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                        <div class="single-facility-box">
                            <div class="icon">
                                <i class="flaticon-headset"></i>
                            </div>
                            <h3>Support 24/7</h3>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                        <div class="single-facility-box">
                            <div class="icon">
                                <i class="flaticon-secure-payment"></i>
                            </div>
                            <h3>Secure Payments</h3>
                            <p>100% payment protection</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3 col-6">
                        <div class="single-facility-box">
                            <div class="icon">
                                <i class="flaticon-return-box"></i>
                            </div>
                            <h3>Easy Return</h3>
                            <p>Simple returns policy</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facility Area -->

        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-footer-widget">
                            <a href="{{ url('/') }}" class="logo d-inline-block"><img src="{{asset('public/site/assets/img/logo.png')}}" alt="image"></a>
                            <ul class="footer-contact-info">
                                <li><span>Hotline:</span> <a href="#">1800 572 1008</a></li>
                                <li><span>Phone:</span> <a href="tel:99999 99999">99999 99999</a></li>
                                <li><span>Email:</span> <a href="info@anetapharma.com">info@anetapharma.com</a></li>
                                <li><span>Address:</span> <a href="#" target="_blank">808, Shilp Zaveri, Nr. Shyamal Cross Road, Satellite, Ahmedabad-380015. Gujarat (INDIA)</a></li>
                            </ul>
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class='bx bxl-facebook-square'></i></a></li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class='bx bxl-instagram-alt'></i></a></li>
                                <li><a href="#" target="_blank"><i class='bx bxl-linkedin-square'></i></a></li>
                                <li><a href="#" target="_blank"><i class='bx bxl-pinterest'></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Information</h3>

                            <ul class="link-list">
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
								<li><a href="{{ url('/blogs') }}">Blogs</a></li>
								<li><a href="{{ url('/faqs') }}">FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Policies</h3>

                            <ul class="link-list">
								<li><a href="{{url('/terms-conditions')}}">Terms & Conditions</a></li>
								<li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
								<li><a href="{{url('/return-policy')}}">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Newsletter</h3>
                            <p>Sign up for our mailing list to get the latest updates & offers.</p>
                            <form action="{{ url('news_letter_email') }}"  id="news_letter" class="newsletter-form-new" data-bs-toggle="validator" method="post">
                                @csrf
                               <input type="text" class="input-newsletter" placeholder="Enter your email address" name="email" id="email" required autocomplete="off">
                                <p id="email_error" style="display: none;color: red"></p>
                                <input type="hidden" name="action" value="news-form">
                                <button type="button" class="default-btn" onclick="javascript:validation()">Subscribe Now</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>Copyright © 2024 Aneta Pharmaceuticals Pvt. Ltd.</p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="payment-types">
                                <ul class="d-flex align-items-center justify-content-end">
                                    <li>We accept payment via:</li>
                                    <li><a href="#" target="_blank"><img src="{{asset('public/site/assets/img/payment-types/visa.png')}}" alt="image"></a></li>
                                    <li><a href="#" target="_blank"><img src="{{asset('public/site/assets/img/payment-types/mastercard.png')}}" alt="image"></a></li>
                                    <li><a href="#" target="_blank"><img src="{{asset('public/site/assets/img/payment-types/paypal.png')}}" alt="image"></a></li>
                                    <li><a href="#" target="_blank"><img src="{{asset('public/site/assets/img/payment-types/descpver.png')}}" alt="image"></a></li>
                                    <li><a href="#" target="_blank"><img src="{{asset('public/site/assets/img/payment-types/american-express.png')}}" alt="image"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- Start QuickView Modal Area -->
        <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i></span>
                    </button>

                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="products-image">
                                <img src="{{asset('public/site/assets/img/products/products-img1.jpg')}}" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="products-content">
                                <h3><a href="#">Coronavirus Face Mask</a></h3>

                                <div class="price">
                                    <span class="old-price">$45.00</span>
                                    <span class="new-price">$39.00</span>
                                </div>

                                <div class="products-review">
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <a href="#" class="rating-count">3 reviews</a>
                                </div>

                                <ul class="products-info">
                                    <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                                    <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li>
                                    <li><span>Products Type:</span> <a href="#">Mask</a></li>
                                </ul>

                                <div class="products-color-switch">
                                    <h4>Color:</h4>

                                    <ul>
                                        <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Black" class="color-black"></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="White" class="color-white"></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Green" class="color-green"></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Yellow Green" class="color-yellowgreen"></a></li>
                                        <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Teal" class="color-teal"></a></li>
                                    </ul>
                                </div>

                                <div class="products-size-wrapper">
                                    <h4>Size:</h4>

                                    <ul>
                                        <li><a href="#">XS</a></li>
                                        <li class="active"><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>

                                <div class="products-add-to-cart">
                                    <div class="input-counter">
                                        <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                        <input type="text" min="1" value="1">
                                        <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                    </div>

                                    <button type="submit" class="default-btn"><i class="flaticon-trolley"></i> Add to Cart</button>
                                </div>

                                <a href="#" class="view-full-info">or View Full Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End QuickView Modal Area -->

        <!-- Start Shopping Cart Modal -->
        <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i></span>
                    </button>

                    <div class="modal-body">
                        <div id="header_cart">

                         @if(Session::get('userdata') !='')
                        @if(Cart::count() > 0)

                        <h3>My Cart <span id="header_cart_count_footer">({{Cart::count()}})</span></h3>


                       
                        <div class="products-cart-content">

                            @php
                                $subtotal =0;
                            @endphp
        
                            @foreach(Cart::content() as $items)
                            <div class="products-cart d-flex align-items-center">
                                <div class="products-image">
                                    <a href="{{url('product-detail/' . $items->options->page_url)}}"><img src="{{asset('public/upload/product/small/'.$items->options->image)}}" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="{{url('product-detail/' . $items->options->page_url)}}">{{$items->name}}</a></h3>

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
                                    @if(Session::get('userdata') !='')
                                    <div class="products-price">
                                       
                                        @if($disc_price != '0')
                                            <span class="new-price"><del>Rs. {{ $items->price }}</del> Rs. {{$disc_price}}</span>
                                        @else
                                            <span class="new-price">Rs.  {{$items->price}}</span>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                                <a href="javascript:void(0);"  onclick="remove_to_cart('{{ $items->rowId }}'); return false;" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                           
                           
                            
                            @endforeach
                            {{-- <div class="products-cart d-flex align-items-center">
                                <div class="products-image">
                                    <a href="#"><img src="{{asset('public/site/assets/images/NETAZOL-150-Camera-2.jpg')}}" alt="image"></a>
                                </div>

                                <div class="products-content">
                                    <h3><a href="#">NETAZOL 150</a></h3>
                                    <div class="products-price">
                                        <span>1</span>
                                        <span>x</span>
                                        <span class="price">Rs 159.00</span>
                                    </div>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div> --}}

                            
                        </div>
                        @if(Session::get('userdata') !='')
                        <div class="products-cart-subtotal">
                            <span>Subtotal</span>

                            <span class="subtotal">Rs {{$subtotal}}</span>
                        </div>
                        @endif


                        

                        <div class="products-cart-btn">
                            <a href="{{url('cart')}}" class="default-btn">Proceed</a>
                        </div>

                     @else
                        <p class="notification_style">No Product In Cart</p>
                    @endif

                    @else
                        <p class="notification_style">Please Login To Procceed Order</p>
                    @endif




                </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Shopping Cart Modal -->

        <!-- Start Wishlist Modal -->
           

                    <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                                </button>

                             
                                <div class="modal-body">
                                    <div id="header_wish">
                                 @if(Session::get('userdata')!='')

                                       
                                      
                                    @php
                                     $wishlist_id=Session::get('userdata');
                                   

                                    $query= DB::table('wishlist')->where('userid',$wishlist_id)->get();

                                    //  echo"<pre>";
                                    //     print_r($query);
                                    //  echo"</pre>";
                                        
                                    @endphp
                                  @if(count($query)>0)
                                       
                                    <h3>My Wishlist<span id="header_wish_footer">({{count($query)}})</span></h3>

                                    @php  

                                    $userid = Session::get('userdata')['userid'];
                                    $allwishlist = DB::table('products as p')
                                        ->select('p.*', 'wishlist.id as wish_id')
                                        ->leftJoin('product_image as im', function ($join) {
                                            $join->on('im.pid', '=', 'p.id')
                                                ->where('im.baseimage', '=', 1);
                                        })
                                        ->join('wishlist', 'wishlist.product_id', '=', 'p.id')
                                        ->where('wishlist.userid', $userid)
                                        ->orderBy('wishlist.id', 'desc')
                                        ->addSelect([
                                            DB::raw('(SELECT MIN(price) FROM product_attribute WHERE pid = p.id) AS minprice'),
                                            DB::raw('IFNULL(im.image, "noimage.jpg") AS base_image'),
                                        ])
                                        ->get();
    
                                                // echo "<pre>";print_r($allwishlist);echo "</pre>";
    
    
                                      @endphp

                     
                                        <div class="products-cart-content">
                                            @if($allwishlist != '')
                                            @foreach($allwishlist as $allwishlist_details)
                                            <div class="products-cart d-flex align-items-center">
                                                <div class="products-image">
                                                    <a href="{{url('product-detail/' . $allwishlist_details->page_url)}}">
                                            @if($allwishlist_details->base_image != '')
                                            <img src="{{asset('public/upload/product/small/'.$allwishlist_details->base_image)}}" alt="image">
                                            @else
                                            <img src="{{asset('public/upload/product/small/no-image.png')}}" alt="image">
                                            @endif
                                                    </a>
                                                </div>

                                                <div class="products-content">
                                                    <h3><a href="{{url('product-detail/' . $allwishlist_details->page_url)}}">{{$allwishlist_details->name}}</a></h3>
                                                    


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
                                                       <div class="products-price products-details-desc">
                                              <div class="price">        
                                        @if($disc_price != '0')
                                        <span class="old-price">Rs {{ $minprice }}</span>
                                        <span class="new-price">Rs {{ $disc_price }}</span>
                                        @else
                                        <span class="new-price">Rs {{ $minprice }}</span>
                                    
                                                @endif
                                                    </div>
                                                </div>
                                                </div>
                                                <a href="javascript:void(0);"  onclick="delete_wishlist('{{ $allwishlist_details->id }}'); return false;" class="remove-btn"><i class='bx bx-trash'></i></a>
                                            </div>
                                            @endforeach
                                            @else
                                                {{'No Prodct'}}
                                            @endif
                                            

                                        </div>
                       

                    <div class="products-cart-btn">
                   
                            <a href="{{url('/wishlist')}}" class="default-btn">Wishing List</a>
                          
                        </div>
                        @else
                        <p class="notification_style">No Product in Wishlist </p>
                        @endif

                        @else
                        <p class="notification_style">Please Login To See Wishlist </p>
                    @endif
                   
             
                     </div>
                  
                </div>
               
                </div>
            </div>
        </div>
       
        <!-- End Shopping Cart Modal -->

       

        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Links of JS files -->
        <script src="{{asset('public/site/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/fancybox.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/owl.carousel2.thumbs.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/meanmenu.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/nice-select.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/rangeSlider.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/sticky-sidebar.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('public/site/assets/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('public/site/assets/js/main.js')}}"></script>
    </body>
</html>
@if (Session::get('L_strsucessMessage') != '')

        <script>document.getElementById('message_succsess').innerHTML = "{{ Session::get('L_strsucessMessage') }}";$('#message_succsess').show().delay(0).fadeIn('show');$('#message_succsess').show().delay(3000).fadeOut('show');</script>
        
        @endif
<script>
    function remove_to_cart(rowId) {

var answer = window.confirm("Do you want to remove this product from cart?");

 if (answer) {
        var url = '{{ url('cart_remove') }}';
        $.ajax({
          url: url,
          type: 'post',
          data: {
            "_token": "{{ csrf_token() }}",
            "rowId": rowId
          },
          success: function(msg) {

            if (msg != '') {
              $("#mydiv_pc").load(location.href + " #mydiv_pc");
              $("#header_cart").load(location.href + " #header_cart");
             $("#header_cart_count").load(location.href + " #header_cart_count");
             $("#header_cart_count_footer").load(location.href + " #header_cart_count_footer");
              return false;
            }

          }

        });
    }
}
</script>
<script>
    function delete_wishlist(id) {
        
var answer = window.confirm("Do you want to remove this product from Wishlist?");

 if (answer) {

        var url = '{{ url('delete_wishlist') }}';
        $.ajax({
          url: url,
          type: 'post',
          data: {
            "_token": "{{ csrf_token() }}",
            "id": id
          },
          success: function(msg) {

            if (msg == 1) {
              // $("#mydiv_pc").load(location.href + " #mydiv_pc");
              $("#header_wish").load(location.href + " #header_wish");
             //$("#header_cart_count").load(location.href + " #header_cart_count");
             //$("#header_wish_footer").load(location.href + " #header_wish_footer");
              return false;
            }

          }

        });
    }
}
</script>

<script type="text/javascript">

    function validation(){
        // alert("test");
        var email = $("#email").val();
        if(email == ''){
            $("#email_error").html("Please Enter Email Address");
            $('#email_error').show().delay(0).fadeIn('show');
            $('#email_error').show().delay(2000).fadeOut('show');
            return false;
        }
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                jQuery('#email_error').html("Please Enter Proper Email");
                jQuery('#email_error').show().delay(0).fadeIn('show');
                jQuery('#email_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#email').offset().top - 150
                }, 1000);
                return false;
            }

        var url = "{{ url('check_email') }}";

        $.ajax({
            url : url,
            type : 'post',
            data : {
                '_token' : '{{ csrf_token() }}',
                'email' : email
            },
            success:function(returndata){
                    // alert(returndata);
                    if(returndata == 0)
                    {
                        $("#email_error").html("Email Address Already Exists");
                        $('#email_error').show().delay(0).fadeIn('show');
                        $('#email_error').show().delay(2000).fadeOut('show');
                        return false;
                        }
                        if(returndata == 1){
                            // alert(hello);  
                        $('#news_letter').submit();
                        }
            }
        });
    }
</script>
<script>
    function wishlist_data(product_id) {
         // alert(product_id);return false;
        $.ajax({
            type: 'POST',
            url: "{{ url('add-to-wishlist') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "product_id": product_id

            },
            success: function(msg) {
                if (msg == '1') {
                    $("#message_succsess").css("display", "block", );
                    $("#message_succsess").css("text-align", "center");
                    $("#message_succsess").css("background-color", "#00cccc");
                    $("#message_succsess").css("color", "white");
                    $("#message_succsess").addClass("success");
                    $('#message_succsess').show().delay(0).fadeIn('slow');
                    $('#message_succsess').hide().delay(2000).fadeOut('slow');
                    $("#message_succsess").html(
                        "Product has been added to your Wishlist.");

                    $(".wishlist-btn a i").addClass("active");
                    // $('html, body').animate({
                    //     scrollTop: $('#message_succsess').offset().top - 1000
                    // }, 1000);
                    setTimeout(function() {
                        document.location.reload()
                    }, 2000);

                } else {
                    $("#message_error").css("display", "block");
                    $("#message_error").css("text-align", "center");
                    $('#message_error').show().delay(0).fadeIn('slow');
                    $('#message_error').hide().delay(2000).fadeOut('slow');
                    // $('html, body').animate({
                    //     scrollTop: $('#message_error').offset().top - 1000
                    // }, 1000);
                    $("#message_error").html(
                        "Product is already in your wishlist.");
                }

            }


        });

    }
</script>