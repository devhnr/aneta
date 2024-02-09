@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Banner</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Banner</a></li>
                        <li class="breadcrumb-item active">Edit Banner</li>
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
                        <form id="banner_form" action="{{ route('banner.update', $banner_data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group">
                                    <label for="name">Title 1</label>
                                    <input id="title1" name="title1" type="text" class="form-control"
                                        placeholder="Enter Title 1" value="{{ $banner_data->title1 }}" />
                                    <p id="title1_error" style="display: none;color: red"></p>
                                </div>
                                <div class="form-group">
                                    <label for="name">Title 2</label>
                                    <input id="title2" name="title2" type="text" class="form-control"
                                        placeholder="Enter Title 2" value="{{ $banner_data->title2 }}" />
                                    <p id="title2_error" style="display: none;color: red"></p>
                                </div>
                                <div class="form-group">
                                    <label for="name">Title 3</label>
                                    <input id="title3" name="title3" type="text" class="form-control"
                                        placeholder="Enter Title 3" value="{{ $banner_data->title3 }}" />
                                    <p id="title3_error" style="display: none;color: red"></p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Image</label>
                                    <input id="image" name="image" type="file" class="form-control"
                                        value="" />

                                    @if ($banner_data->image != '')
                                        <img src="{{ asset('public/upload/banner/large/' . $banner_data->image) }}"
                                            style="width: 50px;height:50px;" />
                                    @endif
                                    <p id="image_error" style="display: none;color: red"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">App Image</label>
                                    <input id="app_image" name="app_image" type="file" class="form-control"
                                        value="" />

                                    @if ($banner_data->app_image != '')
                                        <img src="{{ asset('public/upload/banner/app_image/large/' . $banner_data->app_image) }}"
                                            style="width: 50px;height:50px;" />
                                    @endif
                                    {{-- <p id="image_error" style="display: none;color: red"></p> --}}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Short Description</label>
                                    <textarea name="short_des" id="short_des" class="form-control" placeholder="Enter Short Description" value="">{{ $banner_data->short_des }}</textarea>
                                    <p id="short_des_error" style="display: none;color: red"></p>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Button Name</label>
                                    <input class="form-control" id="button_name" name="button_name"
                                        placeholder="Enter Button Name" value="{{ $banner_data->button_name }}">
                                    <p id="button_name_error" style="display: none;color: red"></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Button Link</label>
                                    <input class="form-control" id="button_link" name="button_link"
                                        placeholder="Enter Button Link" value="{{ $banner_data->button_link }}">
                                    <p id="button_link_error" style="display: none;color: red"></p>

                                </div>
                            </div>
                            <div class="text-end mt-4">
                                <a class="btn btn-primary" href="{{ route('banner.index') }}"> Cancel</a>
                                <button type="button" class="btn btn-primary"
                                    onclick="javascript:cms_validation()">Submit</button>
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
        function cms_validation() {
            var title1 = jQuery("#title1").val();
            if (title1 == '') {
                jQuery('#title1_error').html("Please Enter  Title 1");
                jQuery('#title1_error').show().delay(0).fadeIn('show');
                jQuery('#title1_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#title1').offset().top - 150
                }, 1000);
                return false;
            }
            var title2 = jQuery("#title2").val();
            if (title2 == '') {
                jQuery('#title2_error').html("Please Enter Title 2");
                jQuery('#title2_error').show().delay(0).fadeIn('show');
                jQuery('#title2_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#title2').offset().top - 150
                }, 1000);
                return false;
            }
            var title3 = jQuery("#title3").val();
            if (title3 == '') {
                jQuery('#title3_error').html("Please Enter Title 3");
                jQuery('#title3_error').show().delay(0).fadeIn('show');
                jQuery('#title3_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#title3').offset().top - 150
                }, 1000);
                return false;
            }

            // var image = jQuery("#image").val();
            // if (image == '') {
            //     jQuery('#image_error').html("Please Select Image");
            //     jQuery('#image_error').show().delay(0).fadeIn('show');
            //     jQuery('#image_error').show().delay(2000).fadeOut('show');
            //     return false;
            // }


            $('#banner_form').submit();
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
