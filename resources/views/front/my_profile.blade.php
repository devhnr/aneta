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
</style>

<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>My Profile</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>My Profile</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->
	@if(isset($user_data) && !empty($user_data))
	<section class="blog-area pb-40 pt-40">
        <div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
				
					@include('front.sidebar_profile')
                        
                    </div>
					
					<div class="col-lg-8 col-md-12">
						<aside class="widget-area widget-left-sidebar">
                            <section class="widget widget_categories">
								<div class="col-lg-12 mb-20">
									<div class="custom-form-text">
										<h4>Profile <span class="forms-edition">
												<a href="{{ url('/edit-profile') }}"><i class="fa fa-pencil"></i>
													Edit</a></span></h4>
									</div>
								</div>
							
							<div class="row">
								<h5>Shipping info</h5>
								
								<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Company Name</p>
											<h6 class="custom-forms-text">{{$user_data->vendor_name}}</h6>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Address</p>
											<h6 class="custom-forms-text">{{$user_data->address}}</h6>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Pincode</p>
											<h6 class="custom-forms-text">{{$user_data->pincode}}</h6>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Contact Person</p>
											<h6 class="custom-forms-text">{{$user_data->name}}</h6>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Contact No</p>
											<h6 class="custom-forms-text">{{$user_data->mobile}}</h6>
										</div>
									</div>
									
									<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Email ID</p>
											<h6 class="custom-forms-text">{{$user_data->email}}</h6>
										</div>
									</div>
							</div>
								
							
							<div class="row">
							@if($user_data->owner1_name || 
								$user_data->owner1_address ||
								$user_data->owner1_pincode ||
								$user_data->owner1_pincode ||
								$user_data->owner1_contact_no || 
								$user_data->owner2_name || 
								$user_data->owner2_address ||
								$user_data->owner2_pincode ||
								$user_data->owner2_pincode ||
								$user_data->owner2_contact_no !="")
								<h5>Company info</h5>
									<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Owner Name 1</p>
											<h6 class="custom-forms-text">{{$user_data->owner1_name}}</h6>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Address</p>
											<h6 class="custom-forms-text">{{$user_data->owner1_address}}</h6>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Pincode</p>
											<h6 class="custom-forms-text">{{$user_data->owner1_pincode}}</h6>
										</div>
									</div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Contact No</p>
											<h6 class="custom-forms-text">{{$user_data->owner1_contact_no}}</h6>
										</div>
									</div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Owner Name 2</p>
											<h6 class="custom-forms-text">{{$user_data->owner2_name}}</h6>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Address</p>
											<h6 class="custom-forms-text">{{$user_data->owner2_address}}</h6>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Pincode</p>
											<h6 class="custom-forms-text">{{$user_data->owner2_pincode}}</h6>
										</div>
									</div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Contact No</p>
											<h6 class="custom-forms-text">{{$user_data->owner2_contact_no}}</h6>
										</div>
									</div>
									@endif
								</div>
								
								<div class="row">
								<h5>Document info</h5>
									<div class="col-lg-6 col-md-6 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">GST Certificate/ Professional TAX Certificate</p>
											<h6 class="custom-forms-text"><a href="#">View</a></h6>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Owner Aadhar</p>
											<h6 class="custom-forms-text"><a href="#">View</a></h6>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">PAN</p>
											<h6 class="custom-forms-text"><a href="#">View</a></h6>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 mb-20">
										<div class="custom-form-labels">
											<p class="custom-forms-label">Pharmacy Licence</p>
											<h6 class="custom-forms-text"><a href="#">View</a></h6>
										</div>
									</div>
									
								</div>
								
								
							</section>
                        </aside>
						
						<aside class="widget-area widget-left-sidebar" style="margin-top: 60px;">
                            <section class="widget widget_categories">
								<div class="col-lg-12 mb-20">
									<div class="custom-form-text">
										<h4>Delivery Address <span class="forms-edition">
												<a href="#">
													Add New Address</a></span></h4>
									</div>
								</div>
								<div class="row">
									 <div class="col-lg-6 col-md-6 mb-30">
										<div class="custom-form-address">
											 <h5>Home Address <!--<span>Default</span>--></h5>
											 <h6>Dev Patel<br>
                                            Address 1 Address 2
                                             <br>
                                            lakhtar - 382775</h6>
										</div>
									</div>
								</div>
								
							</section>

                        </aside>
					</div>
					
			</div>
		</div>
	</section>
	@endif
	
@include('front.includes.footer')
