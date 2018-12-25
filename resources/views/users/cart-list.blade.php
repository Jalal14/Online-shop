@extends('layout.user-main')

@section('title')
    TuringShop - Details
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/productsStyle.css">
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productScript.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="heading"><h3>Cart list</h3></div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Action</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td><img class="list-image" src="{{asset('images')}}/products/1.jpg"></td>
                        <td>asdfh <br> <a href="#">Edit</a> </td>
                        <td><a href="#">Remove</a> </td>
                        <td>12055415</td>
                        <td>2</td>
                        <td>545644765</td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <h3 class="pull-right">Grand total: 54545646546</h3>
        </div>
        <div class="row">
            <a href="{{route('user.checkout')}}"><button type="button" class="btn btn-success pull-right">PROCEED TO CHECKOUT</button> </a>
        </div>
    </div>
@endsection