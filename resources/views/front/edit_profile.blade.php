@include('front.includes.header')


<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Edit Profile</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Edit Profile</li>
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
                           
                            <form id="profile_form"  action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5>Shipping info</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" placeholder="Company Name" value="{{$my_profile_data->vendor_name}}" name="vendor_name">
                                            </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" value="{{$my_profile_data->address}}" name="address">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode" value="{{$my_profile_data->pincode}}" name="pincode">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input type="text" class="form-control" placeholder="Contact Person" value="{{$my_profile_data->name}}" name="name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="{{$my_profile_data->mobile}}" name="mobile" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" placeholder="Email ID" value="{{$my_profile_data->email}}" name="email" readonly>
                                        </div>
                                    </div>


                                </div>

                                <h5>Company info</h5>

                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Name 1</label>
                                            <input type="text" class="form-control" placeholder="Owner Name 1" value="{{$my_profile_data->owner1_name ? : "-" }}" name="owner1_name">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" value="{{$my_profile_data->owner1_address ? : "-" }}" name="owner1_address">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode" value="{{$my_profile_data->owner1_pincode ? : "-" }}" name="owner1_pincode">
                                        </div>

                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="{{$my_profile_data->owner1_contact_no ? : "-" }}" name="owner1_contact_no">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Name 2</label>
                                            <input type="text" class="form-control" placeholder="Owner Name 2" value="{{$my_profile_data->owner2_name ? : "-" }}" name="owner2_name">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" value="{{$my_profile_data->owner2_address ? : "-" }}" name="owner2_address">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode" value="{{$my_profile_data->owner2_pincode ? : "-" }}" name="owner2_pincode">
                                        </div>

                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="{{$my_profile_data->owner2_contact_no ? : "-" }}" name="owner2_contact_no">
                                        </div>

                                    </div>

                                </div>
                                <h5>Document Upload</h5>

                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>GST Certificate/ Professional TAX Certificate</label>
                                            <input type="file" class="form-control" placeholder="" name="documents">
                                            @if($my_profile_data->owner_aadhar !="")
                                            <h6 class="custom-forms-text">
                                            <a class="btn btn-sm btn-primary me-2"
												href="{{ url('public/upload/customer/gst_professional_certificate/'.$my_profile_data->documents)}}"><i
                                                class="fa fa-download">
													Download</i></a></h6>
                                                    @endif

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Aadhar</label>
                                            <input type="file" class="form-control" placeholder="" name="owner_aadhar">
                                            @if($my_profile_data->owner_aadhar !="")
                                            <h6 class="custom-forms-text">
                                            <a class="btn btn-sm btn-primary me-2"
												href="{{ url('public/upload/customer/owner_aadhar/'.$my_profile_data->owner_aadhar)}}"><i class="fa fa-download">
													Download</i></a></h6>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>PAN</label>
                                            <input type="file" class="form-control" placeholder="" name="pan">
                                            @if($my_profile_data->pan !="")
                                            <h6 class="custom-forms-text">
                                            <a class="btn btn-sm btn-primary me-2"
                                            href="{{ url('public/upload/customer/pan/'.$my_profile_data->pan)}}"><i class="fa fa-download">
                                                Download</i></a></h6>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pharmacy Licence</label>
                                            <input type="file" class="form-control" placeholder="" name="pharmacy_license">
                                            <h6 class="custom-forms-text">
                                            @if($my_profile_data->pharmacy_license !="")
                                            <a class="btn btn-sm btn-primary me-2"
                                            href="{{ url('public/upload/customer/pharmacy_license/'.$my_profile_data->pharmacy_license)}}"><i class="fa fa-download">
                                                Download</i></a></h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary"    onclick="javascript:update_profile();">Update</button>

                            
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
    function update_profile(){
       // alert("Test");
        $('#profile_form').submit();
    }

</script>
