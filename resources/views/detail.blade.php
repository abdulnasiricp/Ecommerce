@extends('master')
@section('content')
<br>
<br>
<br>
<div class="container container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <!-- <img class="detail-img" src="{{$product['gallery']}}" alt=""> -->
            <img class="detail-img" src="{{ asset($product['gallery']) }}" alt="{{$product['name']}}">

        </div>
        <div class="col-sm-6">
            <h2>{{$product['name']}}</h2>
            <h4>Price: {{$product['price']}}</h4>
            <h5>Category: {{$product['category']}}</h5>
            <h6>Details: {{$product['description']}}</h6>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <form action="/add_to_cart" method="POST">
                        @csrf
                        <input type="hidden" name="products_id" value="{{$product['id']}}">
                        <button class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-success">Buy Now</button>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection