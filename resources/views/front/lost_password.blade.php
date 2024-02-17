@include('front.includes.header')
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Lost Password</h1>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Lost Password</li>
            </ul>
        </div>
    </div>
</section>
<!-- Start Profile Authentication Area -->
<section class="profile-authentication-area ptb-70">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="login-form">
                    <h2>Lost Password</h2>
                    <form action="{{ url('resetpassword') }}" id="category_form" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" id="email" name="email" class="form-control"
                                placeholder="Email">
                            <p id="email_error" style="display: none;color: red"></p>
                        </div>
                        <button type="button" onclick="javascript:category_validation()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Profile Authentication Area -->
@include('front.includes.footer')

<script>
    function category_validation() {

        var email = jQuery("#email").val();
        if (email == '') {
            jQuery('#email_error').html("Please Enter Email");
            jQuery('#email_error').show().delay(0).fadeIn('show');
            jQuery('#email_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#email').offset().top - 150
            }, 1000);
            return false;
        }

        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email)) {

            jQuery('#email_error').html("Please Enter Valid Email");
            jQuery('#email_error').show().delay(0).fadeIn('show');
            jQuery('#email_error').show().delay(2000).fadeOut('show');
            $('html, body').animate({
                scrollTop: $('#email').offset().top - 150
            }, 1000);
            return false;

        }


        $.ajax({
            type: "post",
            url: "{{ url('email-check-login') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "email": email,

            },
            success: function(returndata) {
                if (returndata == 0) {

                    jQuery('#email_error').html("Please Enter Valid Email");
                    jQuery('#email_error').show().delay(0).fadeIn('show');
                    jQuery('#email_error').show().delay(2000).fadeOut('show');
                    $('html, body').animate({
                        scrollTop: $('#email').offset().top - 150
                    }, 1000);
                    return false;


                } else {


                    // alert(returndata);
                    $('#category_form').submit();


                }



            }
        });




    }
</script>
