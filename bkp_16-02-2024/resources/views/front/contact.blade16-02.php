@include('front.includes.header')
 <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h1>Contact Us</h1>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </section>

         <section class="contact-info-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <i class="flaticon-placeholder"></i>
                            </div>
                            <h3>Address</h3>
                            <p><a href="#" target="_blank">808, Shilp Zaveri,
Nr. Shyamal Cross Road, Satellite,
Ahmedabad-380015. Gujarat (INDIA)</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <i class="flaticon-phone-ringing"></i>
                            </div>
                            <h3>Phone</h3>
                            <p><a href="tel:16798">Hotline: 1800 572 1008</a></p>
                            <p><a href="tel:+1234567898">Phone: 9999999999</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <h3>Email</h3>
                            <p><a href="mailto:info@anetapharma.com">info@anetapharma.com</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="single-contact-info-box">
                            <div class="icon">
                                <i class="flaticon-clock"></i>
                            </div>
                           
                            <h3>Open 7 days</h3>
                            <p>8:00AM to 8:00PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="contact-form">
                            <span class="sub-title">Get In Touch</span>
                            <h2>Send a Message! </h2>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Mobile No.</label>
                                            <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" class="form-control" id="subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="default-btn">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- <div class="col-lg-4 col-md-12">
                        <div class="contact-image text-center">
                            <img src="assets/img/contact.png" alt="image">
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <div id="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d235226.37968270513!2d72.545063!3d22.898163!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8f3dcbc20b2d%3A0xa092107941dc5483!2sAneta%20Pharmaceuticals%20Pvt.%20Ltd.!5e0!3m2!1sen!2sus!4v1707470090115!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
@include('front.includes.footer')
