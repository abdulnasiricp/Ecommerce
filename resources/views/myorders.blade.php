@extends('master')

@section('content')

<div class="container">
    <br>
    <br>
    <br>
    <h4>My Orders</h4>
    <div class="row">
        @foreach ($orders as $item)
            <div class="col-sm-3">
                <div class="trending-item">
                    <img class="treding-img" src="{{$item->gallery}}">
                </div>
            </div>
            <div class="col-sm-3">
                <p>Name: {{$item->name}}</p>
                <p>Address: {{$item->address}}</p>
                <p>Delivery Status: {{$item->status}}</p>
                <p>Payment Method: {{$item->payment_method}}</p>
                <p>Payment Status: {{$item->payment_status}}</p>
            </div>
            <div class="col-12">
                <hr> <!-- Divider -->
            </div>
        @endforeach 
    </div>
</div>
@endsection