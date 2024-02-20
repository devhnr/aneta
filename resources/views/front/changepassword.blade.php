@include('front.includes.header')


<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Change Password</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Change Password</li>
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
						<aside class="widget-area widget-left-sidebar">
                            <section class="widget widget_categories">
							
								<div class="row">
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="register-form">
                           
                            <form id="profile_form"  action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="text" class="form-control" placeholder="Enter Old Password" value="" name="">
                                            </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="text" class="form-control" placeholder="Enter New Password" value="" name="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="text" class="form-control" placeholder="Enter Confirm Password" value="" name="">
                                        </div>
                                    </div>

                                  

                                </div>

                               
                                
                                
                                <button type="button" class="btn btn-primary"    >Update</button>

                            
                            </form>
                        </div>
                    </div>
                </div>
								
							</section>	
                        </aside>
					</div>
			</div>
		</div>
	</section>
@include('front.includes.footer')

<script>
   

</script>
