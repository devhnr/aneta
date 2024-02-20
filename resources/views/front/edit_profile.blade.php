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
                                            <input type="text" class="form-control" placeholder="Company Name" id="vendor_name" value="{{$my_profile_data->vendor_name}}" name="vendor_name">
                                            <p id="vendor_name_error" style="display: none;color: red"></p>
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
                                            <input type="text" class="form-control" placeholder="Pincode" value="{{$my_profile_data->pincode}}" name="pincode" id="pincode">
                                            <p id="pincode_error" style="display: none;color: red"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input type="text" class="form-control" placeholder="Contact Person" value="{{$my_profile_data->name}}" name="name" id="name">
                                            <p id="name_error" style="display: none;color: red"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="{{$my_profile_data->mobile}}" name="mobile" readonly>
                                            <p id="mobile_error" style="display: none;color: red"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" placeholder="Email ID" value="{{$my_profile_data->email}}" name="email" readonly>
                                            <p id="email_error" style="display: none;color: red"></p>
                                        </div>
                                    </div>


                                </div>

                                <h5>Company info</h5>

                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Name 1</label>
                                            <input type="text" class="form-control" placeholder="Owner Name 1" value="{{$my_profile_data->owner1_name}}" name="owner1_name" id="owner1_name" >
                                            <p id="owner1_name_error" style="display: none;color: red"></p>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" value="{{$my_profile_data->owner1_address}}" name="owner1_address">
                                            
                                            
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode" value="{{$my_profile_data->owner1_pincode}}" name="owner1_pincode" id="owner1_pincode">
                                            <p id="owner1_pincode_error" style="display: none;color: red"></p>
                                        </div>

                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="{{$my_profile_data->owner1_contact_no}}" name="owner1_contact_no" id="owner1_contact_no">
                                            <p id="owner1_contact_no_error" style="display: none;color: red"></p>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Name 2</label>
                                            <input type="text" class="form-control" placeholder="Owner Name 2" value="{{$my_profile_data->owner2_name}}" name="owner2_name" id="owner2_name">
                                            <p id="owner2_name_error" style="display: none;color: red"></p>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address" value="{{$my_profile_data->owner2_address}}" name="owner2_address">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode" value="{{$my_profile_data->owner2_pincode}}" name="owner2_pincode" id="owner2_pincode">
                                            <p id="owner2_pincode_error" style="display: none;color: red"></p>
                                        </div>

                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No" value="{{$my_profile_data->owner2_contact_no}}" name="owner2_contact_no" id="owner2_contact_no">
                                            <p id="owner2_contact_no_error" style="display: none;color: red"></p>
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
                                
                                <button type="button" class="btn btn-primary"    onclick="javascript:update_profile_data();">Update</button>

                            
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
function update_profile_data() {

var vendor_name = jQuery("#vendor_name").val();
if (vendor_name == '') {
    jQuery('#vendor_name_error').html("Please Enter Company Name");
    jQuery('#vendor_name_error').show().delay(0).fadeIn('show');
    jQuery('#vendor_name_error').show().delay(2000).fadeOut('show');
    $('html, body').animate({
        scrollTop: $('#vendor_name').offset().top - 150
    }, 1000);
    return false;
}
var pincode = jQuery("#pincode").val();
if (pincode == '') {
    jQuery('#pincode_error').html("Please Enter Pin Code");
    jQuery('#pincode_error').show().delay(0).fadeIn('show');
    jQuery('#pincode_error').show().delay(2000).fadeOut('show');
    $('html, body').animate({
        scrollTop: $('#pincode').offset().top - 150
    }, 1000);
    return false;
}
var regexx = /^[0-9]{6}$/;
if (!regexx.test(pincode)) {
    jQuery('#pincode_error').html("Please Enter Valid Pin Code");
    jQuery('#pincode_error').show().delay(0).fadeIn('show');
    jQuery('#pincode_error').show().delay(2000).fadeOut('show');
    $('html, body').animate({
        scrollTop: $('#pincode').offset().top - 150
    }, 1000);
    return false;
}
var name = jQuery("#name").val();
        if (name == '') {
            jQuery('#name_error').html("Please Enter Contact Person");
            jQuery('#name_error').show().delay(0).fadeIn('show');
            jQuery('#name_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#name').offset().top - 150
            }, 1000);
            return false;
        }
        var owner1_name = jQuery("#owner1_name").val();
        if (owner1_name == '') {
            jQuery('#owner1_name_error').html(
                "Please Enter Owner-1 Name");
            jQuery('#owner1_name_error').show().delay(0).fadeIn('show');
            jQuery('#owner1_name_error').show().delay(2000).fadeOut(
                'show');
            $('html, body').animate({
                scrollTop: $('#owner1_name').offset().top - 150
            }, 1000);
            return false;
        }
        var owner1_pincode = jQuery("#owner1_pincode").val();
        if (owner1_pincode == '') {
            jQuery('#owner1_pincode_error').html(
                "Please Enter Pincode");
            jQuery('#owner1_pincode_error').show().delay(0).fadeIn(
                'show');
            jQuery('#owner1_pincode_error').show().delay(2000).fadeOut(
                'show');
            $('html, body').animate({
                scrollTop: $('#owner1_pincode').offset().top -
                    150
            }, 1000);
            return false;
        }
        var pincode_ownwer = /^[0-9]{6}$/;
        if (!pincode_ownwer.test(owner1_pincode)) {
            jQuery('#owner1_pincode_error').html(
                "Please Enter Valid Pin Code");
            jQuery('#owner1_pincode_error').show().delay(0).fadeIn(
                'show');
            jQuery('#owner1_pincode_error').show().delay(2000).fadeOut(
                'show');
            $('html, body').animate({
                scrollTop: $('#owner1_pincode').offset().top -
                    150
            }, 1000);
            return false;
        }
        var owner1_contact_no = jQuery("#owner1_contact_no").val();
        if (owner1_contact_no == '') {
            jQuery('#owner1_contact_no_error').html(
                "Please Enter Contact No");
            jQuery('#owner1_contact_no_error').show().delay(0).fadeIn(
                'show');
            jQuery('#owner1_contact_no_error').show().delay(2000)
                .fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#owner1_contact_no').offset()
                    .top - 150
            }, 1000);
            return false;
        }
        var owner1_contact = /^[0-9]{10}$/;
        if (!owner1_contact.test(owner1_contact_no)) {
            jQuery('#owner1_contact_no_error').html(
                "Please Enter Valid Contact No");
            jQuery('#owner1_contact_no_error').show().delay(0).fadeIn(
                'show');
            jQuery('#owner1_contact_no_error').show().delay(2000)
                .fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#owner1_contact_no').offset()
                    .top -
                    150
            }, 1000);
            return false;
        }
        var owner2_pincode = jQuery("#owner2_pincode").val();
        if (owner2_pincode != '') {
            var owner2 = /^[0-9]{6}$/;
            if (!owner2.test(owner2_pincode)) {
                jQuery('#owner2_pincode_error').html(
                    "Please Enter Valid Pin Code");
                jQuery('#owner2_pincode_error').show().delay(0).fadeIn(
                    'show');
                jQuery('#owner2_pincode_error').show().delay(2000)
                    .fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#owner2_pincode').offset()
                        .top - 150
                }, 1000);
                return false;
            }

        }
        var owner2_contact_no = jQuery("#owner2_contact_no").val();
        if (owner2_contact_no != '') {
            var owner2_contact = /^[0-9]{10}$/;
            if (!owner2_contact.test(owner2_contact_no)) {
                jQuery('#owner2_contact_no_error').html(
                    "Please Enter Valid Contact No");
                jQuery('#owner2_contact_no_error').show().delay(0)
                    .fadeIn('show');
                jQuery('#owner2_contact_no_error').show().delay(2000)
                    .fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#owner2_contact_no').offset()
                        .top - 150
                }, 1000);
                return false;
            }

        }

        $('#profile_form').submit();

}
        
                    
</script>
