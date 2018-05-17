@extends('layout.user-main')

@section('title')
    TuringShop - Checkout
@endsection

@section('content')
    <div class="container" id="profile-area">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#account-dashboard">Account dashboard</a></li>
                            <li><a data-toggle="tab" href="#update-account">Update account</a></li>
                            <li><a data-toggle="tab" href="#orders">My orders</a></li>
                        </ul>
                        <div class="tab-content profile-content">
                            <div id="account-dashboard" class="tab-pane fade in active">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>User information</h4></div>
                                    <div class="panel-body">
                                        <table>
                                            <tr>
                                                <td><label>Full name</label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Email address</label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Full address</label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Contact no</label></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="update-account" class="tab-pane fade">
                                <div class="panel panel-default col-lg-8 col-md-8 col-sm-8">
                                    <div class="panel-heading"><h4>Update information</h4></div>
                                    <div class="panel-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" value="Full name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" value="Email address" name="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address:</label>
                                                <input type="text" class="form-control" value="Full address" name="address">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Address:</label>
                                                <input type="text" class="form-control" value="Mobile number" name="contact">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="form-control btn btn-success" value="Update">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="orders" class="tab-pane fade">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h4>Order history</h4></div>
                                    <div class="panel-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Order id</th>
                                                    <th>Shiping address</th>
                                                    <th>Date</th>
                                                    <th>Order total</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>564654</td>
                                                    <td>Full address goes here</td>
                                                    <td>14-5-2018</td>
                                                    <td>564645</td>
                                                    <td>Delivered</td>
                                                </tr>
                                                <tr>
                                                    <td>564654</td>
                                                    <td>Full address goes here</td>
                                                    <td>14-5-2018</td>
                                                    <td>564645</td>
                                                    <td>Delivered</td>
                                                </tr>
                                                <tr>
                                                    <td>564654</td>
                                                    <td>Full address goes here</td>
                                                    <td>14-5-2018</td>
                                                    <td>564645</td>
                                                    <td>Delivered</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection