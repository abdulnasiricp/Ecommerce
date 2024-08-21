@extends('master')

@section('content')

<div class="trending-wrapper">
    <h4>Results of Products</h4>
    @foreach ($products as $item)
        <a href="detail/{{$item['id']}}">
            <div class="trending-item">
                <img class="treding-img" src="{{$item['gallery']}}">
                <p>{{$item['name']}}</p>
            </div>
        </a>
    @endforeach
</div>

@endsection