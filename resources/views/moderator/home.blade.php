@extends('layout.moderator-main')

@section('title')
    Home
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Dashboard</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
                    <div class="tile tile-primary">
                        <div class="tile-heading">CURRENT ORDERS</div>
                        <div class="tile-body">
                            <a href="{{route('information.orders')}}"><span><img src="{{asset('images')}}/admin/shopping-trolley.png"></span></a>
                            <h2 class="pull-right">{{$currentOrders}}</h2>
                        </div>
                        <div class="tile-footer">
                            <a href="{{route('information.orders')}}">View more.....</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
                    <div class="tile tile-primary">
                        <div class="tile-heading">PROCESSING</div>
                        <div class="tile-body">
                            <a href="{{route('information.processing')}}"><span><img src="{{asset('images')}}/admin/processing.png"></span></a>
                            <h2 class="pull-right">{{$totalprocessing}}</h2>
                        </div>
                        <div class="tile-footer">
                            <a href="{{route('information.processing')}}">View more.....</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
                    <div class="tile tile-primary">
                        <div class="tile-heading">TOTAL DELIVERED</div>
                        <div class="tile-body">
                            <a href="{{route('information.delivered')}}"><span><img src="{{asset('images')}}/admin/shopcartapply.png"></span></a>
                            <h2 class="pull-right">{{$totaldelivers}}</h2>
                        </div>
                        <div class="tile-footer">
                            <a href="{{route('information.delivered')}}">View more.....</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
                    <div class="tile tile-primary">
                        <div class="tile-heading">TOTAL RETURNS</div>
                        <div class="tile-body">
                            <a href="{{route('information.returns')}}"><span><img src="{{asset('images')}}/admin/return.png"></span></a>
                            <h2 class="pull-right">{{$totalreturns}}</h2>
                        </div>
                        <div class="tile-footer">
                            <a href="{{route('information.returns')}}">View more.....</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" id="activity-table">
                    <div class="heading">
                        <h3>Latest orders</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id </th>
                                <th>Total unit</th>
                                <th>Total price</th>
                                <th>Order date</th>
                                {{--<th>Deliver date</th>--}}
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($invoiceList as $invoice)
                                <tr>
                                    <td>{{$invoice->id}}</td>
                                    <td>{{$invoice->quantity}}</td>
                                    <td>{{$invoice->price}}</td>
                                    <td>{{$invoice->order_date}}</td>
{{--                                    <td>{{$invoice->acc_date}}</td>--}}
                                    <td>{{$invoice->status_name}}</td>
                                    <td><a href="{{route('information.process', [$invoice->id])}}">Process</a></td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        {{ $invoiceList->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection