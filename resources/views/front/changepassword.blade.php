@include('front.includes.header')


<!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Change Password</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Change Password</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

	<section class="blog-area pb-40 pt-40">
        <div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
				
					@include('front.sidebar_profile')
                        
                    </div>
					
					<div class="col-lg-8 col-md-12">
						<aside class="widget-area widget-left-sidebar">
                            <section class="widget widget_categories">
							
								<div class="row">
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="register-form">
                           
                            <form id="changepassword"  action="{{ route('update-password') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="uid" id="uid" value="{{ Session::get('userdata')['userid']}}">
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="text" class="form-control" placeholder="Enter Old Password" value="" name="old_pass" id="old_pass">
                                            <p id="old_pass_error" style="display: none;color: red"></p>
                                            </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="text" class="form-control" placeholder="Enter New Password" value="" name="new_pass" id="new_pass">
                                            <p id="new_pass_error" style="display: none;color: red"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="text" class="form-control" placeholder="Enter Confirm Password" value="" name="conf_pass" id="conf_pass">
                                            <p id="conf_pass_error" style="display: none;color: red"></p>
                                        </div>
                                    </div>
                                    <p id="match_error" style="display: none;color: red"></p>
                                  

                                </div>

                               
                                
                                
                                <button type="button" class="btn btn-primary" onClick="javascript:change_pass_vali(); ">Update</button>

                            
                            </form>
                        </div>
                    </div>
                </div>
								
							</section>	
                        </aside>
					</div>
			</div>
		</div>
	</section>
@include('front.includes.footer')

<script type="text/javascript">
    function change_pass_vali(){

        var old_pass = jQuery("#old_pass").val();
        if (old_pass == '') {
            jQuery('#old_pass_error').html("Please Enter Old Password");
            jQuery('#old_pass_error').show().delay(0).fadeIn('show');
            jQuery('#old_pass_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                                    scrollTop: $('#old_pass').offset().top - 150
                                }, 1000);
                                return false;
                            }

        $.ajax({
            type: 'POST',
            url: "{{ url('check-login') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "email_id": "{{ Session::get('userdata')['email']}}",
                "password": old_pass
            },
            success: function(response) {
                if (response == "0") {
                    $("#old_pass_error").html("Please Enter Correct Old Password");
                    $('#old_pass_error').show().delay(0).fadeIn('show');
                    $('#old_pass_error').show().delay(2000).fadeOut('show');
                    // $('#email').val('');
                    $('html, body').animate({
                                    scrollTop: $('#old_pass_error').offset().top - 150
                                }, 1000);
                                return false;
                            }else{

                    var new_pass = jQuery("#new_pass").val();
                    if (new_pass == '') {
                        jQuery('#new_pass_error').html("Please Enter New Password");
                        jQuery('#new_pass_error').show().delay(0).fadeIn('show');
                        jQuery('#new_pass_error').show().delay(2000).fadeOut('show');
                        $('html, body').animate({
                                    scrollTop: $('#new_pass').offset().top - 150
                                }, 1000);
                                return false;
                            }

                    var conf_pass = jQuery("#conf_pass").val();
                    if (conf_pass == '') {
                        jQuery('#conf_pass_error').html("Please Enter Confirm Password");
                        jQuery('#conf_pass_error').show().delay(0).fadeIn('show');
                        jQuery('#conf_pass_error').show().delay(2000).fadeOut('show');
                        $('html, body').animate({
                                    scrollTop: $('#conf_pass').offset().top - 150
                                }, 1000);
                                return false;
                            }

                    if(new_pass != conf_pass){
                        jQuery('#match_error').html("New Password & Confirm Password doesn't Match");
                        jQuery('#match_error').show().delay(0).fadeIn('show');
                        jQuery('#match_error').show().delay(2000).fadeOut('show');
                        $('html, body').animate({
                                    scrollTop: $('#conf_pass').offset().top - 150
                                }, 1000);
                                return false;
                            }

                    // alert('test');
                    $("#changepassword").submit();
                }
            }
        });
    }
</script>

