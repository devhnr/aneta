@include('front.includes.header')
        <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>TELMANETA CD</h1>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Lipid Lowering</li>
                        <li>Telmaneta CD</li>
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
                                <li><img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image"></li>
                                <li><img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image"></li>
                                <li><img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image"></li>
                                <li><img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image"></li>
                            </ul>

                            <!-- Carousel Thumbs -->
                            <div class="owl-thumbs products-details-image-slides-owl-thumbs" data-slider-id="1">
                                <div class="owl-thumb-item">
                                    <img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image">
                                </div>

                                <div class="owl-thumb-item">
                                    <img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image">
                                </div>

                                <div class="owl-thumb-item">
                                    <img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="image">
                                </div>

                                <div class="owl-thumb-item">
                                    <img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="products-details-desc">
                            <h3>Telmaneta CD</h3>

                            <div class="price">
                                <span class="new-price">Rs 135.00</span>
                                <span class="old-price">Rs 145.00</span>
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
                                <li><span>Brand :</span> <a href="#">Aneta</a></li>
                                <li><span>Availability :</span> <a href="#">In stock</a></li>
                                <li><span>Category :</span> <a href="#">Lipid Lowering</a></li>
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

                            <div class="buy-checkbox-btn">
                                <div class="item">
                                   <ul class="products-info">
                                <li>Short Description : Pharmaceutical production, which includes the manufacturing of Generic tablets, capsules, and ointment/gels, is generally a difficult, tightly controlled process that necessitates close attention to detail and observance of exacting quality standards.</li>
                            </ul>
                                </div>
                            </div>
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
                                <div class="tab-pane fade show active" id="description" role="tabpanel">
                                    <p>This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                    <ul>
                                        <li>Instant Drodo bestseller</li>
                                        <li>Translated into 18 languages</li>
                                        <li>1 Most Recommended Book of the year.</li>
                                        <li>A neglected project, widely dismissed, its champion written off as unhinged.</li>
                                        <li>Yields a negative result in an experiment because of a flaw in the design of the experiment.</li>
                                        <li>An Amazon, Bloomberg, Financial Times, Forbes, Inc., Newsweek, Strategy + Business, Tech Crunch, Washington Post Best Business Book of the year</li>
                                    </ul>
                                </div>
        
                                <div class="tab-pane fade" id="shipping" role="tabpanel">
                                    <p>This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                </div>
        
                                <div class="tab-pane fade" id="userfor" role="tabpanel">
                                   <p>This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                </div>
								
								<div class="tab-pane fade" id="composition" role="tabpanel">
                                   <p>C This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                </div>
								
								<div class="tab-pane fade" id="inductions" role="tabpanel">
                                   <p>I This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                </div>
								
								<div class="tab-pane fade" id="caution" role="tabpanel">
                                   <p>caution Test I This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                </div>
								
								<div class="tab-pane fade" id="storage" role="tabpanel">
                                   <p>caution Test I This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                </div>
								
								<div class="tab-pane fade" id="direction" role="tabpanel">
                                   <p>caution Test I This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="related-products">
                <div class="container">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>

                    <div class="products-slides owl-carousel owl-theme">
                        <div class="single-products-box">
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
                                    <span class="old-price">Rs 200.00</span>
									<span class="new-price">Rs 180.00</span>
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
                                    <span class="new-price">Rs 80.00</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="single-products-box">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Details Area -->
@include('front.includes.footer')
