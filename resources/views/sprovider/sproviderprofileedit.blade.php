@extends('sprovider.layout.master')

@section('content')

<div class="container mt-2">
<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Edit Profile</h1>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                   <div class="row">
                                        <div class="col-md-12">
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                        @endif
                                            <form action="{{route('sprovider.update_profile', $sprovider->id)}}" class="form-horizontal" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            @method('PUT')
                                                <div class="col-xs-12 col-sm-9">
                                                    <div class="form-group">
                                                        <strong>Image</strong>
                                                        <input type="file" class="form-control" name="image" id="image"/>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-9">
                                                    <div class="form-group">
                                                        <strong>About</strong>
                                                            <textarea class="form-control" name="about">{{$sprovider->about}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-9">
                                                    <div class="form-group">
                                                        <strong>City</strong>
                                                            <input type="text" class="form-control" name="city" value="{{$sprovider->city}}"/>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-9">
                                                    <div class="form-group">
                                                        <strong>Service Category</strong>
                                                            <select class="form-control" name="service_category_id">
                                                                @foreach($scategories as $scategory)
                                                                    <option value="{{$scategory->id}}" {{ $scategory->id == $sprovider->service_category_id ? 'selected' : '' }}>{{$scategory->name}}</option>
                                                                @endforeach
                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-9">
                                                    <div class="form-group">
                                                        <strong>Service Location Zipcode/Pincode: </strong>
                                                            <input type="text" class="form-control" name="service_locations" value="{{$sprovider->service_locations}}"/>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-9">
                                                <button type="submit" class="btn btn-success pull-right">Update Profile</button>
                                                </div>

                                            </form>
                                        </div>
                                   </div>
                                </div>
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</div>

@endsection
