@include('front.includes.header')
<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Lipid Lowering</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Lipid Lowering</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->
		
		<!-- Start Products Area -->
        <section class="products-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="woocommerce-widget-area">
                            <div class="woocommerce-widget price-list-widget">
                                <h3 class="woocommerce-widget-title">Filter By Price</h3>

                                <div class="collection-filter-by-price">
                                    <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                                </div>
                            </div>
{{-- 
                            <div class="woocommerce-widget color-list-widget">
                                <h3 class="woocommerce-widget-title">Color</h3>

                                <ul class="color-list-row">
                                    <li class="active"><a href="#" title="Black" class="color-black"></a></li>
                                    <li><a href="#" title="Red" class="color-red"></a></li>
                                    <li><a href="#" title="Yellow" class="color-yellow"></a></li>
                                    <li><a href="#" title="White" class="color-white"></a></li>
                                    <li><a href="#" title="Blue" class="color-blue"></a></li>
                                    <li><a href="#" title="Green" class="color-green"></a></li>
                                    <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>
                                    <li><a href="#" title="Pink" class="color-pink"></a></li>
                                    <li><a href="#" title="Violet" class="color-violet"></a></li>
                                    <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>
                                    <li><a href="#" title="Lime" class="color-lime"></a></li>
                                    <li><a href="#" title="Plum" class="color-plum"></a></li>
                                    <li><a href="#" title="Teal" class="color-teal"></a></li>
                                </ul>
                            </div> --}}

                            <div class="woocommerce-widget brands-list-widget">
                                <h3 class="woocommerce-widget-title">Category</h3>

                                <ul class="brands-list-row">
                                    <li><a href="#">Lipid Lowering</a></li>
                                    <li><a href="#">Cardiovascular</a></li>
                                    <li><a href="#">Anti-Histamines</a></li>
                                    <li class="active"><a href="#">Anti-Diabetic</a></li>
                                </ul>
                            </div>

                            

                            <div class="woocommerce-widget best-seller-widget">
                                <h3 class="woocommerce-widget-title">Best Seller</h3>

                                <article class="item">
                                    <a href="{{ url('/product-detail') }}" class="thumb">
                                        <span class="fullimage cover" role="img"><img src="{{asset('public/site/assets/images/NETAZOL-200-Camera-2.jpg')}}" alt="image"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall"><a href="{{ url('/product-detail') }}">NETAZOL 200</a></h4>
                                        <span>Rs 130.00</span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </article>

                                <article class="item">
                                    <a href="#" class="thumb">
                                        <span class="fullimage cover" role="img"><img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall"><a href="#">TELMANETA CD</a></h4>
                                        <span>Rs 99.00</span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star-half'></i>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </article>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <div class="drodo-grid-sorting row align-items-center">
                            <div class="col-lg-6 col-md-6 result-count">
                                <p>We found <span class="count">99</span> products available for you</p>

                                <span class="sub-title d-lg-none"><a href="#" data-bs-toggle="modal" data-bs-target="#productsFilterModal"><i class='bx bx-filter-alt'></i> Filter</a></span>
                            </div>
        
                            <div class="col-lg-6 col-md-6 ordering">
                                <div class="select-box">
                                    <label>Sort By:</label>
                                    <select>
                                        <option>Default</option>
                                        <option>Latest</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="{{ url('/product-detail') }}" class="d-block"><img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image"></a>
										 <div class="new">New</div>
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
                            <h3><a href="{{ url('/product-detail') }}">TELMANETA CD</a></h3>
                            <div class="price">
									<span class="old-price">Rs 200.00</span>
									<span class="new-price">Rs 180.00</span>
								</div>
                        </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-4 col-sm-6">
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
                            </div>
        
                            <div class="col-lg-4 col-md-4 col-sm-6">
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
        
                            <div class="col-lg-4 col-md-4 col-sm-6">
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
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-4 col-sm-6">
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
							 <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="single-products-box">
                                    <div class="image">
                                        <a href="#" class="d-block"><img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image"></a>
										 <div class="new">New</div>
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
                            <h3><a href="#">TELMANETA CD</a></h3>
                            <div class="price">
									<span class="old-price">Rs 200.00</span>
									<span class="new-price">Rs 180.00</span>
								</div>
                        </div>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-4 col-sm-6">
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
                            </div>
        
                            <div class="col-lg-4 col-md-4 col-sm-6">
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
        
                            <div class="col-lg-4 col-md-4 col-sm-6">
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
                                </div>
                            </div>
        
                            

                            <div class="col-lg-12 col-md-12">
                                <div class="pagination-area text-center">
                                    <a href="#" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>
                                    <span class="page-numbers current" aria-current="page">1</span>
                                    <a href="#" class="page-numbers">2</a>
                                    <a href="#" class="page-numbers">3</a>
                                    <a href="#" class="page-numbers">4</a>
                                    <a href="#" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Products Area -->
@include('front.includes.footer')
