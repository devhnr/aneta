<style>
.wishlist_account_name {
    margin-bottom: 10px;
    background-color: #fff;
    padding: 10px 15px;
    padding-left: 20px;
    box-shadow: 0 3px 10px rgb(0 0 0 / 13%);
}
.wishlist_account_name h5 {
    color: #6b1b4b;
    font-weight: 700;
    font-size: 18px;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}
.wishlist_account_name p {
    color: #7c7c7c;
    font-size: 12px;
    margin: 0;
}

.widget_categories ul li::before {display:none}
.widget_categories ul li a {width:100%}
.widget_categories ul li .post-count {float:right}
.forms-edition a {
    display: inline-block;
    font-size: 16px;
    color: #3D9630;
    /* font-family: 'Poppins', sans-serif; */
    padding: 0px 15px;
    font-weight: 600;
    float: right;
    text-decoration: none;
}
.custom-forms-label {
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
    color: #7c7c7c;
    font-family: 'Poppins', sans-serif;
    margin: 0px;
}
.mb-20{margin-bottom:20px}
</style>
<aside class="widget-area widget-left-sidebar">
                            


                            <section class="widget widget_categories">
                                <ul>
                                    <li><a href="{{url('/my-orders')}}">My Orders <span class="post-count"><img class="purchase_img" src="{{asset('public/site/assets/images/Vector-left.png')}}" data-no-retina=""></span></a></li>
                                    <li><a href="{{url('/wishlist')}}">My Wishlist <span class="post-count"><img class="purchase_img" src="{{asset('public/site/assets/images/Vector-left.png')}}" data-no-retina=""></span></a></li>
                                    <li><a href="{{url('/my-profile')}}">My Profile <span class="post-count"><img class="purchase_img" src="{{asset('public/site/assets/images/Vector-left.png')}}" data-no-retina=""></span></a></li>
                                    <li><a href="{{url('/changepassword')}}">Change Password <span class="post-count"><img class="purchase_img" src="{{asset('public/site/assets/images/Vector-left.png')}}" data-no-retina=""></span></a></li>
                                    <li><a href="{{url('/signout')}}">Logout <span class="post-count"><img class="purchase_img" src="{{asset('public/site/assets/images/Vector-left.png')}}" data-no-retina=""></span></a></li>
                                </ul>
                            </section>

                        </aside>