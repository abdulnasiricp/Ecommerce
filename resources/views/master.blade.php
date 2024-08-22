<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Commerce </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container-fluid">
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
    </div>
</body>
<style>
    img.slider-img{
        height: 300px !important;
        width: 100%;
    }

    .treding-img{
        height: 100px;
    }

    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }

    .detail-img{
        height: 250px;
        margin: 30px;
    }


   
    
</style>
</html>

