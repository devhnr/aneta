@include('front.includes.header')

 <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Cart</h1>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

  <!-- Start Cart Area -->
        <section class="cart-area ptb-70">
            <div class="container">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="{{asset('public/site/assets/images/TELMANETA-CD-Camera-2.jpg')}}" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">TELMANETA CD</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">Rs 99.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">Rs 99.00</span>

                                        <a href="#" class="remove"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#">
                                            <img src="{{asset('public/site/assets/images/TELMANETA-CH-Camera-2.jpg')}}" alt="item">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="#">TELMANETA CH</a>
                                    </td>

                                    <td class="product-price">
                                        <span class="unit-amount">Rs 200.00</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                            <input type="text" min="1" value="1">
                                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">Rs 200.00</span>

                                        <a href="#" class="remove"><i class='bx bx-trash'></i></a>
                                    </td>
                                </tr>

                                

                                
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-7 col-md-7">
                                <div class="shopping-coupon-code">
                                    <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            </div>

                            <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                                <a href="#" class="default-btn"><i class="flaticon-view"></i> Update Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="cart-totals">
                        <h3>Cart Totals</h3>

                        <ul>
                            <li>Subtotal <span>Rs 200.00</span></li>
                            <li>Shipping <span>Rs 200.00</span></li>
                            <li>Total <span>Rs 200.00</span></li>
                        </ul>

                        <a href="#" class="default-btn"><i class="flaticon-trolley"></i> Proceed to Checkout</a>
                    </div>
                </form>
            </div>
        </section>
        <!-- End Cart Area -->
@include('front.includes.footer')
