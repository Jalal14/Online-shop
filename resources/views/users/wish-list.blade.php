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
            <div class="heading"><h3>Wish list</h3></div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @forelse($wishList as $wish)
                    <tr>
                        <td><img class="list-image" src="{{asset('images')}}/{{$wish->image}}"></td>
                        <td>{{$wish->name}}<br> <a href="{{route('home.productDetails', [$wish->product_id])}}">Add to cart</a> </td>
                        <td>{{$wish->sell_price}}</td>
                        <td>{{$wish->status_name}}</td>
                        <td><a href="{{route('wish.destroy', [$wish->product_id])}}">Remove</a> </td>
                    </tr>
                    @empty
                    @endforelse
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <a href="#"><button type="button" class="btn btn-success pull-right">PROCEED TO CHECKOUT</button> </a>
        </div>
    </div>
@endsection