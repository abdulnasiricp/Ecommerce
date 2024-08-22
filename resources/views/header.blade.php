<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem()
?>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" >
  <div class="container-fluid" >
    <!-- Left-aligned links -->
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/myorders">My Orders</a>
      </li>
    </ul>

    <!-- Center-aligned search bar -->
    <form class="d-flex mx-auto" action="/search">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search.." name="query">
        <button class="btn btn-primary" type="submit">Search</button>
      </div>
    </form>

    <!-- Right-aligned "Cart" link -->
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
        @if (Session::has('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="/logout">Logout</a></li>
        </ul>
        </li>
      @else
      <li><a class="nav-link" href="/login">Login</a></li>
      
      <li><a class="nav-link" href="/register">Register</a></li>


    @endif
      </li>
    </ul>
  </div>
</nav>
