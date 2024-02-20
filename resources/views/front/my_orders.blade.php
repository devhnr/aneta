@include('front.includes.header')
<style>
.custom-form-address {
    margin-bottom: 30px;
}
.custom-form-address h5 {
    font-weight: 600;
    font-size: 16px;
    line-height: 24px;
    font-family: 'Poppins', sans-serif;
    color: #282828;
    margin: 0;
}
.custom-form-address h6 {
    font-family: 'Poppins', sans-serif;
    color: #7c7c7c;
    font-size: 15px;
    font-weight: 400;
    line-height: 27px;
    margin: 0;
}
.custom-form-address-action {
    margin: 0px;
    padding: 0px;
    list-style: none;
    display: flex;
}
.custom-form-address-action li a {
    font-family: 'Poppins', sans-serif;
    color: #000;
    font-size: 14px;
    line-height: 25.2px;
    font-weight: 400;
    text-decoration: none;
    margin-right: 20px;
}

.purchases_top_part {
    margin-bottom: 10px;
    padding-bottom: 30px;
    border-bottom: 1px solid #cecece;
}

.store_order_no_ship h6 {
    margin: 0;
    padding: 0;
    font-weight: 700;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    color: #282828;
    margin-bottom: 0px;
}

.store_order_no_ship p {
    color: #7c7c7c;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    margin: 0;
    padding: 0;
}

.purchases_item_box .puchases_item_inner ul.purchaseul {
    margin: 0;
    padding: 0;
    display: flex;
}
.purchases_item_box .puchases_item_inner ul.purchaseul li.purchaseli {
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline-block;
    vertical-align: top;
    margin-right: 20px;
}
.purchases_item_box .puchases_item_inner ul.purchaseul li.purchaseli:last-child {
    margin: 0;
}
.purchases_item_box .puchases_item_inner .purchase_info h5 {
    margin: 0;
    padding: 0;
    font-weight: 400;
    font-size: 18px;
    color: #282828;
    padding-bottom: 10px;
}

.purchases_item_box .puchases_item_inner .purchase_info .price {
    margin: 0;
    padding: 0;
    font-weight: 400;
    font-size: 16px;
    color: #282828;
}
.purchases_item_box .puchases_item_inner .purchase_info .size_color_qty ul {
    margin: 0;
    padding: 0;
    margin-top: 10px;
    margin-bottom: 7px;
}

.purchases_item_box .puchases_item_inner .purchase_info .size_color_qty ul li {
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline-block;
    font-size: 14px;
    color: #7c7c7c;
    /* border-right: 1px solid #cecece; */
    padding: 0px 10px;
    padding-left: 0;
}

.purchases_item_box .puchases_item_inner .purchase_info p {
    font-size: 14px;
    color: #7c7c7c;
    margin: 0;
    padding: 0;
}

.widget-area.widget-left-sidebar{margin-bottom: 50px;}
</style>

<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>My Orders</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>My Orders</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

	<section class="blog-area pb-40 pt-40">
        <div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
				
					@include('front.sidebar_profile')
                        
                    </div>
					
					<div class="col-lg-8 col-md-12">
						
										@php 
                @endphp
                @if($orders_details != '')

                @foreach($orders_details as $order_data)
				
				<aside class="widget-area widget-left-sidebar">
                            <section class="widget widget_categories">
								<div class="col-lg-12 mb-20">
									<div class="custom-form-text">
               
                <div class="my_purchases_box_inner custom-back-g-white">
                  <div class="purchases_top_part">
                    <div class="row">
                      <div class="col-lg-3 col-6">
                        <div class="store_order_no_ship">
                          <h6>Order No.</h6>
                          <p>{{ $order_data->order_number }}</p>
                        </div>
                      </div>
                      <div class="col-lg-2 col-6">
                        <div class="store_order_no_ship">
                          <h6>Order Placed</h6>
                          @php 
                            $timestamp = strtotime($order_data->created_at);
                            $formattedDate = date('M d, Y', $timestamp);
                          @endphp
                          <p>{{$formattedDate}}</p>
                        </div>
                      </div>
                      <div class="col-lg-2 col-6">
                        <div class="store_order_no_ship">
                          <h6>Total</h6>
                          <p>Rs. {{$order_data->order_total}}</p>
                        </div>
                      </div>
                      <div class="col-lg-2 col-6">
                        <div class="store_order_no_ship">
                          <h6>Ship To</h6>
                          <p>{{$order_data->first_name.' '.$order_data->last_name}}</p>
                        </div>
                      </div>
                      <div class="col-lg-3 col-6">
                        <div class="track_order">
						@if($order_data->shipment_order_id != '')
                          <a href="{{url('/track-order/'.$order_data->order_id)}}">Track Order</a>
						@endif
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="purchases_bottom_part">
                    <div class="purchases_item_box">
                      <div class="row">
                        @foreach($order_data->items as $item)
                      <div class="col-lg-6">
                        <div class="puchases_item_inner">
                          <ul class="purchaseul">
                            <li class="purchaseli">
                              <div class="purchase_img">
                                <!-- <img src="{{asset('public/site/images/purchase-item.jpg')}}"> -->
                                @if($item->base_image != '')
                                  <img src="{{ url('public/upload/product/medium/' . $item->base_image) }}">
                                @else
                                  <img src="{{ url('public/upload/product/medium/no-image.png') }}">
                                @endif
                              </div>
                            </li>
                            <li class="purchaseli">
                              <div class="purchase_info">
                                <h5>{{$item->order_item_name}}</h5>
								@if($item->product_discount_amount != 0 && $item->product_discount_amount != '')
                                <span class="price">Rs. {{$item->product_discount_amount}}</span>
								@else
									<span class="price">Rs. {{$item->product_item_price}}</span>
								@endif
                                <div class="size_color_qty">
                                  <ul>
                                    <li>Size: {{$item->size_name}}</li>
                                    <li>Qty: {{$item->product_quantity}}</li>
                                    <li>Package Detail: {{$item->package_detail}}</li>
                                    
                                  </ul>
                                </div>
                                {{-- <p>Ordered On: {{$formattedDate}}</p> --}}
                                <!-- <div class="cancel_return"><span>Cancel Item</span>
                              </div> -->
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      @endforeach
                      <!-- <div class="col-lg-6">
                        <div class="puchases_item_inner">
                          <ul class="purchaseul">
                            <li class="purchaseli">
                              <div class="purchase_img">
                                <img src="{{asset('public/site/images/purchase-item.jpg')}}">
                              </div>
                            </li>
                            <li class="purchaseli">
                              <div class="purchase_info">
                                <h5>Amet minim mollit</h5>
                                <span class="price">&#8377; 1694</span>
                                <div class="size_color_qty">
                                  <ul>
                                    <li>Size: L</li>
                                    <li>Colour: Black</li>
                                    <li>Qty: 1</li>
                                  </ul>
                                </div>
                                <p>Ordered On: Mar 13, 2021</p>
                                <div class="cancel_return"><span>Return Order</span>
                                <p>Return acceptable till: Jul 22, 2020</p>
                                <p>Read our <a href="#">Return Policy</a></p>
                              </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
                
              </div>
			  </div>
								</div>
								
								
								
								
								
							</section>
                        </aside>

              @endforeach
             
              @endif
									
						
						
					</div>
			</div>
		</div>
	</section>
@include('front.includes.footer')
