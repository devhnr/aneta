@extends('admin.includes.Template')

@section('content')

    <div class="content container-fluid">



        <!-- Page Header -->

        <div class="page-header">

            <div class="row">

                <div class="col-sm-12">

                    <h3 class="page-title">FAQ</h3>

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>

                        <li class="breadcrumb-item"><a href="{{ route('faq.index') }}">FAQ</a></li>

                        <li class="breadcrumb-item active">Edit FAQ</li>

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

                        <form id="faq_form" action="{{ route('faq.update', $faq->id) }}" method="POST"

                            enctype="multipart/form-data">

                            @csrf

                            @method('PUT')

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label for="name">Question</label>

                                        <input id="que" name="que" type="text" class="form-control"

                                            placeholder="Enter Question" value="{{ $faq->que }}" />
                                        <p id="que_error" style="display: none;color: red"></p>
                                    </div>

                                    <div class="form-group">

                                        <label for="Composition" style="margin:15px 0 5px 0px; width:100%;">Answer</label>
    
                                        <textarea id="ans" name="ans" class="form-control" placeholder="Enter Answer">{{ $faq->ans}}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="text-end mt-4">

                                <a class="btn btn-primary" href="{{ route('faq.index') }}"> Cancel</a>

                                <button type="button" class="btn btn-primary"

                                    onclick="javascript:faq_validation()">Submit</button>

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

        function faq_validation() {

            var que = jQuery("#que").val();

            if (que == '') {

                jQuery('#que_error').html("Please Enter  Question");

                jQuery('#que_error').show().delay(0).fadeIn('show');

                jQuery('#que_error').show().delay(2000).fadeOut('show');

                return false;

            }            



            $('#faq_form').submit();

        }

    </script>



    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

    <script>

        ClassicEditor
            .create(document.querySelector('#ans'))
            .catch(error => {
                console.error(error);
            });

    </script>





@stop

