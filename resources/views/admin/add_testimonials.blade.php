@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Testimonials</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('testimonials.index') }}">Testimonials</a></li>
                        <li class="breadcrumb-item active">Add Testimonials
                        </li>
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
                        <form id="testimonials_form" action="{{ route('testimonials.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Customer Name</label>
                                        <input id="customer_name" name="customer_name" type="text" class="form-control"
                                            placeholder="Enter Customer Name" value="" />
                                        <p id="customer_name_error" style="display: none;color: red"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Role</label>
                                        <input id="role" name="role" type="text" class="form-control"
                                            placeholder="Enter Role" value="" />
                                        <p id="role_error" style="display: none;color: red"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Image(300px x 300px)</label>
                                            <input id="image" name="image" type="file" class="form-control"
                                                value="" />
                                            <p id="image_error" style="display: none;color: red"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                         <label for="description" style="margin:15px 0 5px 0px; width:100%;">Description</label>
    
                                         <textarea id="description" name="description" class="form-control" placeholder="Enter Description"></textarea>
    
                                        </div>
    
                                    </div>

                                </div>
                                <div class="text-end mt-4">
                                    <a class="btn btn-primary" href="{{ route('testimonials.index') }}"> Cancel</a>
                                    <button class="btn btn-primary mb-1" type="button" disabled id="spinner_button"
                                        style="display: none;">
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit_button"
                                        onclick="javascript:testimonials_validation()">Submit</button>
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
        function testimonials_validation() {
            var customer_name = jQuery("#customer_name").val();
            if (customer_name == '') {
                jQuery('#customer_name_error').html("Please Enter Customer Name");
                jQuery('#customer_name_error').show().delay(0).fadeIn('show');
                jQuery('#customer_name_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                scrollTop: $("#customer_name").offset().top - 150}, 100);
                return false;
            }
            var role = jQuery("#role").val();
            if (role == '') {
                jQuery('#role_error').html("Please Enter Role");
                jQuery('#role_error').show().delay(0).fadeIn('show');
                jQuery('#role_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                scrollTop: $("#role").offset().top - 150}, 100);
                return false;
            }

            var image = jQuery("#image").val();
            if (image == '') {
                jQuery('#image_error').html("Please Select Image");
                jQuery('#image_error').show().delay(0).fadeIn('show');
                jQuery('#image_error').show().delay(2000).fadeOut('show');
                return false;
            }

            $('#spinner_button').show();
            $('#submit_button').hide();
            $('#testimonials_form').submit();
        }
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>



    <script>
        ClassicEditor

            .create(document.querySelector('#short_desc'))

            .catch(error => {

                console.error(error);

            });
    </script>

@stop
