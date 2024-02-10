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
                                <span class="old-price">Rs {{ $minPrice }}</span>
                                 <span class="new-price">Rs {{ $disc_price }}</span>
                                 @else
                                    <span class="new-price">Rs {{ $minPrice }}</span>
                                @endif
                            </div>
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
                                <li><span>Brand :</span> <a href="#">{{$brand_data->name}}</a></li>
                                <li><span>Availability :</span> <a href="#">In stock</a></li>
                                <li><span>Category :</span> <a href="#">{{$cat_data->name}}</a></li>
                            </ul>

                            <div class="products-size-wrapper">
                                <span>Size:</span>

                                <ul>
                                    <li><a href="#">Pack of 5</a></li>
                                    <li class="active"><a href="#">Pack of 10</a></li>
                                    <li><a href="#">Pack of 20</a></li>
                                    <li><a href="#">Pack of 25</a></li>
                                    <li><a href="#">Pack of 30</a></li>
                                </ul>
                            </div>

                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1" min="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>

                                <button type="submit" class="default-btn"><i class="flaticon-trolley"></i> Add to Cart</button>
                            </div>

                            <div class="wishlist-btn">
                                <a href="#"><i class='bx bx-heart'></i> Add to Wishlist</a>
								<a href="customer-service.html"><i class='bx bxs-truck' ></i>Free Shipping</a>
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
                                <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description">Description</a></li>
                                <li class="nav-item"><a class="nav-link" id="shipping-tab" data-bs-toggle="tab" href="#shipping" role="tab" aria-controls="shipping">Dose</a></li>
                                <li class="nav-item"><a class="nav-link" id="userfor-tab" data-bs-toggle="tab" href="#userfor" role="tab" aria-controls="userfor">Use For</a></li>
                                <li class="nav-item"><a class="nav-link" id="composition-tab" data-bs-toggle="tab" href="#composition" role="tab" aria-controls="composition">Composition</a></li>
                                <li class="nav-item"><a class="nav-link" id="inductions-tab" data-bs-toggle="tab" href="#inductions" role="tab" aria-controls="inductions">Inductions</a></li>
                                <li class="nav-item"><a class="nav-link" id="caution-tab" data-bs-toggle="tab" href="#caution" role="tab" aria-controls="caution">Caution</a></li>
                                <li class="nav-item"><a class="nav-link" id="storage-tab" data-bs-toggle="tab" href="#storage" role="tab" aria-controls="storage">Storage</a></li>
                                <li class="nav-item"><a class="nav-link" id="direction-tab" data-bs-toggle="tab" href="#direction" role="tab" aria-controls="direction">Direction of Use</a></li>
                            </ul>
        
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel">{!! $product_data->description !!}
                                </div>
        
                                <div class="tab-pane fade" id="shipping" role="tabpanel">
                                    {!! $product_data->dose !!}
                                </div>
        
                                <div class="tab-pane fade" id="userfor" role="tabpanel">
                                   {!! $product_data->use_for !!}
                                </div>
								
								<div class="tab-pane fade" id="composition" role="tabpanel">
                                   {!! $product_data->composition !!}
                                </div>
								
								<div class="tab-pane fade" id="inductions" role="tabpanel">
                                   {!! $product_data->inductions !!}
                                </div>
								
								<div class="tab-pane fade" id="caution" role="tabpanel">
                                   {!! $product_data->caution !!}
                                </div>
								
								<div class="tab-pane fade" id="storage" role="tabpanel">
                                   {!! $product_data->storage !!}
                                </div>
								
								<div class="tab-pane fade" id="direction" role="tabpanel">
                                   {!! $product_data->direction_of_use !!}
                                </div>
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
                                @if($all_product->best_seller == 1)
                                <div class="sale">Sale</div>
                                @endif
    
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
                                <h3><a href="{{url('product-detail/' . $all_product->page_url)}}">{{ $all_product->name }}</a></h3>

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

                                    
                                @if($minPrice != '')
                                    <div class="price">
                                        @if($disc_price != '0')
                                         <span class="old-price">Rs {{ $minPrice }}</span>
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
