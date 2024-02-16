@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Blog</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                        <li class="breadcrumb-item active">Add Blog</li>
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
                        <form id="blog_form" action="{{ route('blog.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group">
                                    <label for="name">Blog Title</label>
                                    <input id="title" name="title" type="text" class="form-control"
                                        placeholder="Enter Blog Title" value="" />
                                    <p id="title_error" style="display: none;color: red"></p>
                                </div>
                                <div class="form-group">
                                    <label for="name">Page Url</label>
                                    <input id="page_url" name="page_url" type="text" class="form-control"
                                        placeholder="Enter Page Url" value="" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Blog Name</label>
                                    <input id="name" name="name" type="text" class="form-control"
                                        placeholder="Enter Blog Name" value="" />
                                    <p id="name_error" style="display: none;color: red"></p>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">User Image (300px x 300px)</label>
                                        <input id="user_image" name="user_image" type="file" class="form-control"
                                            value="" />
                                        <p id="user_image_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="name">Date</label>
                                    <input id="date" name="date" type="date" class="form-control"
                                        placeholder="Select Date" value="" />
                                    <p id="date_error" style="display: none;color: red"></p>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">List Image (790px x 600px)</label>
                                        <input id="list_image" name="list_image" type="file" class="form-control"
                                            value="" />
                                        <p id="list_image_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">Detail Image (1155px x 875px)</label>
                                        <input id="detail_image" name="detail_image" type="file" class="form-control"
                                            value="" />
                                        <p id="detail_image_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
                                        <p id="description_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" id="meta_title" name="meta_title"
                                            placeholder="Enter Meta Title">
                                        <p id="meta_title_error" style="display: none;color: red"></p>
                                        @error('meta_title')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Meta Keywords</label>
                                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords"
                                            placeholder="Enter Meta Keywords">
                                        <p id="meta_keywords_error" style="display: none;color: red"></p>
                                        @error('meta_keywords')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea class="form-control" id="meta_description" name="meta_description" placeholder="Enter Meta Description"></textarea>
                                        <p id="meta_description_error" style="display: none;color: red"></p>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="text-end mt-4">
                                <a class="btn btn-primary" href="{{ route('blog.index') }}"> Cancel</a>
                                <button class="btn btn-primary mb-1" type="button" disabled id="spinner_button"
                                    style="display: none;">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <button type="button" class="btn btn-primary" id="submit_button"
                                    onclick="javascript:blog_validation()">Submit</button>
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
            $("#title").keyup(function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $("#page_url").val(Text);
            });
        });
    </script>
    <script>
        function blog_validation() {
            var title = jQuery("#title").val();
            if (title == '') {
                jQuery('#title_error').html("Please Enter Blog Title");
                jQuery('#title_error').show().delay(0).fadeIn('show');
                jQuery('#title_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#title').offset().top - 150
                }, 1000);
                return false;
            }
            var name = jQuery("#name").val();
            if (name == '') {
                jQuery('#name_error').html("Please Enter Blog Name");
                jQuery('#name_error').show().delay(0).fadeIn('show');
                jQuery('#name_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#name').offset().top - 150
                }, 1000);
                return false;
            }
            var user_image = jQuery("#user_image").val();
            if (user_image == '') {
                jQuery('#user_image_error').html("Please Select User Image");
                jQuery('#user_image_error').show().delay(0).fadeIn('show');
                jQuery('#user_image_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#user_image').offset().top - 150
                }, 1000);
                return false;
            }
            var date = jQuery("#date").val();
            if (date == '') {
                jQuery('#date_error').html("Please Select Date");
                jQuery('#date_error').show().delay(0).fadeIn('show');
                jQuery('#date_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#date').offset().top - 150
                }, 1000);
                return false;
            }

            var list_image = jQuery("#list_image").val();
            if (list_image == '') {
                jQuery('#list_image_error').html("Please Select List Image");
                jQuery('#list_image_error').show().delay(0).fadeIn('show');
                jQuery('#list_image_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#list_image').offset().top - 150
                }, 1000);
                return false;
            }
            var detail_image = jQuery("#detail_image").val();
            if (detail_image == '') {
                jQuery('#detail_image_error').html("Please Select Detail Image");
                jQuery('#detail_image_error').show().delay(0).fadeIn('show');
                jQuery('#detail_image_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#detail_image').offset().top - 150
                }, 1000);
                return false;
            }
            $('#spinner_button').show();
            $('#submit_button').hide();
            $('#blog_form').submit();
        }
    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>

@stop
