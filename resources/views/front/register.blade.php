@include('front.includes.header')
<section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Register</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </section>
<!-- Start Profile Authentication Area -->
        <section class="profile-authentication-area ptb-70">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="register-form">
                            <h2>Register</h2>

                            <form>
                                <h5>Shipping info</h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact Person</label>
                                            <input type="text" class="form-control" placeholder="Contact Person">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" placeholder="Email ID">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="text" class="form-control" placeholder="Confirm Password">
                                        </div>
                                    </div>

                                </div>

                                <h5>Company info</h5>

                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Name 1</label>
                                            <input type="text" class="form-control" placeholder="Owner Name 1">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode">
                                        </div>

                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Name 2</label>
                                            <input type="text" class="form-control" placeholder="Owner Name 2">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <input type="text" class="form-control" placeholder="Pincode">
                                        </div>

                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="text" class="form-control" placeholder="Contact No">
                                        </div>

                                    </div>

                                </div>
                                <h5>Document Upload</h5>

                                 <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>GST Certificate/ Professional TAX Certificate</label>
                                            <input type="file" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Owner Aadhar</label>
                                            <input type="file" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>PAN</label>
                                            <input type="file" class="form-control" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Pharmacy Licence</label>
                                            <input type="file" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-6 col-sm-6 remember-me-wrap">
                                        <a href="{{url('/signin')}}" class="lost-your-password">Login</a>
                                    </div>

                                </div>
                                

                                <!-- <p class="description">The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & )</p> -->

                                <button type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Profile Authentication Area -->
@include('front.includes.footer')
