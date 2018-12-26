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
        @if(session('msg'))
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>* {{session('msg')}}</strong>
            </div>
        @endif
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
                    @forelse($cartList as $cart)
                    <tr>
                        <td><a href="{{route('home.productDetails', [$cart->id])}}"><img class="list-image" src="{{asset('images')}}/{{$cart->image}}"></a></td>
                        <td><a href="{{route('home.productDetails', [$cart->id])}}">{{$cart->name}}</a></td>
                        <td><a href="{{route('cart.destroy', [$cart->id])}}">Remove</a> </td>
                        <td>{{$cart->sell_price}}</td>
                        <td>
                            <form method="post" action="{{route('cart.update')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$cart->id}}">
                                <span class="edit-cart">{{$cart->quantity}} <button class="btn btn-warning btn-sm pull-right">Edit</button></span>
                            </form>
                        </td>
                        <td><span class="pull-right">{{$cart->sub_total}}</span></td>
                    </tr>
                    @empty
                    @endforelse
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <h3 class="pull-right">Grand total: {{$grand_total}}</h3>
        </div>
        <div class="row">
            <a href="{{route('cart.clear')}}"><button type="button" class="btn btn-danger pull-left">CLEAR LIST</button> </a>
            <a href="{{route('user.checkout')}}"><button type="button" class="btn btn-success pull-right">PROCEED TO CHECKOUT</button> </a>
        </div>
    </div>
@endsection