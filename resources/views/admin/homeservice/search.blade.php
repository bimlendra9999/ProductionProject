
@extends('admin.layout.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Services</title>
    <style>
        nav svg {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
        .sclist{
            list-style:none;
        }
        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }
        .slink i{
            font-size:17px;
            margin-left: 13px;
        }
    </style>
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div><h4>Services Search Result</h4></div>
<div style="width:30%; margin-top:10px;">
    <form type="get" action="{{url('/servicesearch')}}">
        <div class="form-group">
            <input type="search" name="query" class="form-control" placeholder="Search Service...">
        </div>
        <button class="btn btn-primary">Search</button>
    </form>
</div>
</div>
<table class="table table-bordered">
<tr>
    <th>#</th>
    <th>Image</th>
    <th>Name</th>
    <th>price</th>
    <th>status</th>
    <th>Featured</th>
    <th>Category</th>
    <th>Created At</th>
</tr>
@foreach($services as $service)
<tr>
    <td>{{$service->id}}</td>
    <td><img src="{{asset('images/services/thumbnails')}}/{{$service->thumbnail}}" width="60" /></td>
    <td>{{$service->name}}</td>
    <td>{{$service->price}}</td>
    <td>
        @if($service->status)
            Active
        @else
            Inactive
        @endif
    </td>
    <td>
        @if($service->featured)
            Yes
        @else
            No
        @endif
    </td>
    <td>{{$service->category->name}}</td>
    <td>{{$service->created_at}}</td>
</tr>
@endforeach
</table>
{{$services->links()}}
</body>
</html>

@endsection
