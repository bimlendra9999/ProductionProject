@extends('front.layout.master')

@section('content')

<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Contact Us</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-central">
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <aside>
                                    <address>
                                        <strong>HomeSewa Pvt.Ltd Nepal</strong><br>
                                        <i class="fa fa-map-marker"></i><strong>Address: </strong>Kathmandu, Nepal<br>
                                        <i class="fa fa-phone"></i><strong>Phone: </strong> +9779898989898
                                    </address>
                                    <address>
                                        <strong>HomeSewa Emails</strong><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:contact@homesewa.com.np"> contact@homesewa.com.np</a><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:support@homesewa.com.np"> support@homesewa.com.np</a>
                                    </address>
                                </aside>
                                <hr class="tall">
                            </div>
                            <div class="col-md-8">
                                <h3>Contact Form</h3>
                                <p class="lead">
                                </p>
                                <form id="contactform" class="form-theme" action="http://localhost:8000/sendcontactmail"
                                    method="post">
                                    <input type="hidden" name="_token" value="2NHPrBqKScv73zvhqc7UbyDOvtsWZNm2dbOyAkqx">
                                    <input type="text" placeholder="Name" name="name" id="name" required="">
                                    <input type="email" placeholder="Email" name="email" id="email" required="">
                                    <input type="text" placeholder="Phone" name="phone" id="phone" required="">
                                    <input type="text" placeholder="Location" name="location" id="autocomplete"
                                        required="">
                                    <textarea placeholder="Your Message" name="message" id="message"
                                        required=""></textarea>
                                    <input type="submit" name="Submit" value="Send Message" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
