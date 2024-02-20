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

                        <li class="breadcrumb-item active">Add FAQ</li>

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

                       <form id="faq_form" action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="row">

                                <div class="form-group">

                                    <label for="name">Question</label>
                                    <input id="que" name="que" type="text" class="form-control"  placeholder="Enter Question" value="" />

                                    <p id="que_error" style="display: none;color: red"></p>

                                    
                                </div>

                                <div class="form-group">

                                    <label for="Composition" style="margin:15px 0 5px 0px; width:100%;">Answer</label>

                                    <textarea id="ans" name="ans" class="form-control" placeholder="Enter Answer"></textarea>


                                </div>
                            </div>

                            <div class="text-end mt-4">
                                <a class="btn btn-primary" href="{{ route('faq.index') }}"> Cancel</a>

                                <button class="btn btn-primary mb-1" type="button" disabled id="spinner_button"
                                    style="display: none;">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>

                                <button type="button" class="btn btn-primary" id="submit_button"
                                  onclick="javascript:category_validation()">Submit</button>
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
                var que = jQuery("#que").val();
            if (que == '') {
                jQuery('#que_error').html("Please Enter Question");
                jQuery('#que_error').show().delay(0).fadeIn('show');
                jQuery('#que_error').show().delay(2000).fadeOut('show');
                return false;
            }

            $('#spinner_button').show();
            $('#submit_button').hide();
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


    <script>



        function category_change(group_id) {

            var url = '{{ url('group_shows_category') }}';

            $.ajax({
                url: url,
                type: 'post',
                data: {

                    "_token": "{{ csrf_token() }}",
                    "group_id": group_id

                },

                success: function(msg) {
                    document.getElementById('cat_id').innerHTML = msg;

                }
            });
        }
    </script>



@stop



