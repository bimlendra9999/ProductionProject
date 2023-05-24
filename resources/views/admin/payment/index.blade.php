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
    <h4>All Payment Records</h4>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-primary" role="alert">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Payment Id</th>
<th>Payer Id</th>
<th>Payer Email</th>
<th>Amount</th>
<th>Currency</th>
<th>Payment Status</th>
<th>Action</th>
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
<td>
    <form action="{{ route('payment.destroy',$payment->id) }}" method="Post">
        @csrf
        @method('DELETE')
        <button type="submit" class="fa fa-times fa-2x text-danger"></button>
    </form>
</td>
</tr>
@endforeach
</table>
{{$payments->links()}}
</div>
</body>
</html>


@endsection
