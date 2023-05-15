@extends('front.layout.master')

@section('content')

<div class="section-title-01 honmob">
            <div class="bg_parallax image_01_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>{{$service->name}}</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>{{$service->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
            <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 single-blog">
                                <div class="post-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="post-header">
                                                <div class="post-format-icon post-format-standard"
                                                    style="margin-top: -10px;">
                                                    <i class="fa fa-image"></i>
                                                </div>
                                                <div class="post-info-wrap">
                                                    <h2 class="post-title"><a href="#" title="Post Format: Standard"
                                                            rel="bookmark">{{$service->name}}: {{$service->category->name}}</a></h2>
                                                    <div class="post-meta" style="height: 10px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="single-carousel">
                                                <div class="img-hover">
                                                    <img src="{{asset('images/services')}}/{{$service->image}}" alt="{{$service->name}}"
                                                        class="img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="post-content">
                                                <h3>{{$service->name}}</h3>
                                                <p>{{$service->description}}</p>
                                                <h4>Inclusion</h4>
                                                <ul class="list-styles">
                                                    @foreach(explode("|",$service->inclusion) as $inclusion)
                                                        <li>
                                                            <i class="fa fa-plus"></i>
                                                            {{$inclusion}}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <h4>Exclusion</h4>
                                                <ul class="list-styles">
                                                    @foreach(explode("|",$service->exclusion) as $exclusion)
                                                        <li>
                                                            <i class="fa fa-minus"></i>
                                                            {{$exclusion}}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <aside class="widget" style="margin-top: 18px;">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Booking Details</div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <td style="border-top: none;">Price</td>
                                                    <td style="border-top: none;"><span>&#36;</span>{{$service->price}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Category</td>
                                                    <td>{{$service->category->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Service</td>
                                                    <td>{{$service->name}}</td>
                                                </tr>
                                                @php
                                                    $total = $service->price;
                                                @endphp
                                                @if($service->discount)
                                                    @if($service->discount_type == 'fixed')
                                                        <tr>
                                                            <td>Discount</td>
                                                            <td>${{$service->discount}}</td>
                                                            @php $total = $total-$service->discount; @endphp
                                                        </tr>
                                                    @elseif($service->discount_type == 'percent')
                                                        <tr>
                                                            <td>Discount</td>
                                                            <td>%</td>
                                                            @php $total = $total-$service->discount; @endphp
                                                        </tr>
                                                    @endif
                                                @endif
                                                <tr>
                                                    <td>Total</td>
                                                    <td><span>&#36;</span>{{$total}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="panel-footer">
                                            <form action="{{route('payment')}}" method="POST">
                                                @csrf
                                                <div class="card-header bg-secondary border-0">
                                                    <h4 class="font-weight-semi-bold m-0">Payment</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <input type="hidden" name="amount" value="{{$service->price}}">
                                                    </div>
                                                </div>
                                                <div class="card-footer border-secondary bg-transparent">
                                                    <button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Book Now</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </aside>
                                <aside>
                                    @if($r_service)
                                        <h3>Related Service</h3>
                                        <div class="col-md-12 col-sm-6 col-xs-12 bg-dark color-white padding-top-mini"
                                            style="max-width: 360px">
                                            <a href="{{ url('/service-detail/'.$service->slug)}}">
                                                <div class="img-hover">
                                                    <img src="{{asset('images/services/thumbnails')}}/{{$r_service->thumbnail}}" alt="{{$r_service->name}}"
                                                        class="img-responsive">
                                                </div>
                                                <div class="info-gallery">
                                                    <h3>
                                                        {{$r_service->name}}
                                                    </h3>
                                                    <hr class="separator">
                                                    <p>{{$r_service->name}}</p>
                                                    <div class="content-btn"><a href="{{ url('/service-detail/'.$service->slug)}}"
                                                            class="btn btn-warning">View Details</a></div>
                                                    <div class="price"><span>&#36;</span><b>From</b>{{$r_service->price}}</div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
