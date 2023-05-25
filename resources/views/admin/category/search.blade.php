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
<div><h4>Category Search Result</h4></div>
<div style="width:30%; margin-top:10px;">
    <form type="get" action="{{url('/categorysearch')}}">
        <div class="form-group">
            <input type="search" name="query" class="form-control" placeholder="Search Category...">
        </div>
        <button class="btn btn-primary">Search</button>
        <br>
    </form>
</div>
</div>
<table class="table table-bordered">
<tr>
    <th>#</th>
    <th>Image</th>
    <th>Name</th>
    <th>Slug</th>
    <th>Featured</th>
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
    </tr>
@endforeach
</table>
{{$scategories->links()}}
</body>
</html>


@endsection
