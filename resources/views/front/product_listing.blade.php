@include('front.includes.header')

<style>
    .show {display: block !Important;}
</style>
 <section class="shopping-left-side-bar">
            @php
               //echo "<pre>";print_r($all_product_details['links']);echo "</pre>";exit;
            @endphp
           
           
           
            <div class="container">
                <div class="row">
                    <div class="col-12 margin-30px-bottom">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="v-filter-dropdown">
                                      <button onclick="myFunction()" class="btn dropbtn">Filter by Category <i class="feather icon-feather-chevron-down"></i></button>
                                      <div id="myDropdown" class="dropdown-content">
                                       <div class=" wow animate__fadeIn">
                                            <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">Filter by category</span>
                                            <ul class="list-style-07 filter-category">
                                                @if ($categories_data !='' && count($categories_data) > 0)
                                                    @foreach ($categories_data as $category)
                                                    <li><a href="{{ url('/product/'.$group_page_url.'/'.$category->page_url) }}">{{ $category->name }}</a><!--<span class="product-cb product-category-cb"></span> --><span class="item-qty">{{ $category->product_count }}</span></li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                      </div>
                                  
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="v-filter-dropdown">
                                   
                                      <button onclick="myFunction1()" class="btn dropbtn">Filter by Subcategory <i class="feather icon-feather-chevron-down"></i></button>
                                      <div id="myDropdown1" class="dropdown-content">
                                        <!-- start SubCategory Filter sidebar -->
                                            @if ($subcategory_data !='' && count($subcategory_data) > 0)
                                            <div class=" wow animate__fadeIn">
                                                <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">Filter by Subcategory</span>
                                                <ul class="list-style-07 filter-category">
                                                    @if ($subcategory_data !='' && count($subcategory_data) > 0)
                                                        @foreach ($subcategory_data as $subcategory)
                                                        <li><a href="{{ url('/product/'.$group_page_url.'/'.$subcategory->category_pageurl.'/'.$subcategory->page_url) }}">{{ $subcategory->name }}</a><span class="item-qty">{{ $subcategory->product_count }}</span></li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                            @endif
                        <!-- End SubCategory Filter sidebar -->
                                      </div>
                                  
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                    <form id="search_mini_form" name="search_mini_form" method="get">
                                        <div class="row">
                                <div class="col-lg-6">
                               <div class="v-filter-dropdown">
                                   
                                      <button onclick="myFunction2()" class="btn dropbtn">Filter by Color <i class="feather icon-feather-chevron-down"></i></button>
                                      <div id="myDropdown2" class="dropdown-content">
                                           
                                            @if ($colorsProducts !='' && count($colorsProducts) > 0)
                                        <div class="border-bottom border-color-medium-gray padding-1-rem-bottom margin-1-rem-bottom wow animate__fadeIn">
                                                <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">Filter by color</span>
                                                <ul class="list-style-07 filter-color">
                                                    @php
                                                         if($colorIds !=''){ 
                                                        $colourarray=explode(",",$colorIds); 
                                                    }else{ 
                                                        $colourarray=array(); 
                                                    } 
                                                    @endphp
                                                    @if ($colorsProducts !='' && count($colorsProducts) > 0)
                                                    @foreach ($colorsProducts as $colors)
                                                    <li><a href="javascript:void(0);"><input type="checkbox" name="colour[]" value="{{ $colors->id }}" onclick="allfilter1()" @php if(in_array($colors->id,$colourarray)){ echo "checked"; } @endphp/>&nbsp;&nbsp;<span class="product-cb paroduct-color-cb" style="background-color:#{{ $colors->color_code }}"></span>{{ $colors->colorname }}</a><span class="item-qty">{{ $colors->product_count }}</span>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                    {{-- <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#657fa8"></span>Prussian blue</a><span class="item-qty">03</span></li>
                                                    <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#936f5e"></span>Light brown</a><span class="item-qty">15</span></li>
                                                    <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#97a27f"></span>Parrot green</a><span class="item-qty">40</span></li>
                                                    <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#b95b5b"></span>Dark orange</a><span class="item-qty">29</span></li>
                                                    <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#b7b5b5"></span>Slate blue</a><span class="item-qty">35</span></li> --}}
                                                </ul>
                                               
                                            </div>
                                            @endif
                                         
                                            
                                        
                                          </div>
                                  
                                </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="v-filter-dropdown">
                                   
                                      <button onclick="myFunctionprice()" class="btn dropbtn">Filter by Price <i class="feather icon-feather-chevron-down"></i></button>
                                      <div id="myDropdownprice" class="dropdown-content">
                                           
                                           <div class=" padding-1-rem-bottom  wow animate__fadeIn">
                                                <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">Filter by price</span>
                                                <span class="price-filter d-block margin-10px-top"></span>
                                                <div class="price-filter-details">
                                                    <button type="submit" class="btn-filter btn" onclick="sort_price_filter()">Filter</button>
                                                    <span class="price-filter-amount">
                                                        <label class="mb-0" for="price-amount">Price:</label>
                                                        <input type="text" class="price-amount mb-0" id="price-amount" readonly>
                                                        <input type="hidden" class="mb-0" id="amount_start" name="start_price">
                                                        <input type="hidden" class="mb-0" id="amount_end" name="end_price">
                                                    </span>
                    
                                                    <input type="hidden" name="max_price" id="max_price" value="{{ $max_price }}">
                                                    <input type="hidden" name="filter_price_start" id="filter_price_start" value="{{ $filter_price_start }}">
                                                    <input type="hidden" name="filter_price_end" id="filter_price_end" value="{{ $filter_price_end }}">
                                                    <input type="hidden" name="sort_by" id="sort_by">
                                                </div>
                                            </div>
                                            
                                        
                                          </div>
</div>
                                          </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                            
                            <div class="col-lg-3">
                                <!--<div class="v-filter-dropdown">-->
                                   
                                <!--      <button onclick="myFunction3()" class="btn dropbtn">Filter by Price <i class="feather icon-feather-chevron-down"></i></button>-->
                                <!--      <div id="myDropdown3" class="dropdown-content">-->
                                <!--            <form id="search_mini_form" name="search_mini_form" method="get">-->
                                           
                                           
                                <!--           <div class=" padding-1-rem-bottom  wow animate__fadeIn">-->
                                <!--                <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">Filter by price</span>-->
                                <!--                <span class="price-filter d-block margin-10px-top"></span>-->
                                <!--                <div class="price-filter-details">-->
                                <!--                    <button type="submit" class="btn-filter btn" onclick="sort_price_filter()">Filter</button>-->
                                <!--                    <span class="price-filter-amount">-->
                                <!--                        <label class="mb-0" for="price-amount">Price:</label>-->
                                <!--                        <input type="text" class="price-amount mb-0" id="price-amount" readonly>-->
                                <!--                        <input type="hidden" class="mb-0" id="amount_start" name="start_price">-->
                                <!--                        <input type="hidden" class="mb-0" id="amount_end" name="end_price">-->
                                <!--                    </span>-->
                    
                                <!--                    <input type="hidden" name="max_price" id="max_price" value="{{ $max_price }}">-->
                                <!--                    <input type="hidden" name="filter_price_start" id="filter_price_start" value="{{ $filter_price_start }}">-->
                                <!--                    <input type="hidden" name="filter_price_end" id="filter_price_end" value="{{ $filter_price_end }}">-->
                                <!--                    <input type="hidden" name="sort_by" id="sort_by">-->
                                <!--                </div>-->
                                <!--            </div>-->
                                            
                                <!--        </form>-->
                                <!--          </div>-->
                                  
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-md-12 shopping-content  sm-margin-30px-bottom">
                       
                        <div class="d-none d-lg-block">
                            <div class="row ">
                                <div class="col-md-9">
                                <div class="pdt-listing-title">
                                    <h6>{{ $banner_title }}</h6>
                                </div>
                                </div>
                                <div class="col-md-3 ">
                                <select name="cars" id="cars" class="w-100" onchange="sort_by()">
                                   <!--  <option value="volvo">Sort by popularity</option>
                                    <option value="saab">Sort by average rating</option> -->
                                    <option>Sort by</option>
                                    <option value="latest" @if($sort_by == 'latest') {{ 'selected' }} @endif>Sort by latest</option>
                                    <option value="low_to_high" @if($sort_by == 'low_to_high') {{ 'selected' }} @endif>Sort by price: low to high</option>
                                    <option value="high_to_low" @if($sort_by == 'high_to_low') {{ 'selected' }} @endif>Sort by price: high to low</option>
                                  </select>
                            </div></div>
                        </div>
                        @if(isset($all_product_details) && count($all_product_details) > 0)
                        <ul class="product-listing shop-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-4col md-grid-4col sm-grid-2col xs-grid-2col gutter-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start shop item -->
                            @foreach($all_product_details as $all_product)
                            @php
                                $Base_image = DB::table('product_image')
                                           ->where('pid', $all_product->id)
                                           ->where('baseimage', 1)
                                           ->first();
                                $Hover_image = DB::table('product_image')
                                            ->where('pid', $all_product->id)
                                            ->where('baseimageHover', 1)
                                            ->first();
                                //echo "<pre>";print_r($Hover_image);echo "</pre>";
                            @endphp
                            <li class="grid-item wow animate__fadeIn">
                                  <a href="{{url('product-detail/' . $all_product->page_url)}}">
                                <div class="product-box margin-25px-bottom xs-margin-15px-bottom">
                                   
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                     
                                            @if($Base_image != '')
                                            <img class="default-image" src="{{asset('public/upload/product/large/'.$Base_image->image)}}" alt=""/>
                                            @else
                                            <img class="default-image" src="{{asset('public/upload/product/large/no-image.png')}}" alt=""/>
                                            @endif
                                            @if($Hover_image != '')
                                            <img class="hover-image" src="{{asset('public/upload/product/large/'.$Hover_image->image)}}" alt=""/>
                                            @else
                                            <img class="hover-image" src="{{asset('public/upload/product/large/no-image.png')}}" alt=""/>
                                            @endif
                                            <div class="pdt-tags">
                                                @if($all_product->sale_product == 1)
                                                <span class="product-badge green">sale</span>
                                                @endif
                                                @if($all_product->new_product == 1)
                                                <span class="product-badge red">New</span>
                                                @endif
                                                @if($all_product->hot_product == 1)
                                                <span class="product-badge orange">Hot</span>
                                                @endif
                                            </div>
                                    
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-30px-tb">
                                            <!-- <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a> -->
                                            @php if(Session::get('userdata') != ''){ 

                                                $is_wishlist = Helper::check_wishlist($all_product->id);

                                                if($is_wishlist == "1"){
                                                    $icon_class = 'fa-heart';
                                                }else{
                                                    $icon_class = 'fa-heart-o';
                                                }
                                            @endphp
                                            <a href="javascript:void(0);" onclick="wishlist_data('{{ $all_product->id }}')" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa {{ $icon_class }}"></i></a>
                                            @php }else{ @endphp
                                            <a href="{{ route('signin')}}" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            @php } @endphp
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
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
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="{{url('product-detail/' . $all_product->page_url)}}" class="text-extra-dark-gray font-weight-500 d-inline-block">{{ $all_product->name }}</a>
                                        
                                        
                                        @if($minPrice != '')
                                        <div class="product-price text-medium">
                                            @if($disc_price != '0')
                                            <del>&#8377;{{ $minPrice }}</del>
                                            &#8377;{{ $disc_price }}
                                            @else
                                            &#8377;{{ $minPrice }}
                                            @endif
                                            </div>
                                        @endif
                                    </div>
                                    <!-- end product footer -->
                                </div>
                                </a>
                            </li>
                            @endforeach
                            <!-- end shop item -->
                        </ul>
                        @else
                        <ul class="product-listing shop-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                            {{ 'No Product Available' }}
                        </ul>
                        @endif
                        {!! $all_product_details->appends($_GET)->render("pagination::bootstrap-4") !!}
                        
                    </div>
                    <!-- start Category Filter sidebar -->
                
                </div>
            </div>
           
        </section>
        <!-- end section -->
        <!--mobile sort sec-->
         <section class="p-0 filter-sticky">
            <div class="container-fluid filter-content  d-lg-none d-block">
                <div class="row">
                    <div class="col-6 col-xl-6 p-0">
                        <button class="btn btn-filter w-100 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Sort By</button>
<div class="offcanvas offcanvas-bottom sort-by" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    <ul class="list-style-07 sort-by-filter">
        <li><a href="#"><span class="sort-by-cb sort-by-category-cb"></span>Sort by popularity</a></li>
        <li><a href="#"><span class="sort-by-cb sort-by-category-cb"></span>Sort by average rating</a></li>
        <li><a href="#"><span class="sort-by-cb sort-by-category-cb"></span>Sort by average rating</a></li>
        <li><a href="#"><span class="sort-by-cb sort-by-category-cb"></span>Sort by price: low to high</a></li>
        <li><a href="#"><span class="sort-by-cb sort-by-category-cb"></span>Sort by price: high to low</a></li>
    </ul>
  </div>
</div>
                    </div>
                    <div class="col-6 col-xl-6 p-0">
                        <button class="btn btn-filter w-100 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom1">Filter By</button>
<div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel1">
  <!-- <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel1"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div> -->
  <div class="offcanvas-body ">
    <aside class="col-12 col-lg-3 col-md-4 shopping-sidebar">
        <div class="border-bottom border-color-medium-gray padding-3-rem-bottom margin-3-rem-bottom wow animate__fadeIn px-4">
            <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Filter by category</span>
            <ul class="list-style-07 filter-category">
                @if ($categories_data !='' && count($categories_data) > 0)
                @foreach ($categories_data as $category)
                <li><a href="{{ url('/product/'.$group_page_url.'/'.$category->page_url) }}">{{ $category->name }}</a>
                    <!--<span class="product-cb product-category-cb"></span> -->
                    <span class="item-qty">{{ $category->product_count }}</span></li>
                @endforeach
                @endif
            </ul>
        </div>
        @if ($subcategory_data !='' && count($subcategory_data) > 0)
        <div class="border-bottom border-color-medium-gray padding-3-rem-bottom margin-3-rem-bottom wow animate__fadeIn px-4">
            <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Filter by Subcategory</span>
            <ul class="list-style-07 filter-category">
                @if ($subcategory_data !='' && count($subcategory_data) > 0)
                @foreach ($subcategory_data as $subcategory)
                    <li><a href="{{ url('/product/'.$group_page_url.'/'.$subcategory->category_pageurl.'/'.$subcategory->page_url) }}">{{ $subcategory->name }}</a><span class="item-qty">{{ $subcategory->product_count }}</span></li>
                    @endforeach
                @endif
            </ul>
        </div>
        @endif
        <div class="border-bottom border-color-medium-gray padding-3-rem-bottom margin-3-rem-bottom wow animate__fadeIn px-4">
            <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Filter by color</span>
            <ul class="list-style-07 filter-color">
                @php
                    if($colorIds !=''){ 
                        $colourarray=explode(",",$colorIds); 
                    }else{ 
                        $colourarray=array(); 
                    } 
                @endphp
                @if ($colorsProducts !='' && count($colorsProducts) > 0)
                @foreach ($colorsProducts as $colors)
                <li><a href="javascript:void(0);"><input type="checkbox" name="colour[]" value="{{ $colors->id }}" onclick="allfilter1()" @php if(in_array($colors->id,$colourarray)){ echo "checked"; } @endphp/>&nbsp;&nbsp;<span class="product-cb paroduct-color-cb" style="background-color:{{ $colors->color_code }}"></span>{{ $colors->colorname }}</a><span class="item-qty">{{ $colors->product_count }}</span></li>
                @endforeach
                @endif
            </ul>
        </div>
        <div class="padding-3-rem-bottom  wow animate__fadeIn px-4">
            <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Filter by price</span>
            <span class="price-filter d-block margin-10px-top"></span>
            <div class="price-filter-details">
                <button type="submit" class="btn-filter btn" onclick="sort_price_filter()">Filter</button>
                    <span class="price-filter-amount">
                        <label class="mb-0" for="price-amount">Price:</label>
                        <input type="text" class="price-amount mb-0" id="price-amount" readonly>
                        <input type="hidden" class="mb-0" id="amount_start" name="start_price">
                        <input type="hidden" class="mb-0" id="amount_end" name="end_price">
                    </span>

                    <input type="hidden" name="max_price" id="max_price" value="{{ $max_price }}">
                    <input type="hidden" name="filter_price_start" id="filter_price_start" value="{{ $filter_price_start }}">
                    <input type="hidden" name="filter_price_end" id="filter_price_end" value="{{ $filter_price_end }}">
                    <input type="hidden" name="sort_by" id="sort_by">
            </div>
        </div>
        <div class="">
            <div class="row">
                <div class="col-6 col-xl-6 p-0 ">
    
                    <button class=" btn btn-filter w-100" type="button" data-bs-dismiss="offcanvas" >Close</button>
    
                </div>
                <div class="col-6 col-xl-6 p-0">
    
                    <button class="btn btn-filter w-100">Apply</button>
    
                </div>
            </div>
        </div>
        
    </aside>
  </div>
</div>
                    </div>
                </div>
            </div>
            {{-- <form id="sortFilter">
                <input type="hidden" name="sort_by" id="sort_by">
            </form> --}}

            {{-- <form id="categoryFilter">
                <input type="hidden" name="max_price" id="max_price" value="{{ $max_price }}">
                <input type="hidden" name="filter_price_start" id="filter_price_start" value="{{ $filter_price_start }}">
                <input type="hidden" name="filter_price_end" id="filter_price_end" value="{{ $filter_price_end }}">
            </form> --}}
        </section>
@include('front.includes.footer')
<script type="text/javascript">
     function sort_by(){
        var sort_by = $("#cars").val();
        // alert(sort_by);
        $("#sort_by").val(sort_by);
        // $("#sortFilter").submit();
        document.search_mini_form.submit();
     }

     function sort_price_filter() {
        var lowAmount = $("#amount_start").val();
        var highAmount = $("#amount_end").val();
        var max_price = $("#max_price").val();

        $("#filter_price_start").val(lowAmount);
        $("#filter_price_end").val(highAmount);
        $("#max_price").val(max_price);

        // $("#categoryFilter").submit();
        document.search_mini_form.submit();
    }
    function allfilter1() {
        //alert('test');
        document.search_mini_form.submit();
	}
</script>

<script>
    function wishlist_data(product_id) {
         // alert(product_id);return false;
        $.ajax({
            type: 'POST',
            url: "{{ url('add-to-wishlist') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "product_id": product_id

            },
            success: function(msg) {
                if (msg == '1') {
                    $("#message_succsess").css("display", "block", );
                    $("#message_succsess").css("text-align", "center");
                    $("#message_succsess").css("background-color", "#00cccc");
                    $("#message_succsess").css("color", "white");
                    $("#message_succsess").addClass("success");
                    $('#message_succsess').show().delay(0).fadeIn('slow');
                    $('#message_succsess').hide().delay(2000).fadeOut('slow');
                    $("#message_succsess").html(
                        "<i class='fa fa-check'></i>Product has been added to your Wishlist.");

                    $(".wishlist-btn a i").addClass("active");
                    // $('html, body').animate({
                    //     scrollTop: $('#message_succsess').offset().top - 1000
                    // }, 1000);
                    setTimeout(function() {
                        document.location.reload()
                    }, 2000);

                } else {
                    $("#message_error").css("display", "block");
                    $("#message_error").css("text-align", "center");
                    $('#message_error').show().delay(0).fadeIn('slow');
                    $('#message_error').hide().delay(2000).fadeOut('slow');
                    // $('html, body').animate({
                    //     scrollTop: $('#message_error').offset().top - 1000
                    // }, 1000);
                    $("#message_error").html(
                        "<i class='fa fa-check'></i>Product is already in your wishlist.");
                }

            }


        });

    }
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns1 = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns1.length; i++) {
      var openDropdown = dropdowns1[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}

function myFunctionprice() {
  document.getElementById("myDropdownprice").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns2 = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns2.length; i++) {
      var openDropdown = dropdowns2[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>