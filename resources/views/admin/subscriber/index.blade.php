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
<div><h4>Newsletter Subscriber List</h4></div>
@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
    <p>{{ $message }}</p>
</div>
@endif
</div>
<table class="table table-bordered">
<tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>
@foreach($subscribers as $subscriber)
     <tr>
        <td>{{$subscriber->id}}</td>
        <td>{{$subscriber->name}}</td>
        <td>{{$subscriber->email}}</td>
        <td>
            <form action="{{ route('subscriber.destroy',$subscriber->id) }}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit" class="fa fa-times fa-2x text-danger"></button>
            </form>
        </td>
    </tr>
@endforeach
</table>
{{$subscribers->links()}}
</body>
</html>


@endsection
