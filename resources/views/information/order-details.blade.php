@extends('layout.moderator-main')

@section('title')
    Order details
@endsection

@section('content')
    <div class="container-fluid content-area">
        <div class="panel">
            <div class="panel-heading">
                <h4>Order details</h4>
            </div>
            <div class="panel-body">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>Order information</h5>
                        </div>
                        <div class="panel-body">
                            <table class="table table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>63556</td>
                                    <td>Product name</td>
                                    <td>10</td>
                                    <td>12000</td>
                                    <td>120000</td>
                                </tr>
                                <tr>
                                    <td>63556</td>
                                    <td>Product name</td>
                                    <td>10</td>
                                    <td>12000</td>
                                    <td>120000</td>
                                </tr>
                                <tr>
                                    <td>63556</td>
                                    <td>Product name</td>
                                    <td>10</td>
                                    <td>12000</td>
                                    <td>120000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><label>Net total</label></td>
                                    <td><label>36000</label></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <form>
                                <input type="submit" class="btn btn-danger" value="Cancel">
                                <input type="submit" class="btn btn-success pull-right" value="Process">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>Shipping details</h5>
                        </div>
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <td><label>Full name</label></td>
                                </tr>
                                <tr>
                                    <td><label>Order date</label></td>
                                </tr>
                                <tr>
                                    <td><label>Email address</label></td>
                                </tr>
                                <tr>
                                    <td><label>Contact no</label></td>
                                </tr>
                                <tr>
                                    <td><label>Full address</label></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>