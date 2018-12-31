@extends('layout.moderator-main')

@section('content')
    <div class="container-fluid content-area">
        <div class="col-lg-12 col-md-12 col-sm-12">
            @if(session('msg'))
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>* {{session('msg')}}</strong>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Shipping details</h3>
                </div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <td><label>Name: </label></td>
                            <td>{{$invoice->name}}</td>
                        </tr>
                        <tr>
                            <td><label>Email address: </label></td>
                            <td>{{$invoice->email}}</td>
                        </tr>
                        <tr>
                            <td><label>Contact no: </label></td>
                            <td>{{$invoice->phone1}}, {{$invoice->phone2}}</td>
                        </tr>
                        <tr>
                            <td><label>Address: </label></td>
                            <td>{{$invoice->address}}</td>
                        </tr>
                        <tr>
                            <td><label>Order date: </label></td>
                            <td>{{$invoice->order_date}}</td>
                        </tr>
                        <tr>
                            <td><label>Status: </label></td>
                            <td>{{$invoice->status_name}}</td>
                        </tr>
                        @if($invoice->acc_date)
                            <tr>
                                <td><label>Delvered date: </label></td>
                                <td>{{$invoice->acc_date}}</td>
                            </tr>
                            <tr>
                                <td><label>Prcessed by: </label></td>
                                <td>{{$sold_by->name}} ({{$sold_by->email}})</td>
                            </tr>
                        @endif
                        @if($invoice->status == 9 && $invoice->return_note)
                            <tr>
                                <td><label>Return note: </label></td>
                                <td><pre>{{$invoice->return_note}}</pre></td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Order information</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive table-hover">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($orderList as $order)
                            <tr>
                                <td><img src="{{asset('images')}}/{{$order->image}}" class="image-content" alt="{{$order->name}}"></td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->quantity}}</td>
                                <td>{{$order->unit_price}}</td>
                                <td>{{$order->total}}</td>
                            </tr>
                        @empty
                        @endforelse
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><label>Net total</label></td>
                            <td><label>{{$grandTotal}}</label></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    @yield('order')
                </div>
            </div>
        </div>
    </div>
@endsection