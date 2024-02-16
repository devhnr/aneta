@include('front.includes.header')
<style>
.default-btn{padding-left:25px;}
</style>
 <!-- Start Home Slides Area -->

    @if(isset($banner) && count($banner) > 0 )
        <section class="home-slides owl-carousel owl-theme">
            @foreach($banner as $banner_data)
            <div class="single-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-5 col-md-12">
                                    <div class="banner-content">
                                        <span class="sub-title">{{$banner_data->title1}}</span><h1>{{$banner_data->title2}}  <span>{{$banner_data->title3}}</span></h1>
                                        <p>{{$banner_data->short_des}}</p>
                                        <div class="btn-box">
                                            @if($banner_data->button_link !="")
                                            <div class="d-flex align-items-center">
                                                <a href="{{$banner_data->button_link}}" class="default-btn">{{$banner_data->button_name}}</a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-lg-7 col-md-12">
                                    <div class="banner-image text-center">
                                        <img src="{{ asset('public/upload/banner/large/'.$banner_data->image) }}" class="main-image" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="single-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-12">
                                    <div class="banner-content">
                                        <span class="sub-title">Restoring</span>
                                        <h1>Headaches  <span>Vanish</span></h1>
                                        <p>Expirience soothing relief from persitent headaches with our powerful headache relief solution. </p>
                                        <div class="btn-box">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="default-btn">About Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-lg-7 col-md-12">
                                    <div class="banner-image text-center">
                                        <img src="{{asset('public/site/assets/img/banner/1.webp')}}" class="main-image" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </section>
        @endif
        <!-- End Home Slides Area -->
		
		
		
		<!-- Start Categories Area -->
        @if(isset($categories) && count($categories) > 0 )
        <section class="categories-area pb-40 pt-40">
            <div class="container">
                <div class="section-title">
                    <h2>Categories</h2>
                </div>

                <div class="row">

                    @foreach($categories as $categories_data)

                    <div class="col-lg-2 col-sm-4 col-md-4">
                        <div class="single-categories-box">

                            @if($categories_data->image != '')
                            <img src="{{ asset('public/upload/category/large/'.$categories_data->image) }}" alt="image">
                            @else
                            <img src="{{ asset('public/upload/category/large/no-image.png') }}" alt="image">
                            @endif

                            
                            <h3><a href="#">{{ $categories_data->name }}</a></h3>

                            <a href="#" class="d-block"" class="link-btn"></a>
                        </div>
                    </div>

                    @endforeach

                    
                </div>
                 
            </div>
            
        </section>
        @endif
        <!-- End Categories Area -->
		
		<!-- Start Products Area -->
        @if(isset($best_seller_pro) && count($best_seller_pro) > 0 )
        <section class="products-area pb-40">
            <div class="container">
                <div class="section-title">
                    <h2>Best Selling</h2>
                </div>

                <div class="row">

                    @foreach($best_seller_pro as $best_seller_pro_data)

                    @php 

                    $baseImage = $best_seller_pro_data->base_image;

                    @endphp

     <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="single-products-box">
            <div class="image">
                <a href="{{url('product-detail/' . $best_seller_pro_data->page_url)}}" class="d-block">
                    @if($baseImage != '')
                    <img src="{{ asset('public/upload/product/large/'.$baseImage) }}" alt="image">
                    @else
                    <img src="{{ asset('public/upload/product/large/no-image.png') }}" alt="image">
                    @endif

                </a>

            @php 
            $ProductminPrice = $best_seller_pro_data->min_price;

            /*echo "<pre>";print_r($ProductminPrice);echo "</pre>";*/

            @endphp

            @if($best_seller_pro_data->discount_type != '')

                @if($best_seller_pro_data->discount_type == 0)
                    @php
                    $new_disc_price = $ProductminPrice * $best_seller_pro_data->discount/100;

                    $new_price = $ProductminPrice - $new_disc_price;
                    @endphp
            
                @elseif($best_seller_pro_data->discount_type == 1)
                    @php
                    $new_price = $ProductminPrice - $best_seller_pro_data->discount;
                    @endphp

                @else
                    @php
                    $new_price = 0;
                    @endphp
                @endif

            @else
                @php
                $new_price = 0;
                @endphp
            @endif


            @if($best_seller_pro_data->new_product == 1)
            <div class="new">New</div>
            @endif
            @if($new_price != 0)
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
                            <h3><a href="{{url('product-detail/' . $best_seller_pro_data->page_url)}}">{{ $best_seller_pro_data->name }}</a></h3>

                            


                            @if($ProductminPrice != '')
                                <div class="price">
                                    @if($new_price != '0')
                                    <span class="old-price">Rs {{ $ProductminPrice }}</span>
                                    <span class="new-price">Rs {{ $new_price }}</span>
                                    @else
                                        <span class="new-price">Rs {{ $ProductminPrice }}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                        </div>
                    </div>

                    @endforeach




                </div>

                
            </div>
        </section> 
        @endif
        <!-- End Products Area -->
		
	    <!-- Start Banner Categories Area -->
        @if(isset($subbanner) && count($subbanner) > 0 )
        <section class="banner-categories-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    @foreach($subbanner as $subbanner_data)
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner-categories-box">
                            <img src="{{asset('public/upload/subbanner/large/'.$subbanner_data->image)}}" alt="image">

                            <div class="content">
                                <span class="sub-title">{{$subbanner_data->title}}</span>
                                <h3><a href="#">{{$subbanner_data->sub_title}}</a></h3>
                                <div class="btn-box">
                                    @if($subbanner_data->link !="")
                                    <div class="d-flex align-items-center">
                                        <a href="{{$subbanner_data->link}}" class="default-btn">Shop Now</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-lg-6 col-md-6">
                        <div class="single-banner-categories-box">
                            <img src="{{asset('public/site/assets/img/banner-categories/banner-categories-img2.jpg')}}" alt="image">

                            <div class="content">
                                <span class="sub-title">Personal</span>
                                <h3><a href="#">Favorite Collection</a></h3>
                                <div class="btn-box">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="default-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        @endif
        <!-- End Banner Categories Area -->

         <!-- Start Products Area -->
         @if(isset($new_arrival_pro) && count($new_arrival_pro) > 0 )
         <section class="products-area pb-40">
            <div class="container">
                <div class="section-title">
                    <h2>New Arrivals</h2>
                </div>



                <div class="row">

                    @foreach($new_arrival_pro as $new_arrival_pro_data)

                    @php 

                    $baseImage = $new_arrival_pro_data->base_image;

                    @endphp
 
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="{{url('product-detail/' . $new_arrival_pro_data->page_url)}}" class="d-block">
                                    @if($baseImage != '')
                                    <img src="{{ asset('public/upload/product/large/'.$baseImage) }}" alt="image">
                                    @else
                                    <img src="{{ asset('public/upload/product/large/no-image.png') }}" alt="image">
                                    @endif

                                </a>

                                @php 
                                $ProductminPrice = $new_arrival_pro_data->min_price;

                                /*echo "<pre>";print_r($ProductminPrice);echo "</pre>";*/

                                @endphp

                                @if($new_arrival_pro_data->discount_type != '')

                                    @if($new_arrival_pro_data->discount_type == 0)
                                        @php
                                        $new_disc_price = $ProductminPrice * $new_arrival_pro_data->discount/100;

                                        $new_price = $ProductminPrice - $new_disc_price;
                                        @endphp
                                
                                    @elseif($new_arrival_pro_data->discount_type == 1)
                                        @php
                                        $new_price = $ProductminPrice - $new_arrival_pro_data->discount;
                                        @endphp

                                    @else
                                        @php
                                        $new_price = 0;
                                        @endphp
                                    @endif

                                @else
                                    @php
                                    $new_price = 0;
                                    @endphp
                                @endif


                                @if($new_arrival_pro_data->new_product == 1)
                                <div class="new">New</div>
                                @endif
                                @if($new_price != 0)
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
                            <h3><a href="{{url('product-detail/' . $new_arrival_pro_data->page_url)}}">{{ $new_arrival_pro_data->name }}</a></h3>

                            


                            @if($ProductminPrice != '')
                                <div class="price">
                                    @if($new_price != '0')
                                     <span class="old-price">Rs {{ $ProductminPrice }}</span>
                                     <span class="new-price">Rs {{ $new_price }}</span>
                                     @else
                                        <span class="new-price">Rs {{ $ProductminPrice }}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                        </div>
                    </div>

                    @endforeach

                   <!--  <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image"></a>
    
                                <div class="sale">Sale</div>
    
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
								<h3><a href="#">TELMANETA CH</a></h3>
								   <div class="price">
										<span class="old-price">Rs 200.00</span>
										<span class="new-price">Rs 180.00</span>
									</div>
							</div>
                        </div>
                    </div> -->
