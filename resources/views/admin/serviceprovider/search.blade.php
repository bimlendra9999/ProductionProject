@extends('admin.layout.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Service Providers</title>
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
<div>
    <h4>ServiceProvider Search Result</h4>
</div>
<div style="width:30%; margin-top:10px; margin-bottom:10px;">
    <form type="get" action="{{url('/serviceprovidersearch')}}">
        <div class="form-group">
            <input type="search" name="query" class="form-control" placeholder="Search ServiceProvider...">
        </div>
        <button class="btn btn-primary">Search</button>
    </form>
</div>
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>User Registered</th>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->created_at }}</td>
</tr>
@endforeach
</table>
{{$users->links()}}
</div>
</body>
</html>


@endsection
