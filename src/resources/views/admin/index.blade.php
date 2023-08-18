@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Products</h5>
                <p class="card-text">number of products: {{$products}}</p>
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Orders</h5>
                <p class="card-text">number of orders: {{$orders}}</p>
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bookings</h5>
                <p class="card-text">number of bookings: {{$bookings}}</p>
            </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Admins</h5>
                <p class="card-text">number of users: {{$users}}</p>
            </div>
        </div>
        </div>
    </div> 
@endsection