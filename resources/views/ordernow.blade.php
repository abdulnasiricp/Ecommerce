@extends('master')

@section('content')
<br>

<div class="trending-wrapper row">
    <h4>Payment Details</h4>
    <div class="col-sm-8">


        <table class="table">
            <tr>
                <td>Amount</td>
                <td>Rs. {{$totalprice}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>Rs. 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>Rs. 1000</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>Rs. {{$totalprice + 1000}}</td>
            </tr>
        </table>

        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="address" class="form-control" placeholder="Enter address"></textarea>
                </div>
                
                <div class="form-group">
                    <h3><label for="pmt">Payment Methods</label></h3>
                    <p> <input type="radio" value="cash" name="payment"><span> Online Payment</span></p>
                    <p><input type="radio" value="cash" name="payment"><span> Payment on Delivery</span></p>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection