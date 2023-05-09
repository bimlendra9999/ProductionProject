@extends('admin.layout.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Categories</title>
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
<div><h4>Manage Category</h4></div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{route('categories.create')}}"> Create Category</a>
</div>
</div>
<table class="table table-bordered">
<tr>
    <th>#</th>
    <th>Image</th>
    <th>Name</th>
    <th>Slug</th>
    <th>Featured</th>
    <th>Action</th>
</tr>
@foreach($scategories as $scategory)
     <tr>
        <td>{{$scategory->id}}</td>
        <td><img src="{{asset('images/categories')}}/{{$scategory->image}}" width="60" /></td>
        <td>{{$scategory->name}}</td>
        <td>{{$scategory->slug}}</td>
        <td>
            @if($scategory->featured)
                Yes
            @else
                No
            @endif
        </td>
        <td>
            <form action="{{ route('categories.destroy',$scategory->id) }}" method="Post">
                <a href="{{ route('categories.edit',$scategory->id) }}"><i class="fa fa-edit fa-2x text-info"></i></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="fa fa-times fa-2x text-danger"></button>
            </form>
        </td>
    </tr>
@endforeach
</table>
{{$scategories->links()}}
</body>
</html>


@endsection