<!-- 
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/NETAZOL-150-Camera-2.jpg')}}" alt="image"></a>
        
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
                                <span class="new-price">Rs 159.00</span>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/NETAZOL-200-Camera-2.jpg')}}" alt="image"></a>
        
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
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image"></a>
        
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
                                <span class="new-price">Rs 99.00</span>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image"></a>
        
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
                            <h3><a href="#">TELMANETA CH</a></h3>
							   <div class="price">
									<span class="old-price">Rs 200.00</span>
									<span class="new-price">Rs 180.00</span>
								</div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/NETAZOL-150-Camera-2.jpg')}}" alt="image"></a>
        
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
                                <span class="new-price">Rs 159.00</span>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-products-box">
                            <div class="image">
                                <a href="single-products-1.html" class="d-block"><img src="{{asset('public/site/assets/images/NETAZOL-200-Camera-2.jpg')}}" alt="image"></a>
    
                                <div class="sale">Sale</div>
        
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
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        @endif
        <!-- End Products Area -->
		
		 <!-- Start Brands Area -->
         @if(isset($brand) && count($brand)>0 )
        <section class="brands-area pt-70 pb-40">
            <div class="container">
                <div class="section-title">
                    <h2>Selling Brands</h2>
                </div>

               

                <div class="row align-items-center">
                    @foreach($brand as $brand_data)
                    <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                        <div class="single-brands-item">
                            <a href="#" class="d-block"><img src="{{asset('public/upload/brand/large/'.$brand_data->image) }}" alt="image"></a>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                        <div class="single-brands-item">
                            <a href="#" class="d-block"><img src="{{asset('public/site/assets/img/brands/brands-img2.png')}}" alt="image"></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                        <div class="single-brands-item">
                            <a href="#" class="d-block"><img src="{{asset('public/site/assets/img/brands/brands-img3.png')}}" alt="image"></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                        <div class="single-brands-item">
                            <a href="#" class="d-block"><img src="{{asset('public/site/assets/img/brands/brands-img4.png')}}" alt="image"></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                        <div class="single-brands-item">
                            <a href="#" class="d-block"><img src="{{asset('public/site/assets/img/brands/brands-img5.png')}}" alt="image"></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-4 col-md-2 col-6">
                        <div class="single-brands-item">
                            <a href="#" class="d-block"><img src="{{asset('public/site/assets/img/brands/brands-img61.png')}}" alt="image"></a>
                        </div>
                    </div> --}}
                  
                </div>
 
            </div>
        </section>
        @endif
        <!-- End Brands Area --> 
		
		
		<!-- Start Blog Area -->
        <section class="blog-area pb-40">
            <div class="container">
                <div class="section-title">
                    <h2>Our Blog</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="single-blog-1.html" class="d-block"><img src="{{asset('public/site/assets/img/blog/blog-img1.jpg')}}" alt="image"></a>
                            </div>

                            <div class="post-content">
                                <h3><a href="single-blog-1.html">A researcher is conducting research on coronavirus in the lab</a></h3>
                                <ul class="post-meta align-items-center d-flex">
                                    <li>
                                        <div class="flex align-items-center">
                                            <img src="{{asset('public/site/assets/img/user1.jpg')}}" alt="image">
                                            <a href="#">Rajesh Pandya</a>
                                        </div>
                                    </li>
                                    <li>06-06-2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="single-blog-1.html" class="d-block"><img src="{{asset('public/site/assets/img/blog/blog-img2.jpg')}}" alt="image"></a>
                            </div>

                            <div class="post-content">
                                <h3><a href="single-blog-1.html">You have to wash your hands for 20 seconds to keep yourself free</a></h3>
                                <ul class="post-meta align-items-center d-flex">
                                    <li>
                                        <div class="flex align-items-center">
                                            <img src="{{asset('public/site/assets/img/user2.jpg')}}" alt="image">
                                            <a href="#">Ritika Jaiswal</a>
                                        </div>
                                    </li>
                                    <li>05-06-2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="single-blog-1.html" class="d-block"><img src="{{asset('public/site/assets/img/blog/blog-img3.jpg')}}" alt="image"></a>
                            </div>

                            <div class="post-content">
                                <h3><a href="single-blog-1.html">It is very important to wear proper clothing to keep yourself free</a></h3>
                                <ul class="post-meta align-items-center d-flex">
                                    <li>
                                        <div class="flex align-items-center">
                                            <img src="{{asset('public/site/assets/img/user3.jpg')}}" alt="image">
                                            <a href="#">Bhavesh Bhat</a>
                                        </div>
                                    </li>
                                    <li>04-06-2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
		
@include('front.includes.footer')
