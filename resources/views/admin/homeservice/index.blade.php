
@extends('admin.layout.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>P roducts</title>
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
<div><h4>Manage Services</h4></div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{route('services.create')}}"> Create Service</a>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
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
    <th>Action</th>
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
    <td>
        <form action="{{ route('services.destroy',$service->id) }}" method="Post">
            <a href="{{ route('services.edit',$service->id) }}"><i class="fa fa-edit fa-2x text-info"></i></a>
            @csrf
            @method('DELETE')
            <button type="submit" class="fa fa-times fa-2x text-danger"></button>
        </form>
    </td>
</tr>
@endforeach
</table>
{{$services->links()}}
</body>
</html>

@endsection
