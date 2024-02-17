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

                            <form>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>

                                


                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Profile Authentication Area -->
@include('front.includes.footer')
