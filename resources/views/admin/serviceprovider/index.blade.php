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
    <h4>All Service Providers</h4>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>User Registered</th>
<th>Action</th>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->created_at }}</td>
<td>
    <form action="{{ route('serviceproviders.destroy',$user->id) }}" method="Post">
        @csrf
        @method('DELETE')
        <button type="submit" class="fa fa-times fa-2x text-danger"></button>
    </form>
</td>
</tr>
@endforeach
</table>
{{$users->links()}}
</div>
</body>
</html>


@endsection
