@extends('admin.layout.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Payment Records</title>
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
    <h4>Payment Search Result</h4>
</div>
<div style="width:30%; margin-top:10px; margin-bottom:10px;">
    <form type="get" action="{{url('/payersearch')}}">
        <div class="form-group">
            <input type="search" name="query" class="form-control" placeholder="Search PayerId...">
        </div>
        <button class="btn btn-primary">Search</button>
    </form>
</div>
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Payment Id</th>
<th>Payer Id</th>
<th>Payer Email</th>
<th>Amount</th>
<th>Currency</th>
<th>Payment Status</th>
</tr>
@foreach ($payments as $payment)
<tr>
<td>{{ $payment->id }}</td>
<td>{{ $payment->payment_id }}</td>
<td>{{ $payment->payer_id }}</td>
<td>{{ $payment->payer_email }}</td>
<td>{{ $payment->amount }}</td>
<td>{{ $payment->currency }}</td>
<td>{{ $payment->payment_status }}</td>
</tr>
@endforeach
</table>
{{$payments->links()}}
</div>
</body>
</html>


@endsection
