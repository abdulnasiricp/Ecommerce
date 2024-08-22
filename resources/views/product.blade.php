@extends('master')

@section('content')

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        @foreach ($products as $index => $item)
            <button type="button" data-bs-target="#demo" data-bs-slide-to="{{$index}}"
                class="{{$index == 0 ? 'active' : ''}}"></button>
        @endforeach
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        @foreach ($products as $item)

            <a href="detail/{{$item['id']}}">
                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                    <img src="{{$item['gallery']}}" class="d-block w-100 slider-img">
                    <div class="carousel-caption ">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </div>

            </a>
        @endforeach


        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</div>


<div class="trending-wrapper">
    <h3>Trending Products</h3>
    @foreach ($products as $item)
        <a href="detail/{{$item['id']}}">
            <div class="trending-item">
                <img class="treding-img" src="{{$item['gallery']}}">
                <p>{{$item['name']}}</p>
            </div>
        </a>
    @endforeach
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


@endsection