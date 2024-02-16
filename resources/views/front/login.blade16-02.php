@include('front.includes.header')

<section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Login</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Login</li>
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
                            <h2>Login</h2>

                            <form class="bg-light-gray padding-4-rem-all lg-margin-35px-top md-padding-2-half-rem-all" action="{{ route('signin') }}" id="login-form" method="POST">
                            @csrf
                            <input type="hidden" name="action" id="action" value="user-login">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                                        <a href="{{url('/signup')}}" class="lost-your-password">Register</a>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">
                                        <a href="{{url('/lost-password')}}" class="lost-your-password">Lost your password?</a>
                                    </div>
                                </div>
                                <span id="login-error" class="error alert-message valierror" style="display: none;"></span>
                                <button type="submit" onclick="loginForm();return false;">Log In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Profile Authentication Area -->
@include('front.includes.footer')

<script>
    function loginForm(){

       // alert("TYest");
       
        var email = $("#email").val();
        if (email == ''){
            $('#login-error').html("Please Enter E-mail");
            $('#login-error').show().delay(0).fadeIn('show');
            $('#login-error').show().delay(2000).fadeOut('show');
            return false;
        }
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email)) {
            jQuery('#login-error').html("Please Enter Valid E-mail.");
            jQuery('#login-error').show().delay(0).fadeIn('show');
            jQuery('#login-error').show().delay(2000).fadeOut('show');
            return false;
        }
        var password = jQuery("#password").val();
        if (password == ''){
           
            jQuery('#login-error').html("Please Enter Password");
            jQuery('#login-error').show().delay(0).fadeIn('show');
            jQuery('#login-error').show().delay(2000).fadeOut('show');
            return false;
        }
        $.ajax({
            type: 'POST',
            url: "{{ url('check-login') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "email_id": email,
                "password": password
            },
            success: function(response) {
                if (response == "0") {
                    $("#login-error").html("Username Or Password is Incorrect.");
                    $('#login-error').show().delay(0).fadeIn('show');
                    $('#login-error').show().delay(2000).fadeOut('show');
                    $('#email').val('');
                    return false;
                }else{

                    $.ajax({
                    type: 'POST',
                    url: "{{ url('check-isactive') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "email_id": email,
                    },
                    success: function(message) {
                        if (message == "0") {
                            $("#login-error").html("This account is not active by Admin");
                            $('#login-error').show().delay(0).fadeIn('show');
                            $('#login-error').show().delay(2000).fadeOut('show');
                            $('#email').val('');
                            return false;
                        }else{
                            $("#login-form").submit();
                        }
                    }
                });
                    // $("#login-form").submit();
                }
            }
        });
    
    }
</script>
