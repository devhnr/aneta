<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('public/site/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/boxicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/rangeSlider.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/site/assets/css/responsive.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Aneta Pharmaceuticals Pvt LTD - Making Life Healthy</title>

        <link rel="icon" type="image/png" href="{{asset('public/site/assets/img/favicon_1.png')}}">
    </head>
    <body>

        <!-- Start Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <ul class="top-header-contact-info">
                            <li><i class='bx bx-phone-call'></i> <a href="tel:1800 572 1008">1800 572 1008</a></li>
                            <li><i class='bx bx-map'></i> <a href="#" target="_blank">Shyamal Cross Road, Satellite, Ahmedabad</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-5">
                        <ul class="top-header-menu">
                           <li><i class="fa fa-user-circle" style="color: #3D9630;"></i> <a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="drodo-responsive-nav">
                <div class="container">
                    <div class="drodo-responsive-menu">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{asset('public/site/assets/img/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="drodo-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{asset('public/site/assets/img/logo.png')}}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active">Home</a>
                                </li>
								
								 <li class="nav-item"><a href="#" class="nav-link">Products <i class='bx bx-chevron-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Lipid Lowering</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Cardiovascular</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Anti-Histamines</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Anti-Diabetic</a></li>

                                       <!--<li class="nav-item"><a href="#" class="nav-link">Single Post <i class='bx bx-chevron-right'></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="single-blog-1.html" class="nav-link">Default</a></li>
        
                                                <li class="nav-item"><a href="single-blog-2.html" class="nav-link">With Video</a></li>
        
                                                <li class="nav-item"><a href="single-blog-3.html" class="nav-link">With Image Slider</a></li>
                                            </ul>
                                        </li>-->
                                    </ul>
                                </li>
								<li class="nav-item"><a href="{{ url('/about-us') }}" class="nav-link ">About Us</a></li>
								<li class="nav-item"><a href="#" class="nav-link ">Blogs</a></li>
                                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                            </ul>

                            <div class="others-option">
                                <div class="option-item">
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i class='bx bx-heart'></i></a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i class='bx bx-shopping-bag'></i><span>3</span></a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="search-btn-box">
                                        <i class="search-btn bx bx-search-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        
        <!-- Start Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->