@include('front.includes.header')
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Register</h1>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</section>
<!-- Start Profile Authentication Area -->
<section class="profile-authentication-area ptb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="register-form">
                    <h2>Register</h2>

                    <form id="customer_form" action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Shipping info</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Company Name</label>
                                    <input type="text" id="vendor_name" name="vendor_name" class="form-control"
                                        placeholder="Company Name">
                                    <input type="hidden" id="user-register" name="action" value="user-register">
                                    <p id="vendor_name_error" style="display: none;color: red"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Address">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" id="pincode" name="pincode" class="form-control"
                                        placeholder="Pincode" onkeypress="return validateNumber(event)">
                                    <p id="pincode_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Contact Person</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Contact Person">
                                    <p id="name_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control"
                                        placeholder="Contact No" onkeypress="return validateNumber(event)">
                                    <p id="mobile_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="Email ID">
                                    <p id="email_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" id="password" name="password" class="form-control"
                                        placeholder="Password">
                                    <p id="password_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="text" id="co_password" name="co_password" class="form-control"
                                        placeholder="Confirm Password">
                                    <p id="copassword_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                        </div>

                        <h5>Company info</h5>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Owner Name 1</label>
                                    <input type="text" id="owner1_name" name="owner1_name" class="form-control"
                                        placeholder="Owner Name 1">
                                    <p id="owner1_name_error" style="display: none;color: red"></p>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="owner1_address" id="owner1_address"
                                        class="form-control" placeholder="Address">
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" id="owner1_pincode" name="owner1_pincode"
                                        class="form-control" placeholder="Pincode"
                                        onkeypress="return validateNumber(event)">
                                    <p id="owner1_pincode_error" style="display: none;color: red"></p>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input type="text" id="owner1_contact_no" name="owner1_contact_no"
                                        class="form-control" placeholder="Contact No"
                                        onkeypress="return validateNumber(event)">
                                    <p id="owner1_contact_no_error" style="display: none;color: red"></p>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Owner Name 2</label>
                                    <input type="text" id="owner2_name" name="owner2_name" class="form-control"
                                        placeholder="Owner Name 2">
                                    <p id="owner2_name_error" style="display: none;color: red"></p>
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="owner2_address" id="owner2_address"
                                        class="form-control" placeholder="Address">
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" id="owner2_pincode" name="owner2_pincode"
                                        class="form-control" placeholder="Pincode"
                                        onkeypress="return validateNumber(event)">
                                    <p id="owner2_pincode_error" style="display: none;color: red"></p>

                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input type="text" id="owner2_contact_no" name="owner2_contact_no"
                                        class="form-control" placeholder="Contact No"
                                        onkeypress="return validateNumber(event)">
                                    <p id="owner2_contact_no_error" style="display: none;color: red"></p>
                                </div>

                            </div>

                        </div>
                        <h5>Document Upload</h5>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>GST Certificate/ Professional TAX Certificate</label>
                                    <input type="file" id="documents" name="documents" class="form-control"
                                        placeholder="Password">
                                    <p id="documents_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Owner Aadhar</label>
                                    <input type="file" id="owner_aadhar" name="owner_aadhar" class="form-control"
                                        placeholder="Password">
                                    <p id="owner_aadhar_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>PAN</label>
                                    <input type="file" id="pan" name="pan" class="form-control"
                                        placeholder="Password">
                                    <p id="pan_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Pharmacy Licence</label>
                                    <input type="file" id="pharmacy_license" name="pharmacy_license"
                                        class="form-control" placeholder="Password">
                                    <p id="pharmacy_license_error" style="display: none;color: red"></p>
                                </div>
                            </div>
                        </div>


                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                                <a href="{{ url('/signin') }}" class="lost-your-password">Login</a>
                            </div>

                        </div>


                        <!-- <p class="description">The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & )</p> -->
                        <button class="btn btn-primary mb-1" type="button" disabled id="spinner_button"
                            style="display: none;">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                        <button type="button" id="submit_button"
                            onclick="javascript:customer_validation()">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Profile Authentication Area -->
@include('front.includes.footer')
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
        var url = '{{ url('vendor_check_mobile') }}';

        $.ajax({
            url: url,
            type: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                "mobile": mobile
            },
            success: function(msg) {
                if (msg == 1) {
                    jQuery('#mobile_error').html("Mobile Address Already Exists");
                    jQuery('#mobile_error').show().delay(0).fadeIn('show');
                    jQuery('#mobile_error').show().delay(2000).fadeOut('show');
                    $('html, body').animate({
                        scrollTop: $('#mobile').offset().top - 150
                    }, 1000);
                    return false;

                } else {


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
                                    jQuery('#password_error').show().delay(2000).fadeOut(
                                        'show');
                                    $('html, body').animate({
                                        scrollTop: $('#password').offset().top - 150
                                    }, 1000);
                                    return false;
                                }

                                var co_password = jQuery("#co_password").val();
                                if (co_password == '') {
                                    jQuery('#copassword_error').html(
                                        "Please Enter Confirm-Password");
                                    jQuery('#copassword_error').show().delay(0).fadeIn('show');
                                    jQuery('#copassword_error').show().delay(2000).fadeOut(
                                        'show');
                                    $('html, body').animate({
                                        scrollTop: $('#co_password').offset().top - 150
                                    }, 1000);
                                    return false;
                                }
                                if (password != co_password) {
                                    jQuery('#copassword_error').html(
                                        "Confirm Password Doesn't Match Password");
                                    jQuery('#copassword_error').show().delay(0).fadeIn('show');
                                    jQuery('#copassword_error').show().delay(2000).fadeOut(
                                        'show');
                                    $('html, body').animate({
                                        scrollTop: $('#co_password').offset().top - 150
                                    }, 1000);
                                    return false;
                                }
                                if (co_password != '' && password == '') {
                                    jQuery('#password_error').html("Please Enter Password");
                                    jQuery('#password_error').show().delay(0).fadeIn('show');
                                    jQuery('#password_error').show().delay(2000).fadeOut(
                                        'show');
                                    $('html, body').animate({
                                        scrollTop: $('#password').offset().top - 150
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
                                var documents = jQuery("#documents").val();
                                if (documents == '') {
                                    jQuery('#documents_error').html(
                                        "Please Select Gst Certificate/Professional Tax Certificate"
                                    );
                                    jQuery('#documents_error').show().delay(0).fadeIn('show');
                                    jQuery('#documents_error').show().delay(2000).fadeOut(
                                        'show');
                                    $('html, body').animate({
                                        scrollTop: $('#documents').offset().top - 150
                                    }, 1000);
                                    return false;
                                }
                                var owner_aadhar = jQuery("#owner_aadhar").val();
                                if (owner_aadhar == '') {
                                    jQuery('#owner_aadhar_error').html(
                                        "Please Select Owner Aadhar");
                                    jQuery('#owner_aadhar_error').show().delay(0).fadeIn(
                                        'show');
                                    jQuery('#owner_aadhar_error').show().delay(2000).fadeOut(
                                        'show');
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
                                    jQuery('#pharmacy_license_error').html(
                                        "Please Select Pharmacy License");
                                    jQuery('#pharmacy_license_error').show().delay(0).fadeIn(
                                        'show');
                                    jQuery('#pharmacy_license_error').show().delay(2000)
                                        .fadeOut('show');
                                    $('html, body').animate({
                                        scrollTop: $('#pharmacy_license').offset().top -
                                            150
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
            }
        });





    }
</script>

<script>
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
