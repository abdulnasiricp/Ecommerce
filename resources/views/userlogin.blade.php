@extends('master')

@section('content')
<br>
<br>
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 d-flex justify-content-center align-items-start">
      <form action="userlogin" method="POST" style="width: 100%">
        @csrf
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
      </form>
    </div>
  </div>
</div>
@endsection