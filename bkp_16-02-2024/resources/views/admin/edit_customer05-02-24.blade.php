@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Customers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('customer.index') }}">Customers</a></li>
                        <li class="breadcrumb-item active">Edit Customers</li>
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
                        <form id="customer_form" action="{{ route('customer.update', $customer->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Vendor Name</label>
                                        <input id="vendor_name" name="vendor_name" type="text" class="form-control"
                                            placeholder="Enter Vendor Name" value="{{ $customer->vendor_name }}" />
                                        <p id="vendor_name_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" class="form-control"
                                            placeholder="Enter Name" value="{{ $customer->name }}" />
                                        <p id="name_error" style="display: none;color: red"></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Email </label>
                                        <input id="email" name="email" type="text" class="form-control"
                                            placeholder="Enter Email" value="{{ $customer->email }}" />
                                        <p id="email_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Password</label>
                                        <input id="password" name="password" type="text" class="form-control"
                                            placeholder="Enter Password" value="{{ $customer->password }}" />
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="width: 100%;">Gender</label>
                                        <div style="padding: 9px 0;">
                                            <input type="radio" name="radio" value="male" id="male"
                                                @if ($customer->gender == 'male') {{ 'checked' }} @endif>
                                            Male&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="radio" value="female" id="female"
                                                @if ($customer->gender == 'female') {{ 'checked' }} @endif>
                                            Female&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="radio" value="other"
                                                id="other"@if ($customer->gender == 'other') {{ 'checked' }} @endif>Other
                                        </div>
                                        <p id="gender_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="width: 100%;">Gst/Other</label>
                                        <div style="padding: 9px 0;">
                                            <input type="radio" name="gst_other" value="0" id="Gst"
                                                @if ($customer->gst_other == '0') {{ 'checked' }} @endif>
                                            Gst&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="gst_other" value="1" id="Other"
                                                @if ($customer->gst_other == '1') {{ 'checked' }} @endif> Other

                                        </div>
                                        <p id="gst_other_error" style="display: none;color: red"></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Mobile</label>
                                        <input id="mobile" name="mobile" type="text" class="form-control"
                                            placeholder="Enter Mobile" onkeypress="return validateNumber(event)"
                                            value="{{ $customer->mobile }}" />
                                        <p id="mobile_error" style="display: none;color: red"></p>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Date Of Birth</label>
                                        <input id="dob" name="dob" type="date" class="form-control"
                                            placeholder="Enter Date Of Birth" value="{{ $customer->dob }}" />
                                        <p id="dob_error" style="display: none;color: red"></p>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Address</label>
                                        <textarea class="form-control" name="address" id="address" cols="30" rows="5">{{ $customer->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end mt-4">
                                <a class="btn btn-primary" href="{{ route('customer.index') }}"> Cancel</a>
                                <button type="button" class="btn btn-primary"
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


    <script>
        function customer_validation() {
            var name = jQuery("#name").val();
            if (name == '') {
                jQuery('#name_error').html("Please Enter Name");
                jQuery('#name_error').show().delay(0).fadeIn('show');
                jQuery('#name_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#name').offset().top - 150
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

            var gender = jQuery('input[name="radio"]:checked').val();
            if (!gender) {
                jQuery('#gender_error').html("Please Select Gender");
                jQuery('#gender_error').show().delay(0).fadeIn('show');
                jQuery('#gender_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#gender_error').offset().top - 150
                }, 1000);
                return false;
            }
            var mobile = jQuery("#mobile").val();
            if (mobile == '') {
                jQuery('#mobile_error').html("Please Enter Mobile No");
                jQuery('#mobile_error').show().delay(0).fadeIn('show');
                jQuery('#mobile_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#mobile').offset().top - 150
                }, 1000);
                return false;
            }
            var regex = /^[0-9]{10}$/;
            if (!regex.test(mobile)) {
                jQuery('#mobile_error').html("Please Enter Valid Mobile Number");
                jQuery('#mobile_error').show().delay(0).fadeIn('show');
                jQuery('#mobile_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#mobile').offset().top - 150
                }, 1000);
                return false;
            }
            var dob = jQuery("#dob").val();
            if (dob == '') {
                jQuery('#dob_error').html("Please Select Date Of Birth");
                jQuery('#dob_error').show().delay(0).fadeIn('show');
                jQuery('#dob_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#dob').offset().top - 150
                }, 1000);
                return false;
            }

            $('#customer_form').submit();
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
