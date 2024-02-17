@extends('admin.includes.Template')

@section('content')

    @php

        $userId = Auth::id();

        $get_user_data = Helper::get_user_data($userId);

        $get_permission_data = Helper::get_permission_data($get_user_data->role_id);

        $edit_perm = [];

        if ($get_permission_data->editperm != '') {
            $edit_perm = $get_permission_data->editperm;

            $edit_perm = explode(',', $edit_perm);
        }

    @endphp



    <div class="content container-fluid">



        <!-- Page Header -->

        <div class="page-header">

            <div class="row align-items-center">

                <div class="col">

                    <h3 class="page-title">Blog</h3>

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a>

                        </li>

                        <li class="breadcrumb-item active">Blog</li>

                    </ul>

                </div>

                @if (in_array('12', $edit_perm))
                    <div class="col-auto">
                        <a class="btn btn-primary me-1" href="{{ route('blog.create') }}">

                            <i class="fas fa-plus"></i> Add Blog

                        </a>

                        {{-- <a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">

                        <i class="fas fa-filter"></i> Filter

                    </a> --}}

                        <a class="btn btn-danger me-1" href="javascript:void('0');" onclick="delete_category();">

                            <i class="fas fa-trash"></i> Delete

                        </a>


                    </div>
                @endif

            </div>

        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">

                <strong>Success!</strong> {{ $message }}

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

            </div>
        @endif

        <div class="alert alert-success alert-dismissible fade show success_show" style="display: none;">

            <strong>Success! </strong><span id="success_message"></span>

            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert"></button> -->

        </div>


        <div class="row">

            <div class="col-sm-12">

                <div class="card card-table">

                    <div class="card-body">

                        <form id="form" action="{{ route('delete_blog') }}" enctype="multipart/form-data">

                            <INPUT TYPE="hidden" NAME="hidPgRefRan" VALUE="<?php echo rand(); ?>">

                            @csrf

                            <div class="table-responsive">

                                <table class="table table-center table-hover" id="example">

                                    <thead class="thead-light">

                                        <tr>

                                            <!-- <th>Select</th> -->
                                            <th>Select</th>
                                            <th>Blog Title</th>
                                            <th>Page Url</th>
                                            <th>Blog Name</th>
                                            {{-- <th>User Image</th> --}}
                                            <th>Date</th>
                                            <th>List Image</th>
                                            <th>Detail Image</th>
                                            <th>Set As Home</th>
                                            <th>Set Order</th>

                                            @if (in_array('12', $edit_perm))
                                                <th class="text-right">Actions</th>
                                            @endif

                                        </tr>

                                    </thead>

                                    <tbody>



                                        @if ($blog_data != '' && count($blog_data) > 0)

                                            @foreach ($blog_data as $data)
                                                <tr>

                                                    <td>

                                                        <input name="selected[]" id="selected[]" value="{{ $data->id }}"
                                                            type="checkbox" class="minimal-red"
                                                            style="height: 20px;width: 20px;border-radius: 0px;cms: red;">

                                                    </td>


                                                    <td>
                                                        {{ $data->title }}
                                                    </td>
                                                    <td>
                                                        {{ $data->page_url }}
                                                    </td>
                                                    <td>
                                                        {{ $data->name }}
                                                    </td>
                                                   
                                                    {{-- <td>
                                                        <img src="{{ url('public/upload/blog/user_image/large/' . $data->user_image) }}"
                                                            width="50px" height="50px">
                                                    </td> --}}

                                                    <td>
                                                        @php
                                                            $carbonDate = \Illuminate\Support\Carbon::parse($data->date);
                                                        @endphp

                                                        {{ $carbonDate->format('d-m-Y') }}
                                                    </td>

                                                    <td>
                                                        <img src="{{ url('public/upload/blog/list_image/large/' . $data->list_image) }}"
                                                            width="50px" height="50px">
                                                    </td>
                                                    <td>
                                                        <img src="{{ url('public/upload/blog/detail_image/large/' . $data->detail_image) }}"
                                                            width="50px" height="50px">
                                                    </td>

                                                    <td>
                                                        <input type="checkbox" id="set_as_home" name="set_as_home"
                                                            value="1" onclick="setashome('{{ $data->id }}', this)"
                                                            @if ($data->set_as_home == '1') checked @endif />
                                                    </td>
    
                                                    <td class="left"><input type="text" value="{{ $data->set_order }}"
                                                        onchange="updateorder_popup(this.value, '{{ $data->id }}');"
                                                        class="form-control" />
                                                    </td>


                                                    @if (in_array('12', $edit_perm))
                                                        <td class="text-right">

                                                            <a class="btn btn-primary"
                                                                href="{{ route('blog.edit', $data->id) }}"><i
                                                                    class="far fa-edit"></i></a>

                                                        </td>
                                                    @endif

                                                </tr>
                                            @endforeach

                                    </tbody>
                                @else
                                    <tr>

                                        <td class="text-center" colspan="8">{{ 'No Data Found !' }}</td>

                                    </tr>

                                    @endif

                                </table>



                                <div class="d-flex justify-c mt-2" style="float: right;">



                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@stop

