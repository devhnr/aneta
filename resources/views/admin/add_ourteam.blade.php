@extends('admin.includes.Template')
@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Our Team</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('our_team.index') }}">Our Team</a></li>
                        <li class="breadcrumb-item active">Add Our Team
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
                        <form id="ourteam_form" action="{{ route('our_team.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" class="form-control"
                                            placeholder="Enter Name" value="" />
                                        <p id="name_error" style="display: none;color: red"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Role</label>
                                        <input id="role" name="role" type="text" class="form-control"
                                            placeholder="Enter Role" value="" />
                                        <p id="role_error" style="display: none;color: red"></p>
                                    </div>                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Image(600px x 600px)</label>
                                        <input id="image" name="image" type="file" class="form-control"
                                            value="" />
                                        <p id="image_error" style="display: none;color: red"></p>
                                    </div>
                                </div>
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

    <script>
        function cms_validation() {
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
            var role = jQuery("#role").val();
            if (role == '') {
                jQuery('#role_error').html("Please Enter Role");
                jQuery('#role_error').show().delay(0).fadeIn('show');
                jQuery('#role_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#role').offset().top - 150
                }, 1000);
                return false;
            }
            var image = jQuery("#image").val();
            if (image == '') {
                jQuery('#image_error').html("Please Select Image");
                jQuery('#image_error').show().delay(0).fadeIn('show');
                jQuery('#image_error').show().delay(2000).fadeOut('show');
                $('html, body').animate({
                    scrollTop: $('#image').offset().top - 150
                }, 1000);
                return false;
            }
           
            $('#ourteam_form').submit();
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
