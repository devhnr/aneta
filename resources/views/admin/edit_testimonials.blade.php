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

                        <li class="breadcrumb-item active">Edit Testimonials</li>

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

                        <form id="testimonials_form" action="{{ route('testimonials.update', $testimonials->id) }}" method="POST"

                            enctype="multipart/form-data">

                            @csrf

                            @method('PUT')

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label for="name">Customer Name</label>

                                        <input id="customer_name" name="customer_name" type="text" class="form-control" placeholder="Enter Customer Name" value="{{ $testimonials->customer_name }}" />
                                        <p id="customer_name_error" style="display: none;color: red"></p>

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Role </label>
                                        <input id="role" name="role" type="text" class="form-control"
                                         placeholder="Enter Role" value="{{ $testimonials->role }}" />
                                         <p id="role_error" style="display: none;color: red"></p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Image(300px x 300px)</label>
                                    <input id="image" name="image" type="file" class="form-control"
                                        value="" />

                                    @if ($testimonials->image != '')
                                        <img src="{{ asset('public/upload/testimonials/large/' . $testimonials->image) }}"
                                        style="width: 50px;height:50px;"/>
                                    @endif
                                    <p id="image_error" style="display: none;color: red"></p>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="description" style="margin:15px 0 5px 0px; width:100%;">Description</label>

                                     <textarea id="description" name="description" class="form-control" placeholder="Enter Description">{{$testimonials->description}}</textarea>

                                    </div>
                                </div>

                            </div>

                            <div class="text-end mt-4">

                                <a class="btn btn-primary" href="{{ route('testimonials.index') }}"> Cancel</a>

                                <button type="button" class="btn btn-primary"

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

        function testimonials_validation() {

            var customer_name = jQuery("#customer_name").val();
            if (customer_name =='') {
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

               $('#testimonials_form').submit();

        }

    </script>



   


@stop

