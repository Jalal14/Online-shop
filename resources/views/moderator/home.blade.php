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
                            <span><img src="{{asset('images')}}/admin/shopping-trolley.png"></span>
                            <h2 class="pull-right">2</h2>
                        </div>
                        <div class="tile-footer">
                            <a href="/admin/orders">View more.....</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
                    <div class="tile tile-primary">
                        <div class="tile-heading">TOTAL ORDERS</div>
                        <div class="tile-body">
                            <span><img src="{{asset('images')}}/admin/shopcartapply.png"></span>
                            <h2 class="pull-right">2</h2>
                        </div>
                        <div class="tile-footer">
                            <a href="/admin/orders">View more.....</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
                    <div class="tile tile-primary">
                        <div class="tile-heading">TOTAL SALES</div>
                        <div class="tile-body">
                            <span><img src="{{asset('images')}}/admin/user-icon.png"></span>
                            <h2 class="pull-right">2</h2>
                        </div>
                        <div class="tile-footer">
                            <a href="#">View more.....</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6" class="activity-banner">
                    <div class="tile tile-primary">
                        <div class="tile-heading">TOTAL SALES</div>
                        <div class="tile-body">
                            <span><img src="{{asset('images')}}/admin/user-icon.png"></span>
                            <h2 class="pull-right">2</h2>
                        </div>
                        <div class="tile-footer">
                            <a href="#">View more.....</a>
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
                                <th>#</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jalal</td>
                                <td>Pending</td>
                                <td>13-07-17</td>
                                <td>120000</td>
                                <td><a href="#">Action</a></td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection