@include('front.includes.header')
<style>
    .pagination .active .page-link {
        background-color: #3D9630 !important;
        border-color: #3D9630 !important;
    }

    .pagination .page-link {
        color: #3D9630 !important;
    }

    .page-item.active .page-link {
        color: #FFF !important;
    }

    .woocommerce-widget-area .brands-list-widget .brands-list-row li a::before {
        content: inherit
    }

    .woocommerce-widget-area .brands-list-widget .brands-list-row li a {
        padding-left: 0
    }

    .woocommerce-widget-area .brands-list-widget .brands-list-row li a.active {
        color: #3D9630
    }

    .woocommerce-widget-area .price-list-widget .collection-filter-by-price .irs--flat .irs-from::after,
    .woocommerce-widget-area .price-list-widget .collection-filter-by-price .irs--flat .irs-to::after,
    .woocommerce-widget-area .price-list-widget .collection-filter-by-price .irs--flat .irs-single::after {
        content: 'Rs'
    }

    .woocommerce-widget-area .price-list-widget .collection-filter-by-price .irs--flat .irs-from,
    .woocommerce-widget-area .price-list-widget .collection-filter-by-price .irs--flat .irs-to,
    .woocommerce-widget-area .price-list-widget .collection-filter-by-price .irs--flat .irs-single {
        padding: 1px 5px 1px 22.5px;
    }
</style>
<!-- Start Page Title Area -->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>{{ $categories_data->name }}</h1>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>{{ $categories_data->name }}</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Products Area -->
<section class="products-area ptb-70">
    <div class="container">
        <form id="search_mini_form" name="search_mini_form" method="get">
            {{-- <input type="hidden" name="search" value=""> --}}

            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="woocommerce-widget-area">
                        @if(Session::get('userdata') !='')
                        <div class="woocommerce-widget price-list-widget">
                            <h3 class="woocommerce-widget-title">Filter By Price</h3>
                           <div class="collection-filter-by-price" onclick="sort_price_filter()">
                                <input type="radio" name="filter_by_price" class="filter_by_price" id="price_1"
                                    value="10-100" @if ($filter_by_price == '10-100') checked @endif>&nbsp;Rs. 10 to
                                Rs.
                                100<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price" id="price_1"
                                    value="100-500" @if ($filter_by_price == '100-500') checked @endif>&nbsp;Rs. 100 to
                                Rs.
                                500<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price" id="price_2"
                                    value="500-1000" @if ($filter_by_price == '500-1000') checked @endif>&nbsp;Rs. 500 to
                                Rs.
                                1000<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price" id="price_3"
                                    value="1000-1500" @if ($filter_by_price == '1000-1500') checked @endif>&nbsp;Rs. 1000 to
                                Rs.
                                1500<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price"
                                    id="price_4"value="1500-2000"
                                    @if ($filter_by_price == '1500-2000') checked @endif>&nbsp;Rs.
                                1500 to Rs. 2000<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price"
                                    id="price_4"value="2000"
                                    @if ($filter_by_price == '2000') checked @endif>&nbsp;Rs.
                                Above Rs. 2000
                            </div>
                        </div>
                        @endif
              

                        @php
                            $categories = DB::table('categories')->orderBy('set_order')->get();
                        @endphp
                        <div class="woocommerce-widget brands-list-widget">
                            <h3 class="woocommerce-widget-title">Category</h3>

                            <ul class="brands-list-row">
                                @foreach ($categories as $categories_data)
                                    <li><a href="{{ url('/product/' . $categories_data->page_url) }}"
                                            class="@if (request()->segment(2) == $categories_data->page_url) {{ 'active' }} @endif">{{ $categories_data->name }}</a>
                                    </li>
                                @endforeach
                                {{-- <li><a href="#">Cardiovascular</a></li>
                                <li><a href="#">Anti-Histamines</a></li>
                                <li class="active"><a href="#">Anti-Diabetic</a></li> --}}
                            </ul>
                        </div>



                        <div class="woocommerce-widget best-seller-widget">
                            <h3 class="woocommerce-widget-title">Best Selling</h3>
                            @isset($best_seller_product)
                                @foreach ($best_seller_product as $best_seller)
                                    <article class="item">
                                        <a href="{{ url('product-detail/' . $best_seller->page_url) }}" class="thumb">
                                            <span class="fullimage cover" role="img">
                                                {{-- <img src="{{ asset('public/site/assets/images/NETAZOL-200-Camera-2.jpg') }}"
                                            alt="image"> --}} @if ($best_seller->base_image != '')
                                                    <img src="{{ asset('public/upload/product/small/' . $best_seller->base_image) }}"
                                                        alt="image">
                                                @else
                                                    <img src="{{ asset('public/upload/product/small/no-image.png') }}"
                                                        alt="image">
                                                @endif

                                            </span>
                                        </a>
                                        <div class="info">
                                            <h4 class="title usmall">
                                                <a href="{{ url('product-detail/' . $best_seller->page_url) }}">{{ $best_seller->name }}
                                                </a>
                                            </h4>
                                            @if(Session::get('userdata') !='')
                                            <span>Rs {{ $best_seller->min_price }}.00</span>
                                            @endif
                                            {{-- <div class="rating">
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            </div> --}}
                                        </div>
                                        <div class="clear"></div>
                                    </article>
                                @endforeach
                            @endisset

                            {{-- <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover" role="img"><img
                                            src="{{ asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg') }}"
                                            alt="image"></span>
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
                            </article> --}}

                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-12">
                    @if (isset($all_product_details) && count($all_product_details) > 0)
                        <div class="drodo-grid-sorting row align-items-center">
                            <div class="col-lg-6 col-md-6 result-count">
                                <p>We found <span class="count">{{ $productCount }}</span> products available for you
                                </p>

                                <span class="sub-title d-lg-none"><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#productsFilterModal"><i class='bx bx-filter-alt'></i>
                                        Filter</a></span>
                            </div>
                            @if(Session::get('userdata') !='')
                            <div class="col-lg-6 col-md-6 ordering">
                                <div class="select-box">
                                    <label>Sort By:</label>
                                    <select id="sort" name="sort" onchange="sort_by()">
                                        {{-- <option value="#">Default
                                        </option> --}}
                                        <option value="Latest"
                                            @if ($sort_by == 'Latest') {{ 'selected' }} @endif>Latest
                                        </option>
                                        <option value="low_to_high"
                                            @if ($sort_by == 'low_to_high') {{ 'selected' }} @endif>Price: low to
                                            high</option>
                                        <option value="high_to_low"
                                            @if ($sort_by == 'high_to_low') {{ 'selected' }} @endif>Price: high
                                            to
                                            low</option>
                                    </select>

                                    {{-- <input type="hidden" name="sort_by" class="sort_by" id="sort_by"> --}}

                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="row">

                            @foreach ($all_product_details as $all_product)
                                @php
                                    $Base_image = DB::table('product_image')
                                        ->where('pid', $all_product->id)
                                        ->where('baseimage', 1)
                                        ->first();

                                @endphp
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-products-box">
                                        <div class="image">
                                            <a href="{{ url('product-detail/' . $all_product->page_url) }}"
                                                class="d-block">
                                                @if ($Base_image != '')
                                                    <img src="{{ asset('public/upload/product/large/' . $Base_image->image) }}"
                                                        alt="image">
                                                @else
                                                    <img src="{{ asset('public/upload/product/large/no-image.png') }}"
                                                        alt="image">
                                                @endif

                                            </a>

                                            @php
                                                $ProductminPrice = $all_product->min_price;

                                                /*echo "<pre>";print_r($ProductminPrice);echo "</pre>";*/

                                            @endphp

                                            @if ($all_product->discount_type != '')
                                                @if ($all_product->discount_type == 0)
                                                    @php
                                                        $new_disc_price = ($ProductminPrice * $all_product->discount) / 100;

                                                        $new_price = $ProductminPrice - $new_disc_price;
                                                    @endphp
                                                @elseif($all_product->discount_type == 1)
                                                    @php
                                                        $new_price = $ProductminPrice - $all_product->discount;
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


                                            @if ($all_product->new_product == 1)
                                                <div class="new">New</div>
                                            @endif
                                            @if ($new_price != 0)
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
                                            <h3><a
                                                    href="{{ url('product-detail/' . $all_product->page_url) }}">{{ $all_product->name }}</a>
                                            </h3>
                                            <div class="price">
                                                @if(Session::get('userdata') !='')
                                                @if ($new_price != '0')
                                                    <span class="old-price">Rs {{ $ProductminPrice }}</span>
                                                    <span class="new-price">Rs {{ $new_price }}</span>
                                                @else
                                                    <span class="new-price">Rs {{ $ProductminPrice }}</span>
                                                @endif
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach













                            {!! $all_product_details->appends($_GET)->render('pagination::bootstrap-4') !!}

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
                    @else
                        {{ 'No Product' }}
                    @endif
                </div>
            </div>

        </form>
    </div>
