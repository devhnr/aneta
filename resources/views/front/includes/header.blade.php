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
         <style>
            .valierror {
        background-color: #ee2e34;
        border-color: #ee2e34;
        color: #fff;
    }
    .alert-message {
        background-size: 40px 40px;
        background-image: linear-gradient(
    135deg, rgba(255, 255, 255, .05) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%, transparent 75%, transparent);
        /* box-shadow: inset 0 -1px 0 rgb(255 255 255 / 40%); */
        width: 100%;
        border: 0px solid;
        color: #fff;
        padding: 10px;
        
        animation: animate-bg 5s linear infinite;
        display: block;
        margin-bottom: 5px;
        top: 0;
    z-index: 9999;
    }
    .successmain {
        background-color: #09c6ab;
        border-color: #09c6ab;
    }
    .size_active {
        background: #ABABAB;
        color: #000;
        border: 1px solid #09c6ab !important;
    }
    .color_active {
        border: 1px solid #09c6ab !important;
    }
    .alert-message_cart {
        background-size: 40px 40px;
        background-image: linear-gradient(
    135deg, rgba(255, 255, 255, .05) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%, transparent 75%, transparent);
        width: 100%;
        border: 0px solid;
        color: #000;
        padding: 10px;
        animation: animate-bg 5s linear infinite;
    }
    .topalert_cart {
        z-index: 9999;
        text-align: center;
        padding: 10px;
        font-size: 18px;
        color: #fff !important;
        position: fixed;
        top: 0px;
    }
    .successcart {
        background-color: #09c6ab;
        border-color: #09c6ab;
    }    
    @media (min-width: 992px){
        .navbar-expand-lg .navbar-collapse {
        display: flex!important;
        flex-basis: auto;
        float: right;
        }    
    }
    .contact_successmain {
        background-color: #09c6ab;
        border-color: #09c6ab;
        z-index: 9999999;
        position: absolute;
    }
    .contact_successmain1 {
        background-color: #09c6ab;
        border-color: #09c6ab;
        z-index: 9999999;
        /*position: absolute;*/
    }
    .ui-menu{
        z-index: 3500 !important;
    }
     .ad-tag {
        position: absolute; left:initial;
        right: 12px;
        top: 4%;
    }
    </style>
    </head>

    <body>
        <div id="message_succsess" class="successmain alert-message topalert" style="text-align: center;display: none; position: fixed;"></div>
        <div id="message_error" class="valierror alert-message topalert" style="display:none;text-align: center;
        position: fixed;"></div>
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
                           <li><i class="fa fa-user-circle" style="color: #3D9630;"></i> <a href="{{url('/signin')}}">My Account</a></li>
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
                                        <li class="nav-item"><a href="{{ url('/product-list') }}" class="nav-link">Lipid Lowering</a></li>

                                        <li class="nav-item"><a href="{{ url('/product-list') }}" class="nav-link">Cardiovascular</a></li>

                                        <li class="nav-item"><a href="{{ url('/product-list') }}" class="nav-link">Anti-Histamines</a></li>

                                        <li class="nav-item"><a href="{{ url('/product-list') }}" class="nav-link">Anti-Diabetic</a></li>

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
                                <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                            </ul>

                            <div class="others-option">
                                <div class="option-item">
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i class='bx bx-heart'></i></a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <span id="header_cart_count">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingCartModal"><i class='bx bx-shopping-bag'></i><span>{{Cart::count()}}</span></a>
                                        </span>
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