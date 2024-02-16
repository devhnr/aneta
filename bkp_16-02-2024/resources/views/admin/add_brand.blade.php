@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Brand</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('brand.index') }}">Brand</a></li>
                        <li class="breadcrumb-item active">Add Brand</li>
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
                        <form id="brand_form" action="{{ route('brand.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label for="name">Brand Name</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                        placeholder="Enter Brand Name" value="" />
                                    <p id="name_error" style="display: none;color: red"></p>
                                </div>
                                <div class="form-group">
                                    <label for="name">Page Url</label>
                                    <input id="page_url" name="page_url" type="text" class="form-control"
                                        placeholder="Enter Page Url" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="image">Image(95px x 85px)</label>
                                    <input id="image" name="image" type="file" class="form-control"
                                        value="" />
                                    <p id="image_error" style="display: none;color: red"></p>
                                </div>
                            </div>
                          
                            <div class="text-end mt-4">
                                <a class="btn btn-primary" href="{{ route('brand.index') }}"> Cancel</a>
                                <button class="btn btn-primary mb-1" type="button" disabled id="spinner_button"
                                    style="display: none;">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <button type="button" class="btn btn-primary" id="submit_button"
                                    onclick="javascript:category_validation()">Submit</button>
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
        $(function() {
            $("#name").keyup(function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $("#page_url").val(Text);
            });
        });
    </script>
    <script>
        function category_validation() {
            var name = jQuery("#name").val();
            if (name == '') {
                jQuery('#name_error').html("Please Enter Category Name");
                jQuery('#name_error').show().delay(0).fadeIn('show');
                jQuery('#name_error').show().delay(2000).fadeOut('show');
                return false;
            }
            var page_url = jQuery("#page_url").val();
            if (page_url == '') {
                jQuery('#page_url_error').html("Please Enter Page Url");
                jQuery('#page_url_error').show().delay(0).fadeIn('show');
                jQuery('#page_url_error').show().delay(2000).fadeOut('show');
                return false;
            }
            // var image = jQuery("#image").val();
            // if (image == '') {
            //     jQuery('#image_error').html("Please Select Image");
            //     jQuery('#image_error').show().delay(0).fadeIn('show');
            //     jQuery('#image_error').show().delay(2000).fadeOut('show');
            //     return false;
            // }
           
            $('#spinner_button').show();
            $('#submit_button').hide();
            $('#brand_form').submit();
        }
    </script>
@stop