</section>

 <!-- Start Products Filter Modal Area -->
 <div class="modal left fade productsFilterModal" id="productsFilterModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class='bx bx-x'></i> Close</span>
            </button>
            <form id="search_mini__mobile_form" name="search_mini__mobile_form" method="get">
            <div class="modal-body">
                <div class="woocommerce-widget-area">
                    @if(Session::get('userdata') !='')
                    <div class="woocommerce-widget price-list-widget">
                        <h3 class="woocommerce-widget-title">Filter By Price</h3>
                        <div class="collection-filter-by-price" onclick="sort_price_filter()">
                              <input type="radio" name="filter_by_price" class="filter_by_price" id="price_1"
                                    value="10-100" @if ($filter_by_price == '10-100') checked @endif>&nbsp;Rs. 10 to
                                Rs.
                                100<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price" id="price_1"
                                    value="100-500" @if ($filter_by_price == '100-500') checked @endif>&nbsp;Rs. 100 to
                                Rs.
                                500<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price" id="price_2"
                                    value="500-1000" @if ($filter_by_price == '500-1000') checked @endif>&nbsp;Rs. 500 to
                                Rs.
                                1000<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price" id="price_3"
                                    value="1000-1500" @if ($filter_by_price == '1000-1500') checked @endif>&nbsp;Rs. 1000 to
                                Rs.
                                1500<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price"
                                    id="price_4"value="1500-2000"
                                    @if ($filter_by_price == '1500-2000') checked @endif>&nbsp;Rs.
                                1500 to Rs. 2000<br>
                                <input type="radio" name="filter_by_price" class="filter_by_price"
                                    id="price_4"value="2000"
                                    @if ($filter_by_price == '2000') checked @endif>&nbsp;Rs.
                                Above Rs. 2000
                        </div>
                    </div>
                    @endif
                    
                    @php
                    $categories = DB::table('categories')->orderBy('set_order')->get();
                @endphp
                <div class="woocommerce-widget brands-list-widget">
                    <h3 class="woocommerce-widget-title">Category</h3>

                    <ul class="brands-list-row">
                        @foreach ($categories as $categories_data)
                            <li><a href="{{ url('/product/' . $categories_data->page_url) }}"
                                    class="@if (request()->segment(2) == $categories_data->page_url) {{ 'active' }} @endif">{{ $categories_data->name }}</a>
                            </li>
                        @endforeach
                       
                    </ul>
                </div>


                <div class="woocommerce-widget best-seller-widget">
                    <h3 class="woocommerce-widget-title">Best Selling</h3>
                    @isset($best_seller_product)
                        @foreach ($best_seller_product as $best_seller)
                            <article class="item">
                                <a href="{{ url('product-detail/' . $best_seller->page_url) }}" class="thumb">
                                    <span class="fullimage cover" role="img">
                                        {{-- <img src="{{ asset('public/site/assets/images/NETAZOL-200-Camera-2.jpg') }}"
                                    alt="image"> --}} @if ($best_seller->base_image != '')
                                            <img src="{{ asset('public/upload/product/small/' . $best_seller->base_image) }}"
                                                alt="image">
                                        @else
                                            <img src="{{ asset('public/upload/product/small/no-image.png') }}"
                                                alt="image">
                                        @endif

                                    </span>
                                </a>
                                <div class="info">
                                    <h4 class="title usmall">
                                        <a href="{{ url('product-detail/' . $best_seller->page_url) }}">{{ $best_seller->name }}
                                        </a>
                                    </h4>
                                    @if(Session::get('userdata') !='')
                                    <span>Rs {{ $best_seller->min_price }}.00</span>
                                    @endif
                                    {{-- <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div> --}}
                                </div>
                                <div class="clear"></div>
                            </article>
                        @endforeach
                    @endisset

                    {{-- <article class="item">
                        <a href="#" class="thumb">
                            <span class="fullimage cover" role="img"><img
                                    src="{{ asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg') }}"
                                    alt="image"></span>
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
                    </article> --}}

                </div>
                </div>
             
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Products Filter Modal Area -->
<!-- End Products Area -->
@include('front.includes.footer')

<script>
    function sort_by() {

        var sort_by = $("#sort").val();
        $(".sort_by").val(sort_by);
        document.search_mini_form.submit();

    }
</script>

<script>
    function sort_price_filter() {
        var lowAmount = $("input[name='filter_by_price']:checked").val();
        //  alert(lowAmount);
        document.search_mini_form.submit();
        document.search_mini__mobile_form.submit();
    }
</script>
