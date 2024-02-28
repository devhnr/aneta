@include('front.includes.header')
        <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>{{ $product_data->name }}</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>{{$cat_data->name}}</li>
                        <li>{{ $product_data->name }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->
		
		<!-- Start Product Details Area -->
		<section class="product-details-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="products-details-image">
                            <ul class="products-details-image-slides owl-theme owl-carousel" data-slider-id="1">

                                @foreach ($product_image as $product)

                                <li><img src="{{asset('public/upload/product/detailpage/'.$product->image) }}" alt="image"></li>

                                @endforeach


                                <!-- <li><img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image"></li>
                                <li><img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image"></li>
                                <li><img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image"></li> -->
                            </ul>

                            <!-- Carousel Thumbs -->
                            <div class="owl-thumbs products-details-image-slides-owl-thumbs" data-slider-id="1">
                                 @foreach ($product_image as $product)
                                <div class="owl-thumb-item">
                                    <img src="{{asset('public/upload/product/detailpage/'.$product->image) }}" alt="image">
                                </div>
                                @endforeach

                                <!-- <div class="owl-thumb-item">
                                    <img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image">
                                </div>

                                <div class="owl-thumb-item">
                                    <img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image">
                                </div>

                                <div class="owl-thumb-item">
                                    <img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image">
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="products-details-desc">
                            <h3>{{ $product_data->name }}</h3>

                            @if(Session::get('userdata') !='')
                            @php
                                $minPrice = DB::table('product_attribute')
                                ->where('pid', $product_data->id)
                                ->min('price');

                               // echo "<pre>";print_r($product_data);echo "</pre>";

                                if($product_data->discount_type != ''){
                                    if($product_data->discount_type == 0){ //percentage
                                        $disc_price_new = $minPrice * $product_data->discount /100 ;

                                        $disc_price = $minPrice - $disc_price_new;
                                    }elseif($product_data->discount_type == 1){
                                        $disc_price = $minPrice - $product_data->discount;
                                    }else{
                                        $disc_price = '0';
                                    }
                                }else{
                                    $disc_price = '0';
                                }
                            @endphp

                            @if($minPrice != '')
                            <div class="price">
                                @if($disc_price != '0')
                                <span class="old-price">Rs <span id="disc_old_price">{{ $minPrice }}</span></span>
                                 <span class="new-price">Rs <span id="disc_new_price">{{ $disc_price }}</span></span>
                                 @else
                                    <span class="new-price">Rs <span id="new_price">{{ $minPrice }}</span></span>
                                @endif
                            </div>
                            @endif
                            @endif

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
                                {{-- <li><span>Brand :</span> <a href="#">{{$brand_data->name}}</a></li> --}}
                                <li><span>Availability :</span>
                                     <a href="#"><span id="stock_status">Stock</span></a></li>
                                <li><span>Category :</span> <a href="#">{{$cat_data->name}}</a></li>
                            </ul>

                            @if(isset($package_detail) && count($package_detail) > 0)
                            <div class="products-size-wrapper">
                                <span>Size:</span>

                                <ul>
                                    @foreach($package_detail as $package_detail_data)
                                    <li><a href="javascript:void(0)" onclick="pack_change('{{ $product_data->id }}',{{$package_detail_data->id}});" class="" id="add_class_{{$package_detail_data->id}}">{{$package_detail_data->package_detail}}</a></li>
                                    @endforeach
                                    <!-- 
                                    <li class="active"><a href="#">Pack of 10</a></li>
                                    <li><a href="#">Pack of 20</a></li>
                                    <li><a href="#">Pack of 25</a></li>
                                    <li><a href="#">Pack of 30</a></li> -->
                                </ul>
                            </div>

                            @endif

                            <div class="col-12"><span id="cartvalidate" class="error alert-message valierror"
                                    style="display:none;"></span> </div>
                            <div class="col-12"><span id="product_added" class="successmain alert-message"
                                    style="display:none;"></span> </div>

                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                   <input type="button" value="-" class="qty-minus-new qty-btn" data-quantity="minus" data-field="quantity" style="width: 22%;display: inline-block;">

                                    <input type="text" name="quantity" value="1" id="quantity_max" min="1" style="width: 46%;
                                    display: inline-block;" readonly>

                                    <input type="button" value="+" class="qty-plus-new qty-btn" data-quantity="plus" data-field="quantity" style="width: 22%;display: inline-block;">

                                    <!-- <input type="button" value="-" class="qty-minus-new qty-btn" data-quantity="minus" data-field="quantity">
                                    <input class="input-text qty-text" type="number" name="quantity" value="1" id="quantity_max" min="1" readonly>
                                    <input type="button" value="+" class="qty-plus-new qty-btn" data-quantity="plus" data-field="quantity"> -->
                                </div>

                                <input type="hidden" name="package_detail_id" value="" id="package_detail_id">

                                <input type="hidden" name="size_id" value="" id="size_id">
                                @if(Session::get('userdata') !='')
                                <button type="button" onclick="add_to_cart('{{ $product_data->id }}'); return false;" class="default-btn"><i class="flaticon-trolley"></i> Add to Cart</button>
                                @endif
                            </div>

                            
                            <input type="hidden" name="check_stock" id="check_stock" value="">
                            <div class="wishlist-btn">
                                @php if(Session::get('userdata') != ''){ 
                                    $is_wishlist = Helper::check_wishlist($product_data->id);

                                        if($is_wishlist == "1"){
                                            $icon_class = 'fa-heart';
                                        }else{
                                            $icon_class = 'fa-heart-o';
                                        }
                                        @endphp
                                        <a href="javascript:void(0);" onclick="wishlist_data('{{ $product_data->id }}')" class="text-uppercase text-extra-small alt-font margin-20px-right font-weight-500 "><i class="fa {{ $icon_class }} align-middle margin-5px-right"></i>Add to wishlist</a>

                                @php }else{ @endphp
                                    <a href="{{ route('signin')}}" class="text-uppercase text-extra-small alt-font margin-20px-right font-weight-500 "><i class="fa fa-heart-o align-middle margin-5px-right"></i>Add to wishlist</a>
                                @php } @endphp


								<a href="#"><i class='bx bxs-truck' ></i>Free Shipping</a>
                            </div>

                            @if($product_data->short_description != '')
                            <div class="buy-checkbox-btn">
                                <div class="item">
                                   <ul class="products-info">
                                <li>Short Description : {{ $product_data->short_description }}</li>
                            </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="products-details-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">


                                @if($product_data->description != "" )
                                <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description">Description</a></li>
                                @endif

                                @if($product_data->dose != "" )
                                <li class="nav-item"><a class="nav-link" id="shipping-tab" data-bs-toggle="tab" href="#shipping" role="tab" aria-controls="shipping">Dose</a></li>
                                @endif

                                @if($product_data->use_for != "" )
                                <li class="nav-item"><a class="nav-link" id="userfor-tab" data-bs-toggle="tab" href="#userfor" role="tab" aria-controls="userfor">Use For</a></li>
                                @endif

                                @if($product_data->composition != "" )
                                <li class="nav-item"><a class="nav-link" id="composition-tab" data-bs-toggle="tab" href="#composition" role="tab" aria-controls="composition">Composition</a></li>
                                @endif

                                @if($product_data->inductions != "" )
                                <li class="nav-item"><a class="nav-link" id="inductions-tab" data-bs-toggle="tab" href="#inductions" role="tab" aria-controls="inductions">Inductions</a></li>
                                @endif

                                @if($product_data->caution != "" )
                                <li class="nav-item"><a class="nav-link" id="caution-tab" data-bs-toggle="tab" href="#caution" role="tab" aria-controls="caution">Caution</a></li>
                                @endif

                                @if($product_data->storage != "" )
                                <li class="nav-item"><a class="nav-link" id="storage-tab" data-bs-toggle="tab" href="#storage" role="tab" aria-controls="storage">Storage</a></li>
                                @endif

                                @if($product_data->direction_of_use != "" )
                                <li class="nav-item"><a class="nav-link" id="direction-tab" data-bs-toggle="tab" href="#direction" role="tab" aria-controls="direction">Direction of Use</a></li>
                                @endif

                            </ul>
        
                            <div class="tab-content" id="myTabContent">

                                @if($product_data->description !="")
                                <div class="tab-pane fade show active" id="description" role="tabpanel">
                                        {!! $product_data->description !!}
                                </div>
                                @endif

                                @if($product_data->dose != "" )
                                <div class="tab-pane fade" id="shipping" role="tabpanel">
                                    {!! $product_data->dose !!}
                                </div>
                                @endif
        
                                @if($product_data->use_for != "" )
                                <div class="tab-pane fade" id="userfor" role="tabpanel">
                                   {!! $product_data->use_for !!}
                                </div>
                                @endif

                                @if($product_data->composition != "" )
								<div class="tab-pane fade" id="composition" role="tabpanel">
                                   {!! $product_data->composition !!}
                                </div>
                                @endif
								
                                @if($product_data->inductions != "" )
								<div class="tab-pane fade" id="inductions" role="tabpanel">
                                   {!! $product_data->inductions !!}
                                </div>
                                @endif
								
                                @if($product_data->caution != "" )
								<div class="tab-pane fade" id="caution" role="tabpanel">
                                   {!! $product_data->caution !!}
                                </div>
                                @endif
								
                                @if($product_data->storage != "" )
								<div class="tab-pane fade" id="storage" role="tabpanel">
                                   {!! $product_data->storage !!}
                                </div>
                                @endif
								
                                @if($product_data->direction_of_use != "" )
								<div class="tab-pane fade" id="direction" role="tabpanel">
                                   {!! $product_data->direction_of_use !!}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php

//echo "<pre>";print_r($relatedproduct);echo "</pre>";
            @endphp

            @if(isset($relatedproduct) && count($relatedproduct) > 0)
            <div class="related-products">
                <div class="container">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>

                    <div class="products-slides owl-carousel owl-theme">

                         @foreach($relatedproduct as $all_product)

                         @php

                            $Base_image = DB::table('product_image')
                                       ->where('pid', $all_product->id)
                                       ->where('baseimage', 1)
                                       ->first();

                        @endphp
						
						@php
							$minPrice = DB::table('product_attribute')
							->where('pid', $all_product->id)
							->min('price');

						   // echo "<pre>";print_r($all_product);echo "</pre>";

							if($all_product->discount_type != ''){
								if($all_product->discount_type == 0){ //percentage
									$disc_price_new = $minPrice * $all_product->discount /100 ;

									$disc_price = $minPrice - $disc_price_new;
								}elseif($all_product->discount_type == 1){
									$disc_price = $minPrice - $all_product->discount;
								}else{
									$disc_price = '0';
								}
							}else{
								$disc_price = '0';
							}
						@endphp

                        <div class="single-products-box">
                            <div class="image">
                                <a href="{{url('product-detail/' . $all_product->page_url)}}" class="d-block">

                                    @if($Base_image != '')
                                    <img src="{{asset('public/upload/product/large/'.$Base_image->image)}}" alt=""/>
                                    @else
                                    <img src="{{asset('public/upload/product/large/no-image.png')}}" alt=""/>
                                    @endif

                                    </a>
    
                               @if($all_product->new_product == 1)
                                <div class="new">New</div>
                                @endif
                                @if($disc_price != 0)
                                <div class="sale">Sale</div>
                                @endif
    
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                @php if(Session::get('userdata') != ''){ 
                
                                                $is_wishlist = Helper::check_wishlist($all_product->id);
                
                                                if($is_wishlist == "1"){
                                                    $icon_class = 'fa-heart';
                                                }else{
                                                    $icon_class = 'fa-heart-o';
                                                }
                                                @endphp
                                            <a href="javascript:void(0);" onclick="wishlist_data('{{ $all_product->id }}')" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist">
                                            <i class="fa {{ $icon_class }}"></i>
                                            <span class="tooltip-label">Add to Wishlist</span></a>
                                            @php }else{ @endphp
                                            <a href="{{ route('signin')}}" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            @php } @endphp
                                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="content">
                                <h3><a href="{{url('product-detail/' . $all_product->page_url)}}">{{ $all_product->name }}</a></h3>

                                

                                    
                                @if($minPrice != '')
                                    <div class="price">
                                        @if($disc_price != '0')
                                         <span class="old-price" >Rs {{ $minPrice }}</span>
                                         <span class="new-price">Rs {{ $disc_price }}</span>
                                         @else
                                            <span class="new-price">Rs {{ $minPrice }}</span>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/NETAZOL-200-Camera-2.jpg')}}" alt="image"></a>
    
                                <div class="new">New</div>
    
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="content">
                                <h3><a href="#">NETAZOL 200</a></h3>
                                <div class="price">
                                    <span class="new-price">Rs 80.00</span>
                                </div>
                            </div>
                        </div> -->
    
                        <!-- <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image"></a>
    
                                <div class="new">New</div>
    
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="content">
                                <h3><a href="#">TELMANETA CD</a></h3>
                                <div class="price">
                                    <span class="new-price">Rs 100.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/NETAZOL-150-Camera-2.jpg')}}" alt="image"></a>
    
                                <div class="new">New</div>
    
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="content">
                                <h3><a href="#">NETAZOL 150</a></h3>
                                <div class="price">
                                    <span class="new-price">Rs 150.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/NETAZOL-200-Camera-2.jpg')}}" alt="image"></a>
    
                                <div class="new">New</div>
    
                                <div class="buttons-list">
                                    <ul>
                                        <li>
                                            <div class="wishlist-btn">
                                                <a href="#">
                                                    <i class='bx bx-heart'></i>
                                                    <span class="tooltip-label">Add to Wishlist</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="content">
                                <h3><a href="#">NETAZOL 200</a></h3>
                                <div class="price">
                                    <span class="new-price">Rs 130.00</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            @endif
        </section>
        <!-- End Product Details Area -->
@include('front.includes.footer')
<script type="text/javascript">
    function add_to_cart(product_id) {

        var package_detail_id = $('#package_detail_id').val();
        var size_id = $('#size_id').val();

        if (package_detail_id == '') {
            $("#cartvalidate").html("Please Select Size");
            $('#cartvalidate').show().delay(0).fadeIn('show');
            $('#cartvalidate').show().delay(2000).fadeOut('show');
            return false;
        }

        var check_stock = $('#check_stock').val();

        if (check_stock == 0) {
            $("#cartvalidate").html("This Pack is Out Of Stock");
            $('#cartvalidate').show().delay(0).fadeIn('show');
            $('#cartvalidate').show().delay(2000).fadeOut('show');
            return false;
        }

        var qty = $('#quantity_max').val();
        $.ajax({

                type : 'POST',
                url  : '{{ url('add_to_cart ') }}',
                data : {

                        "_token": "{{ csrf_token() }}",
                        'package_detail_id': package_detail_id,
                        'qty': qty,
                        'pid': product_id,
                        'size': size_id,
                },

                success :function(msg){
                    if(msg != 0){

                        $("#header_cart").load(location.href + " #header_cart");
                        $("#header_cart_count").load(location.href + " #header_cart_count");
                        $("#header_cart_count_footer").load(location.href + " #header_cart_count_footer");

                        $("#message_succsess").html("Product Added To Cart");
                        $('#message_succsess').show().delay(0).fadeIn('show');
                        $('#message_succsess').show().delay(2000).fadeOut('show');
                        return false;
                    }
                }
                });
    }

    function pack_change(product_id, pack_id) {
    $('#package_detail_id').val(pack_id);

    var lis = document.querySelectorAll('ul li');
    for (var i = 0; i < lis.length; i++) {
        lis[i].classList.remove('active');
    }

    // Add 'active' class to the clicked <li> element
    var clickedLi = document.getElementById('add_class_' + pack_id).parentNode;
    clickedLi.classList.add('active');

    var discount = '{{ $product_data->discount }}';
    var discount_type = '{{ $product_data->discount_type }}';
    var package_detail_id = $('#package_detail_id').val();
    var url = '{{ url('price_show') }}';

    $.ajax({
        url: url,
        type: 'post',
        data: {
            "_token": "{{ csrf_token() }}",
            "package_detail_id": package_detail_id,
            "p_id": product_id
        },
        success: function (msg) {
            var response_ajax = JSON.parse(msg);

            if (response_ajax.response == "success") {

                if (response_ajax.qty > 0) {
                    // Product is in stock
                    $('#check_stock').val(1);
                    document.getElementById('stock_status').innerHTML = 'Stock';
                    document.getElementById('stock_status').style.color = ''; // Set red color
                } else {
                    // Product is out of stock
                    $('#check_stock').val(0);
                    document.getElementById('stock_status').innerHTML = 'Out Of Stock';
                    document.getElementById('stock_status').style.color = 'red'; // Set red color
                }

                if (discount_type == 2) {
                    document.getElementById('new_price').innerHTML = (response_ajax.price);
                } else {
                    if (discount > 0) {
                        if (discount_type == 0) {
                            var discountedPrice = response_ajax.price - (response_ajax.price * (discount / 100));
                            document.getElementById('disc_new_price').innerHTML = Math.round(discountedPrice);
                            document.getElementById('disc_old_price').innerHTML = Math.round(response_ajax.price);
                        }

                        if (discount_type == 1) {
                            var discountedPrice = response_ajax.price - discount;
                            document.getElementById('disc_new_price').innerHTML = Math.round(discountedPrice);
                            document.getElementById('disc_old_price').innerHTML = Math.round(response_ajax.price);
                        }
                    }
                }

                $("#quantity_max").val(1);
                $("#quantity_max").attr("max", response_ajax.qty);
                $("#size_id").val(response_ajax.size_id);
            }
        }
    });
}


    document.addEventListener("DOMContentLoaded", function() {
    // Get the input element and plus/minus buttons
    var inputElement = document.getElementById("quantity_max");
    var minusButton = document.querySelector(".qty-minus-new");
    var plusButton = document.querySelector(".qty-plus-new");

    // Add click event listener to the minus button
    minusButton.addEventListener("click", function() {
        var currentValue = parseInt(inputElement.value);
        if (currentValue > inputElement.min) {
            inputElement.value = currentValue - 1;
        }
    });

    // Add click event listener to the plus button
    plusButton.addEventListener("click", function() {
        var currentValue = parseInt(inputElement.value);
        if (currentValue < inputElement.max) {
            inputElement.value = currentValue + 1;
        }
    });
});
</script>