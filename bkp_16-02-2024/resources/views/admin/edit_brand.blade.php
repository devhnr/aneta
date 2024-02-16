@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Edit Brand</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('brand.index') }}">Brand</a></li>
                        <li class="breadcrumb-item active">Edit Brand</li>
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
                        <form id="brand_form" action="{{ route('brand.update', $brand_data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="form-group">
                                    <label for="name">Brand Name</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                        placeholder="Enter Brand Name" value="{{ $brand_data->name }}" />
                                    <p id="name_error" style="display: none;color: red"></p>
                                </div>
                                <div class="form-group">
                                    <label for="name">Page Url</label>
                                    <input id="page_url" name="page_url" type="text" class="form-control"
                                        placeholder="Enter Page Url" value="{{ $brand_data->page_url }}" />
                                    <p id="page_url_error" style="display: none;color: red"></p>
                                </div>
                                {{-- <div class="col-md-12"> --}}
                                    <div class="form-group">
                                        <label for="name">Image(95px x 85px)</label>
                                        <input id="image" name="image" type="file" class="form-control"
                                            value="" />
    
                                        @if ($brand_data->image != '')
                                            <img src="{{ asset('public/upload/brand/large/' . $brand_data->image) }}"
                                                style="width: 50px;height:50px;" />
                                        @endif
    
                                    </div>
                                {{-- </div> --}}
                            </div>
                            
                            <div class="text-end mt-4">
                                <a class="btn btn-primary" href="{{ route('category.index') }}"> Cancel</a>
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
                jQuery('#name_error').html("Please Category Name");
                jQuery('#name_error').show().delay(0).fadeIn('show');
                jQuery('#name_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#name').offset().top - 150
                }, 1000);
                return false;
            }
            var page_url = jQuery("#page_url").val();
            if (page_url == '') {
                jQuery('#page_url_error').html("Please Page_url");
                jQuery('#page_url_error').show().delay(0).fadeIn('show');
                jQuery('#page_url_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#page_url').offset().top - 150
                }, 1000);
                return false;
            }
            $('#spinner_button').show();
            $('#submit_button').hide();
            $('#brand_form').submit();
        }
    </script>
@stop
