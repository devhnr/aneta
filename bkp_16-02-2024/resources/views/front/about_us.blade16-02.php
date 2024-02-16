@include('front.includes.header')
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>About Us</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title">We believe in less but better</span>
                    <h2>WELCOME TO ANETA
                        THE BEST MEDICINE MANUFACTURER
                        OF GLOBE</h2>
                    <p>Our capacity to scale up and commercialise with our expertise in Product Development, Drug Delivery System Development, and Collaborative Working Partnerships can assist streamline the challenging process of bringing innovations to the industry rapidly. We are assured to offer superior formulations because of our solid technological foundation, world-class infrastructure and resources.</p>
                    <div class="quotes-box">
                        <span>A message from our founders</span>
                        <p>We are committed to Innovation, Quality, and Services which keep up motivated. </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="{{asset('public/site/assets/img/about/04-Quality.jpg')}}" alt="image">

                    <div class="shape">
                        <img src="{{asset('public/site/assets/img/about/about-shape1.png')}}" alt="image">
                        <img src="{{asset('public/site/assets/img/about/about-shape2.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Funfacts Area -->
<section class="funfacts-area pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-funfacts-box">
                    <h3>10M</h3>
                    <span>Happy Clients</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-funfacts-box">
                    <h3>20M</h3>
                    <span>Global Customers</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-funfacts-box">
                    <h3>99+</h3>
                    <span>Experts Employee</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                <div class="single-funfacts-box">
                    <h3>30+</h3>
                    <span>Awards Win</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Funfacts Area -->

<!-- Start Doctors Area -->
<section class="doctors-area pt-70 pb-40">
    <div class="container">
        <div class="section-title">
            <h2>Meet Our Team</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-doctors-box">
                    <div class="image">
                        <img src="{{asset('public/site/assets/img/doctors/Vasant-Patel-New.jpg')}}" alt="image">

                    </div>

                    <div class="content">
                        <h3>Vasant Patel</h3>
                        <span>Director</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-doctors-box">
                    <div class="image">
                        <img src="{{asset('public/site/assets/img/doctors/Nitin-Patel-Director.png')}}" alt="image">

                    </div>

                    <div class="content">
                        <h3>Nitin Patel</h3>
                        <span>Director</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-doctors-box">
                    <div class="image">
                        <img src="{{asset('public/site/assets/img/doctors/C-M-Patel-New.jpg')}}" alt="image">

                    </div>

                    <div class="content">
                        <h3>C. M. Patel</h3>
                        <span>Head - Sales And Marketing</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-doctors-box">
                    <div class="image">
                        <img src="{{asset('public/site/assets/img/doctors/Santosh-Mane-AGM.jpg')}}" alt="image">

                    </div>

                    <div class="content">
                        <h3>Santosh Mane</h3>
                        <span>Assistant General Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Doctors Area -->

@include('front.includes.footer')
