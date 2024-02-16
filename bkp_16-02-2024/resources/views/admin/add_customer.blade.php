@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Customer</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Customer</a></li>
                        <li class="breadcrumb-item active">Add Customer</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div id="validate" class="alert alert-danger alert-dismissible fade show" style="display: none;">
            <span id="login_error"></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Basic Info</h4> -->
                        <form id="customer_form" action="{{ route('customer.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- <h3>Company Info</h3> --}}

                                <h5>Shipping Info</h5>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Company Name</label>
                                        <input id="vendor_name" name="vendor_name" type="text" class="form-control"
                                            placeholder="Enter Company Name" value="" />
                                        <p id="vendor_name_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Contact Person</label>
                                        <input id="name" name="name" type="text" class="form-control"
                                            placeholder="Enter Contact Person" value="" />
                                        <p id="name_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Contact No</label>
                                        <input id="mobile" name="mobile" type="text" class="form-control"
                                            placeholder="Enter Contact No" onkeypress="return validateNumber(event)"
                                            value="" />
                                        <p id="mobile_error" style="display: none;color: red"></p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Pin Code</label>
                                        <input id="pincode" name="pincode" type="text" class="form-control"
                                            placeholder="Enter Pin Code" onkeypress="return validateNumber(event)" />
                                        <p id="pincode_error" style="display: none;color: red"></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Email Id</label>
                                        <input id="email" name="email" type="text" class="form-control"
                                            placeholder="Enter Email" value="" />
                                        <p id="email_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Password</label>
                                        <input id="password" name="password" type="text" class="form-control"
                                            placeholder="Enter Password" value="" />
                                        <p id="password_error" style="display: none;color: red"></p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Confirm-Password</label>
                                        <input id="co_password" name="co_password" type="text" class="form-control"
                                            placeholder="Enter Confirm-Password" value="" />
                                        <p id="copassword_error" style="display: none;color: red"></p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" id="address" cols="30" rows="2"
                                            placeholder="Enter Address"></textarea>
                                    </div>
                                </div>




                                <h5 class="mb-3">Owner-1 Details</h5><br>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Owner-1 Name</label>
                                        <input id="owner1_name" name="owner1_name" type="text" class="form-control"
                                            placeholder="Enter Owner Name-1" value="" />
                                        <p id="owner1_name_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Pin Code</label>
                                        <input id="owner1_pincode" name="owner1_pincode" type="text"
                                            class="form-control" placeholder="Enter Pin Code"
                                            onkeypress="return validateNumber(event)" />
                                        <p id="owner1_pincode_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Contact No</label>
                                        <input id="owner1_contact_no" name="owner1_contact_no" type="text"
                                            class="form-control" placeholder="Enter Contact No"
                                            onkeypress="return validateNumber(event)" />
                                        <p id="owner1_contact_no_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="owner1_address" id="owner1_address" cols="30" rows="2"
                                            placeholder="Enter Address"></textarea>
                                    </div>
                                </div>

                                <h5 class="mb-3">Owner-2 Details</h5>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Owner-2 Name</label>
                                        <input id="owner2_name" name="owner2_name" type="text" class="form-control"
                                            placeholder="Enter Owner Name-2" value="" />
                                        <p id="owner2_name_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Pin Code</label>
                                        <input id="owner2_pincode" name="owner2_pincode" type="text"
                                            class="form-control" placeholder="Enter Pin Code"
                                            onkeypress="return validateNumber(event)" />
                                        <p id="owner2_pincode_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Contact No</label>
                                        <input id="owner2_contact_no" name="owner2_contact_no" type="text"
                                            class="form-control" placeholder="Enter Contact No"
                                            onkeypress="return validateNumber(event)" />
                                        <p id="owner2_contact_no_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="owner2_address" id="owner2_address" cols="30" rows="2"
                                            placeholder="Enter Address"></textarea>
                                    </div>
                                </div>


                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="width: 100%;">Gender</label>
                                        <div style="padding: 9px 0;">
                                            <input type="radio" name="radio" value="male" id="male"
                                                class="gender">
                                            Male&nbsp;&nbsp;
                                            <input type="radio" name="radio" value="female" id="female">
                                            Female&nbsp;&nbsp;
                                            <input type="radio" name="radio" value="other" id="other">
                                            Other&nbsp;&nbsp;
                                        </div>
                                        <p id="gender_error" style="display: none;color: red"></p>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label style="width: 100%;">Gst/Other</label>
                                        <div style="padding: 9px 0;">
                                            <input type="radio" name="gst_other" value="0" id="Gst"
                                                class="gst_other">
                                            Gst&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="gst_other" value="1" id="Other"> Other
                                        </div>
                                        <p id="gst_other_error" style="display: none;color: red"></p>
                                    </div>

                                </div> --}}


                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Date Of Birth</label>
                                        <input id="dob" name="dob" type="date" class="form-control"
                                            placeholder="Enter Date Of Birth" value="" />
                                        <p id="dob_error" style="display: none;color: red"></p>

                                    </div>
                                </div> --}}
                                <h5 class="mb-3">Document Upload</h5>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Gst Certificate/Professional Tax Certificate</label>
                                        <input id="documents" name="documents" type="file" class="form-control"
                                            placeholder="select Document" value="" />
                                        <p id="documents_error" style="display: none;color: red"></p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Owner Aadhar</label>
                                        <input id="owner_aadhar" name="owner_aadhar" type="file" class="form-control"
                                            placeholder="select Owner Aadhar" value="" />
                                        <p id="owner_aadhar_error" style="display: none;color: red"></p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Pan</label>
                                        <input id="pan" name="pan" type="file" class="form-control"
                                            placeholder="select Pan" value="" />
                                        <p id="pan_error" style="display: none;color: red"></p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Pharmacy License</label>
                                        <input id="pharmacy_license" name="pharmacy_license" type="file"
                                            class="form-control" placeholder="select Pharmacy License" value="" />
                                        <p id="pharmacy_license_error" style="display: none;color: red"></p>

                                    </div>
                                </div>



                            </div>
                            <div class="text-end mt-4">
                                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Cancel</a>
                                <button class="btn btn-primary mb-1" type="button" disabled id="spinner_button"
                                    style="display: none;">
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <button type="button" class="btn btn-primary" id="submit_button"
                                    onclick="javascript:customer_validation()">Submit</button>
                                <!-- <input type="submit" name="submit" value="Submit" class="btn btn-primary"> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer_js')

    {{-- <script src="{{ asset('public/admin/assets/build/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#meta_description'))
            .catch(error => {
                console.error(error);
            });
    </script> --}}

    <script>
        function customer_validation() {

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
            var mobile = jQuery("#mobile").val();
            if (mobile == '') {
                jQuery('#mobile_error').html("Please Enter Contact No");
                jQuery('#mobile_error').show().delay(0).fadeIn('show');
                jQuery('#mobile_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#mobile').offset().top - 150
                }, 1000);
                return false;
            }
            var regex = /^[0-9]{10}$/;
            if (!regex.test(mobile)) {
                jQuery('#mobile_error').html("Please Enter Valid Contact No");
                jQuery('#mobile_error').show().delay(0).fadeIn('show');
                jQuery('#mobile_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#mobile').offset().top - 150
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
            var email = jQuery("#email").val();
            if (email == '') {
                jQuery('#email_error').html("Please Enter Email");
                jQuery('#email_error').show().delay(0).fadeIn('show');
                jQuery('#email_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#email').offset().top - 150
                }, 1000);
                return false;
            }
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                jQuery('#email_error').html("Please Enter Proper Email");
                jQuery('#email_error').show().delay(0).fadeIn('show');
                jQuery('#email_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#email').offset().top - 150
                }, 1000);
                return false;
            }
            var url = '{{ url('vendor_check_mail') }}';

            $.ajax({
                url: url,
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "email": email
                },
                success: function(msg) {
                    if (msg == 1) {
                        jQuery('#email_error').html("Email Address Already Exists");
                        jQuery('#email_error').show().delay(0).fadeIn('show');
                        jQuery('#email_error').show().delay(2000).fadeOut('show');
                        $('html, body').animate({
                            scrollTop: $('#email').offset().top - 150
                        }, 1000);
                        return false;

                    } else {
                        var password = jQuery("#password").val();
                        if (password == '') {
                            jQuery('#password_error').html("Please Enter Password");
                            jQuery('#password_error').show().delay(0).fadeIn('show');
                            jQuery('#password_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#password').offset().top - 150
                            }, 1000);
                            return false;
                        }

                        var co_password = jQuery("#co_password").val();
                        if (co_password == '') {
                            jQuery('#copassword_error').html("Please Enter Confirm-Password");
                            jQuery('#copassword_error').show().delay(0).fadeIn('show');
                            jQuery('#copassword_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#co_password').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        if (password != co_password) {
                            jQuery('#copassword_error').html("Confirm Password Doesn't Match Password");
                            jQuery('#copassword_error').show().delay(0).fadeIn('show');
                            jQuery('#copassword_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#co_password').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        if (co_password != '' && password == '') {
                            jQuery('#password_error').html("Please Enter Password");
                            jQuery('#password_error').show().delay(0).fadeIn('show');
                            jQuery('#password_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#password').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var owner1_name = jQuery("#owner1_name").val();
                        if (owner1_name == '') {
                            jQuery('#owner1_name_error').html("Please Enter Owner-1 Name");
                            jQuery('#owner1_name_error').show().delay(0).fadeIn('show');
                            jQuery('#owner1_name_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#owner1_name').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var owner1_pincode = jQuery("#owner1_pincode").val();
                        if (owner1_pincode == '') {
                            jQuery('#owner1_pincode_error').html("Please Enter Pincode");
                            jQuery('#owner1_pincode_error').show().delay(0).fadeIn('show');
                            jQuery('#owner1_pincode_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#owner1_pincode').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var pincode_ownwer = /^[0-9]{6}$/;
                        if (!pincode_ownwer.test(owner1_pincode)) {
                            jQuery('#owner1_pincode_error').html("Please Enter Valid Pin Code");
                            jQuery('#owner1_pincode_error').show().delay(0).fadeIn('show');
                            jQuery('#owner1_pincode_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#owner1_pincode').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var owner1_contact_no = jQuery("#owner1_contact_no").val();
                        if (owner1_contact_no == '') {
                            jQuery('#owner1_contact_no_error').html("Please Enter Contact No");
                            jQuery('#owner1_contact_no_error').show().delay(0).fadeIn('show');
                            jQuery('#owner1_contact_no_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#owner1_contact_no').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var owner1_contact = /^[0-9]{10}$/;
                        if (!owner1_contact.test(owner1_contact_no)) {
                            jQuery('#owner1_contact_no_error').html("Please Enter Valid Contact No");
                            jQuery('#owner1_contact_no_error').show().delay(0).fadeIn('show');
                            jQuery('#owner1_contact_no_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#owner1_contact').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var owner2_pincode = jQuery("#owner2_pincode").val();
                        if (owner2_pincode != '') {
                            var owner2 = /^[0-9]{6}$/;
                            if (!owner2.test(owner2_pincode)) {
                                jQuery('#owner2_pincode_error').html("Please Enter Valid Pin Code");
                                jQuery('#owner2_pincode_error').show().delay(0).fadeIn('show');
                                jQuery('#owner2_pincode_error').show().delay(2000).fadeOut('show');
                                $('html, body').animate({
                                    scrollTop: $('#owner2_pincode').offset().top - 150
                                }, 1000);
                                return false;
                            }

                        }
                        var owner2_contact_no = jQuery("#owner2_contact_no").val();
                        if (owner2_contact_no != '') {
                            var owner2_contact = /^[0-9]{10}$/;
                            if (!owner2_contact.test(owner2_contact_no)) {
                                jQuery('#owner2_contact_no_error').html("Please Enter Valid Contact No");
                                jQuery('#owner2_contact_no_error').show().delay(0).fadeIn('show');
                                jQuery('#owner2_contact_no_error').show().delay(2000).fadeOut('show');
                                $('html, body').animate({
                                    scrollTop: $('#owner2_contact_no').offset().top - 150
                                }, 1000);
                                return false;
                            }

                        }
                        var documents = jQuery("#documents").val();
                        if (documents == '') {
                            jQuery('#documents_error').html(
                                "Please Select Gst Certificate/Professional Tax Certificate");
                            jQuery('#documents_error').show().delay(0).fadeIn('show');
                            jQuery('#documents_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#documents').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var owner_aadhar = jQuery("#owner_aadhar").val();
                        if (owner_aadhar == '') {
                            jQuery('#owner_aadhar_error').html("Please Select Owner Aadhar");
                            jQuery('#owner_aadhar_error').show().delay(0).fadeIn('show');
                            jQuery('#owner_aadhar_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#owner_aadhar').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var pan = jQuery("#pan").val();
                        if (pan == '') {
                            jQuery('#pan_error').html("Please Select Pan");
                            jQuery('#pan_error').show().delay(0).fadeIn('show');
                            jQuery('#pan_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#pan').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        var pharmacy_license = jQuery("#pharmacy_license").val();
                        if (pharmacy_license == '') {
                            jQuery('#pharmacy_license_error').html("Please Select Pharmacy License");
                            jQuery('#pharmacy_license_error').show().delay(0).fadeIn('show');
                            jQuery('#pharmacy_license_error').show().delay(2000).fadeOut('show');
                            $('html, body').animate({
                                scrollTop: $('#pharmacy_license').offset().top - 150
                            }, 1000);
                            return false;
                        }
                        $('#spinner_button').show();
                        $('#submit_button').hide();
                        $('#customer_form').submit();

                    }
                }
            });





        }

        function validateNumber(event) {

            var key = window.event ? event.keyCode : event.which;

            if (event.keyCode === 8 || event.keyCode === 46) {

                return true;

            } else if (key < 48 || key > 57) {

                return false;

            } else {

                return true;

            }

        }
    </script>






@stop