@section('footer_js')


    <!-- Delete  Modal -->

    <div class="modal custom-modal fade" id="delete_model" role="dialog">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="modal-icon text-center mb-3">

                        <i class="fas fa-trash-alt text-danger"></i>

                    </div>

                    <div class="modal-text text-center">

                        <!-- <h3>Delete Expense Category</h3> -->

                        <p>Are you sure want to delete?</p>

                    </div>

                </div>

                <div class="modal-footer text-center">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    <button type="button" class="btn btn-primary" onclick="form_sub();">Delete</button>

                </div>

            </div>

        </div>

    </div>

    <!-- /Delete Modal -->



    <!-- Select one record Category Modal -->

    <div class="modal custom-modal fade" id="select_one_record" role="dialog">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="modal-text text-center">

                        <h3>Please select at least one record to delete</h3>

                        <!-- <p>Are you sure want to delete?</p> -->

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- /Select one record Category Modal -->

    <!-- sale Modal -->
    <div class="modal custom-modal fade custom_css_model" id="blog_model" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-text text-center">
                        <h3 id="blog_poup_text"></h3>
                        <input type="hidden" name="blog_val" id="blog_val" value="">
                        <input type="hidden" name="blog_id" id="blog_id" value="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary" onclick="set_as_homes();">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /sale Modal -->



    <!-- set order Modal -->

    <div class="modal custom-modal fade" id="set_order_model" role="dialog">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-body">

                    <div class="modal-text text-center">

                        <h3>Are you sure you want to Set order of Blog</h3>

                        <input type="hidden" name="set_order_val" id="set_order_val" value="">

                        <input type="hidden" name="set_order_id" id="set_order_id" value="">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

                        <button type="button" class="btn btn-primary" onclick="updateorder();">Yes</button>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- /set orderModal -->








    <script>
        function delete_category() {

            // alert('test');



            var checked = $("#form input[name='selected[]']:checked").length > 0;

        if (!checked) {

            $('#select_one_record').modal('show');

        } else {

            $('#delete_model').modal('show');

        }

        }



        function form_sub() {

            $('#form').submit();

        }
    </script>
    <script>
        
       function updateorder_popup(val, id) {

            $('#set_order_val').val(val);

            $('#set_order_id').val(id);

            $('#set_order_model').modal('show');

            }



            function updateorder() {

            var id = $('#set_order_id').val();

            var val = $('#set_order_val').val();

            $.ajax({

                type: "POST",

                url: "{{ url('set_order_blog') }}",

                data: {

                    "_token": "{{ csrf_token() }}",

                    "id": id,

                    "val": val

                },

                success: function(returnedData) {

                    // alert(returnedData);

                    if (returnedData == 1) {

                        // alert('yes');

                        $('#success_message').text("Set Order has been Updated successfully");

                        //$('.success_show').show();

                        $('.success_show').show().delay(0).fadeIn('show');

                        $('.success_show').show().delay(5000).fadeOut('show');



                        $('#set_order_model').modal('hide');

                    }

                }

            });



            }

    </script>
     <script>
        function setashome(id, value) {

            //   alert(id + " " + value);

            $('#blog_id').val(id);

            if (value.checked) {
                $('#blog_val').val('1');
                $('#blog_poup_text').text("Are You Sure You Want Set As Home");
                $('#blog_model').modal('show');
            } else {
                $('#blog_val').val('0');
                $('#blog_poup_text').text("Are You Sure You Want to remove From Set As Home");
                $('#blog_model').modal('show');
            }
        }

        function set_as_homes() {


            var id = $('#blog_id').val();
            var val_new = $('#blog_val').val();

            //    alert(val_new + " " + id);


            $.ajax({
                type: "POST",
                url: "{{ url('set_as_home_blog') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id,
                    "val": val_new
                },
                success: function(returnedData) {

                    if (returnedData == 1) {

                        //  alert('yes');

                        $('#success_message').text("Set As Home has been Updated successfully");
                        $('.success_show').show().delay(0).fadeIn('show');
                        $('.success_show').show().delay(5000).fadeOut('show');
                        $('#blog_model').modal('hide');
                    }
                }
            });

        }
    </script>

    <script>
        if ($.fn.DataTable.isDataTable('#example')) {
            $('#example').DataTable().destroy();
        }

        $(document).ready(function() {
            $('#example').dataTable({
                "searching": true
            });
        })
    </script>

@stop
