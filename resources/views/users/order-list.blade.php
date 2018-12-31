@extends('layout.user-main')

@section('title')
    TuringShop - Orders
@endsection

@section('content')
    <div class="container" id="profile-area">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Order history</h4></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Unit price</th>
                                <th>Discount</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($orderList as $order)
                                <tr>
                                    <td><a href="{{route('home.productDetails', [$order->id])}}"><img class="list-image" src="{{asset('images')}}/{{$order->image}}"></a></td>
                                    <td><a href="{{route('home.productDetails', [$order->id])}}">{{$order->name}}</a></td>
                                    <td>{{$order->unit_price}}</td>
                                    <td>{{$order->sold_discount}} %</td>
                                    <td>{{$order->quantity}}</td>
                                    <td>{{$order->total}}</td>
                                </tr>
                            @empty
                            @endforelse
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><h4><strong>Grand Total</strong></h4></td>
                                <td><h4><strong>{{$grandTotal}}</strong></h4></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection