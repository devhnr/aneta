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

                            <form>
                                <div class="form-group">
                                    <label>Username or email</label>
                                    <input type="text" class="form-control" placeholder="Username or email">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                                        <a href="{{url('/signup')}}" class="lost-your-password">Register</a>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password-wrap">
                                        <a href="{{url('/lost-password')}}" class="lost-your-password">Lost your password?</a>
                                    </div>
                                </div>

                                <button type="submit">Log In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Profile Authentication Area -->
@include('front.includes.footer')
