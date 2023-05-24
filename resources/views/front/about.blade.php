@extends('front.layout.master')

@section('content')

        <div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>About Us</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
                <img src="assets/img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="paddings">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Some words about us</h3>
                                <p>Booking home services saves you the time and effort required to search for professionals, contact them individually, and coordinate schedules. Instead, you can simply book the service online or through a mobile app, and the service provider will come to your home at the scheduled time. Home service providers are skilled and experienced in their respective fields. They have the knowledge and tools required to perform the job efficiently and effectively. By booking professionals, you can be confident that the work will be done correctly and up to the required standards.</p>
                                <h3>Why we are different</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list-styles">
                                            <li><i class="fa fa-check"></i> <a href="#">Best Service</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Book Service in Affordable Price</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Insurance And Warrenty</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Access to Specialized Services</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-styles">
                                            <li><i class="fa fa-check"></i> <a href="#">Quality Results</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Served Within Time Period</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Great Experience</a></li>
                                            <li><i class="fa fa-check"></i> <a href="#">Expertise and Professionalism</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="single-carousel">
                                    <div class="img-hover">
                                        <div class="overlay"> <a href="img/gallery-2/1.jpg" class="fancybox"><i
                                                    class="fa fa-plus-circle"></i></a></div>
                                        <img src="assets/img/gallery-2/1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="img-hover">
                                        <div class="overlay"> <a href="img/gallery-2/2.jpg" class="fancybox"><i
                                                    class="fa fa-plus-circle"></i></a></div>
                                        <img src="assets/img/gallery-2/2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="img-hover">
                                        <div class="overlay"> <a href="img/gallery-2/3.jpg" class="fancybox"><i
                                                    class="fa fa-plus-circle"></i></a></div>
                                        <img src="assets/img/gallery-2/3.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_info overflow-hidde">
                <video class="bg_video" preload="auto" autoplay="autoplay" loop="" muted="" poster="img/slide/4.jpg"
                    data-setup="{}">
                    <source src="img/video/video.mp4" type="video/mp4">
                    <source src="img/video/video.webm" type="video/webm">
                </video>
                <div class="opacy_bg_02 padding-bottom">
                    <div class="container wow fadeInUp">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="titles">
                                            <h2><span>¿</span>Why <span>Book</span> in HomeSewa<span>?</span></h2>
                                            <i class="fa fa-plane"></i>
                                            <hr class="tall">
                                        </div>
                                    </div>
                                </div>
                                <p>Certain home services, such as electrical and plumbing work, can be dangerous if not handled properly. Hiring a professional ensures that the job is carried out safely, minimizing the risk of accidents or damage to your property. Home services can be time-consuming, especially if you lack the necessary skills or experience. By outsourcing these tasks to professionals, you free up your time to focus on other priorities or simply enjoy your leisure time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-twitter">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
