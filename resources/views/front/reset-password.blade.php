@include('front.includes.header')

<section class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>Reset Password</h1>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Reset Password</li>
            </ul>
        </div>
    </div>
</section>



<!-- Start Profile Authentication Area -->
<section class="profile-authentication-area ptb-70">
    <div class="container">
        <div class="row">
            @if (session('messages'))
                <div class="alert alert-success" id="test">
                    {{ session('messages') }}
                </div>
            @endif
            <div class="col-lg-12 col-md-12">
                <div class="login-form">
                    <h2>Reset Password</h2>

                    <form class="bg-light-gray padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all"
                        action="{{ url('set_password', $uid) }}" id="reset-password" method="POST">
                        @csrf
                        <input type="hidden" name="action" id="action" value="reset-password">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="text" class="form-control" placeholder="Password" name="password"
                                id="password">
                            <p id="password_error" style="display: none;color: red"></p>

                        </div>

                        <div class="form-group">
                            <label>Confirm-Password</label>
                            <input type="text" class="form-control" placeholder="Confirm-Password" name="cpassword"
                                id="c_password">
                            <p id="cpassword_error" style="display: none;color: red"></p>

                        </div>
                        {{-- <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                                <a href="{{ url('/signin') }}" class="lost-your-password">Login</a>
                            </div>

                        </div> --}}

                        <button class="btn btn-primary mb-1" type="button" disabled id="spinner_button"
                            style="display: none;">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>
                        <button type="button" id="submit_button"
                            onclick="javascript:reset_password_validation()">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Profile Authentication Area -->
@include('front.includes.footer')

<script>
    function reset_password_validation() {

        // alert("TYest");

        var password = jQuery("#password").val();
        if (password == '') {
            jQuery('#password_error').html("Please Enter Password");
            jQuery('#password_error').show().delay(0).fadeIn('show');
            jQuery('#password_error').show().delay(2000).fadeOut(
                'show');
            $('html, body').animate({
                scrollTop: $('#password').offset().top - 150
            }, 1000);
            return false;
        }

        var c_password = jQuery("#c_password").val();
        if (c_password == '') {
            jQuery('#cpassword_error').html(
                "Please Enter Confirm-Password");
            jQuery('#cpassword_error').show().delay(0).fadeIn('show');
            jQuery('#cpassword_error').show().delay(2000).fadeOut(
                'show');
            $('html, body').animate({
                scrollTop: $('#c_password').offset().top - 150
            }, 1000);
            return false;
        }
        if (password != c_password) {
            jQuery('#cpassword_error').html(
                "Confirm Password Doesn't Match Password");
            jQuery('#cpassword_error').show().delay(0).fadeIn('show');
            jQuery('#cpassword_error').show().delay(2000).fadeOut(
                'show');
            $('html, body').animate({
                scrollTop: $('#c_password').offset().top - 150
            }, 1000);
            return false;
        }


        $('#spinner_button').show();
        $('#submit_button').hide();
        $('#reset-password').submit();



    }
</script>

<script>
    $(document).ready(function() {
        // Fade in the alert on page load
        $('#test').fadeIn('slow');

        // Set a timeout to fade out the alert after 3 seconds (adjust as needed)
        setTimeout(function() {
            $('#test').fadeOut('slow');
        }, 3000);
    });
</script>
