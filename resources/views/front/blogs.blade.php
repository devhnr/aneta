@include('front.includes.header')
<style>
    .pagination .active .page-link{background-color: #3D9630 !important;
    border-color: #3D9630 !important;}
    .pagination  .page-link{color: #3D9630 !important;}
    .page-item.active .page-link{color: #FFF !important;}
    </style>
<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Blog</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

	 <!-- Start Blog Area -->
     @if(isset($blog) && !empty($blog))
        <section class="blog-area ptb-70">
            <div class="container">
                <div class="row">
                    @foreach($blog as $blog_data)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="{{ url('/blog-details/'.$blog_data->page_url) }}" class="d-block"><img src="{{asset('public/upload/blog/list_image/large/'.$blog_data->list_image) }}" alt="image"></a>
                            </div>

                            <div class="post-content">
                                <h3><a href="{{ url('/blog-details/'.$blog_data->page_url) }}">{{$blog_data->title}}</a></h3>
                                <ul class="post-meta align-items-center d-flex">
                                    <li>
                                        <div class="flex align-items-center">
                                            <img src="{{asset('public/upload/blog/user_image/large/'.$blog_data->user_image) }}" alt="image">
                                            <a href=""{{ url('/blog-details/'.$blog_data->page_url) }}">{{$blog_data->name}}</a>
                                        </div>
                                    </li>
                                    <li>{{$blog_data->date}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
{{-- 
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/img/blog/blog-img2.jpg')}}" alt="image"></a>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">You have to wash your hands for 20 seconds to keep yourself free</a></h3>
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

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post">
                            <div class="post-image">
                                <a href="#" class="d-block"><img src="{{asset('public/site/assets/img/blog/blog-img3.jpg')}}" alt="image"></a>
                            </div>

                            <div class="post-content">
                                <h3><a href="#">It is very important to wear proper clothing to keep yourself free</a></h3>
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
                    </div> --}}

                    {!! $blog->appends($_GET)->render("pagination::bootstrap-4") !!}

                    {{-- <div class="col-lg-12 col-md-12">
                        <div class="pagination-area text-center">
                            <a href="#" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        @endif
        <!-- End Blog Area -->
@include('front.includes.footer')
