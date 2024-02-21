@include('front.includes.header')

<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Blog Details</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

	 <!-- Start Blog Details Area -->
     @if(isset($blog_detail) && !empty($blog_detail))
        <section class="blog-details-area ptb-70">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image">
                                @if($blog_detail->detail_image !='')
                                <img src="{{asset('public/upload/blog/detail_image/large/'.$blog_detail->detail_image) }}" alt="image">
                                @else
                                <img src="{{ asset('public/upload/blog/detail_image/large/no-image.png') }}" alt="image">
                                @endif
                            </div>

                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <span>Name</span>
                                            <a href="#">{{$blog_detail->name}}</a>
                                        </li>
                                       
                                        <li>
                                            <span>Date</span>
                                            {{$blog_detail->date}}
                                        </li>
                                    </ul>
                                </div>

                                <h3>{{$blog_detail->title}}</h3>

                                <p>{!! html_entity_decode ($blog_detail->description) !!}</p>

                               

                            
                        </div>
                        </div>
               

                    <!--<div class="col-lg-4 col-md-12">
                        <aside class="widget-area">
                            <section class="widget widget_search">
                                <h3 class="widget-title">Search</h3>

                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit"><i class="bx bx-search-alt"></i></button>
                                </form>
                            </section>

                            <section class="widget widget_drodo_posts_thumb">
                                <h3 class="widget-title">Popular Posts</h3>

                                <article class="item">
                                    <a href="#" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <span>June 10, 2021</span>
                                        <h4 class="title usmall"><a href="#">The Data Surrounding Higher Education</a></h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>

                                <article class="item">
                                    <a href="#" class="thumb">
                                        <span class="fullimage cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <span>June 21, 2021</span>
                                        <h4 class="title usmall"><a href="#">Conversion Rate the Sales Funnel Optimization</a></h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>

                                <article class="item">
                                    <a href="#" class="thumb">
                                        <span class="fullimage cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <span>June 30, 2021</span>
                                        <h4 class="title usmall"><a href="#">Business Data is changing the world’s Energy</a></h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>
                            </section>

                            <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    <li><a href="#">Design <span class="post-count">(03)</span></a></li>
                                    <li><a href="#">Lifestyle <span class="post-count">(05)</span></a></li>
                                    <li><a href="#">Script <span class="post-count">(10)</span></a></li>
                                    <li><a href="#">Device <span class="post-count">(08)</span></a></li>
                                    <li><a href="#">Tips <span class="post-count">(01)</span></a></li>
                                </ul>
                            </section>

                            <section class="widget widget_tag_cloud">
                                <h3 class="widget-title">Popular Tags</h3>

                                <div class="tagcloud">
                                    <a href="#">Business <span class="tag-link-count"> (3)</span></a>
                                    <a href="#">Design <span class="tag-link-count"> (3)</span></a>
                                    <a href="#">Aike <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                                </div>
                            </section>
                        </aside>
                    </div> -->
                </div>
            </div>
        </section>
        @endif
        <!-- End Blog Details Area -->
@include('front.includes.footer')
