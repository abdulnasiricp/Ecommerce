@extends('master')

@section('content')

<div class="container">
    <br>
    <br>
    <br>
    <h4>Cart Products</h4>
    <a class="btn btn-success" href="/ordernow">Order Now</a>
    <br><br>
    <div class="row">
        <div class="col-sm-12">
            @foreach ($items as $item)
                <a href="cartdetail/{{$item->id}}">
                    <div class="trending-item">
                        <!-- <img class="treding-img" src="{{$item->gallery}}"> -->
                        <img class="treding-img" src="{{ asset($item->gallery) }}" alt="{{$item->name}}">
                        <p>{{$item->name}}</p>
                        <a class="btn btn-warning" href="removecart/{{$item->cart_id}}">Remove from cart</a>
                    </div>
                </a>
            @endforeach 
        </div>
    </div>
</div>
@endsection