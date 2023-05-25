@extends('front.layout.master')

@section('content')
        <section class="content-central" style="margin-top:20px;">

            <div class="semiboxshadow text-center">
                <img src="{{asset('assets/img/img-theme/shp.png')}}" class="img-responsive')}}" alt="">
            </div>
            <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>HomeServices <span>Choice</span> of Services</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                            @foreach($fservices as $fservice)
                                <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="{{ url('/service-detail/'.$fservice->slug)}}">
                                        <div class="img-hover">
                                            <img src="{{asset('images/services/thumbnails')}}/{{$fservice->thumbnail}}" alt="{{$fservice->name}}"
                                                class="img-responsive">
                                        </div>
                                        <div class="info-gallery">
                                            <h3>{{$fservice->name}}</h3>
                                            <hr class="separator">
                                            <p>{{$fservice->tagline}}</p>
                                            <div class="content-btn"><a href="{{ url('/service-detail/'.$fservice->slug)}}"
                                                    class="btn btn-primary">Book Now</a></div>
                                            <div class="price"><span>&#36;</span><b>From</b>{{$fservice->price}}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </section>



@endsection

