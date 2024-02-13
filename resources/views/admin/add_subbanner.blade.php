@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Sub Banner</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('subbanner.index') }}">Sub Banner</a></li>
                        <li class="breadcrumb-item active">Add Sub Banner
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
                        <form id="subbanner_form" action="{{ route('subbanner.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Title</label>
                                        <input id="title" name="title" type="text" class="form-control"
                                            placeholder="Enter Title" value="" />
                                        <p id="title_error" style="display: none;color: red"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Sub Title</label>
                                        <input id="sub_title" name="sub_title" type="text" class="form-control"
                                            placeholder="Enter Sub Title" value="" />
                                        <p id="sub_title_error" style="display: none;color: red"></p>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input class="form-control" id="link" name="link"
                                                placeholder="Enter Link">
                                            {{-- <p id="link_error" style="display: none;color: red"></p> --}}

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Image(600px x 300px)</label>
                                            <input id="image" name="image" type="file" class="form-control"
                                                value="" />
                                            <p id="image_error" style="display: none;color: red"></p>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-end mt-4">
                                    <a class="btn btn-primary" href="{{ route('subbanner.index') }}"> Cancel</a>
                                    <button class="btn btn-primary mb-1" type="button" disabled id="spinner_button"
                                        style="display: none;">
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        Loading...
                                    </button>
                                    <button type="button" class="btn btn-primary" id="submit_button"
                                        onclick="javascript:subbanner_validation()">Submit</button>
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
        function subbanner_validation() {
            var title = jQuery("#title").val();
            if (title == '') {
                jQuery('#title_error').html("Please Enter Title");
                jQuery('#title_error').show().delay(0).fadeIn('show');
                jQuery('#title_error').show().delay(2000).fadeOut('show');
                return false;
            }
            var subtitle = jQuery("#sub_title").val();
            if (subtitle == '') {
                jQuery('#sub_title_error').html("Please Enter Sub Title");
                jQuery('#sub_title_error').show().delay(0).fadeIn('show');
                jQuery('#sub_title_error').show().delay(2000).fadeOut('show');
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
            $('#subbanner_form').submit();
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
