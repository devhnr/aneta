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
                           
                            <form>
                                <h5>Shipping info</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" placeholder="Company Name" value="Aneta Pharma">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" value="Brahmpole,Lakhtar">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode" value="382775">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input type="text" class="form-control" placeholder="Contact Person" value="Devang">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="1234567890" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" placeholder="Email ID" value="dev@gmail.com" readonly>
                                        </div>
                                    </div>


                                </div>

                                <h5>Company info</h5>

                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Name 1</label>
                                            <input type="text" class="form-control" placeholder="Owner Name 1" value="Owner Name 1">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" value="A-101,Vastral">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode" value="123456">
                                        </div>

                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="7897897890">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Name 2</label>
                                            <input type="text" class="form-control" placeholder="Owner Name 2" value="Owner Name 2">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" value="A-101,Vastral">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode" value="123456">
                                        </div>

                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="7897897890">
                                        </div>

                                    </div>

                                </div>
                                <h5>Document Upload</h5>

                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>GST Certificate/ Professional TAX Certificate</label>
                                            <input type="file" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Aadhar</label>
                                            <input type="file" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>PAN</label>
                                            <input type="file" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pharmacy Licence</label>
                                            <input type="file" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                


                                <button type="button">Update</button>
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
