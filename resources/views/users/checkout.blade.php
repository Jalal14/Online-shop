@extends('layout.user-main')

@section('title')
    TuringShop - Checkout
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/productsStyle.css">
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productScript.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="details-body">
            {{--<div id="customer_type_section" class="panel panel-default">--}}
                {{--<div class="panel-heading">--}}
                    {{--<h4>Checkout options</h4>--}}
                {{--</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{--<div class="radio">--}}
                                {{--<label><input type="radio" name="optradio" id="registered_radio" checked>Registered account</label>--}}
                            {{--</div>--}}
                            {{--<div class="radio">--}}
                                {{--<label><input type="radio" name="optradio" id="guest_radio">Guest account</label>--}}
                            {{--</div>--}}
                            {{--<input type="submit" name="submit" value="Continue" class="btn btn-primary">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6 col-sm-6" id="login_section">--}}
                            {{--<h3>Registered customer</h3>--}}
                            {{--<p>I am a registered customer</p>--}}
                            {{--<form>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="login-email">E-Mail</label>--}}
                                    {{--<input type="text" name="login-email"  placeholder="E-Mail" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="login-password">Password</label>--}}
                                    {{--<input type="password" name="login-password" placeholder="Password" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<a href="#">Forgot password</a>--}}
                                {{--</div>--}}
                                {{--<input type="submit" name="submit" value="Login" class="btn btn-primary">--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <form method="post">
                {{csrf_field()}}
                <div id="registered_customer_section" class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Delivery details</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="select_address">
                                <div class="radio">
                                    <label><input type="radio" name="existing_address" id="existing_address_radio" value="1" checked>Use my existing address</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="existing_address" id="another_address_radio" value="2">Another address</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 another_address_section">
                                <div class="form-group">
                                    <label class="control-label" for="_name">Name</label>
                                    <input type="text" name="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="email">E-Mail</label>
                                    <input type="text" name="email" placeholder="Email" class="form-control">
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="delivery-mobile">Mobile no</label>--}}
                                    {{--<input type="number" name="delivery-mobile" placeholder="Mobile no" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="delivery-mobile-2">Mobile no (2)</label>--}}
                                    {{--<input type="number" name="delivery-mobile-2" placeholder="Mobile no (2)" class="form-control">--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-md-6 col-sm-6 another_address_section">
                                <div class="form-group">
                                    <label class="control-label" for="mobile">Mobile no</label>
                                    <input type="text" name="mobile" placeholder="Mobile no" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="mobile2">Mobile no (2)</label>
                                    <input type="text" name="mobile2" placeholder="Mobile no (2)" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 another_address_section">
                                <div class="form-group">
                                    <label class="control-label" for="address">Address</label>
                                    <input type="text" name="address" placeholder="Address" class="form-control">
                                </div>
                            </div>
                            {{--<div class="col-md-6 col-sm-6 another_address_section">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="delivery-address">Address</label>--}}
                                    {{--<input type="text" name="delivery-address" placeholder="Address" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="radio-inline">--}}
                                        {{--<input type="radio" name="area" checked>Inside Dhaka--}}
                                    {{--</label>--}}
                                    {{--<label class="radio-inline">--}}
                                        {{--<input type="radio" name="area">Outside of Dhaka--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                                {{--<input type="submit" name="continue" value="Continue" class="btn btn-primary">--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                {{--<div id="guest_customer_section" class="panel panel-default">--}}
                    {{--<div class="panel-heading">--}}
                        {{--<h4>Delivery details</h4>--}}
                    {{--</div>--}}
                    {{--<div class="panel-body">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-6 col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="delivery-name">Name</label>--}}
                                    {{--<input type="text" name="delivery-name" placeholder="Name" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="delivery-email">E-Mail</label>--}}
                                    {{--<input type="text" name="delivery-email" placeholder="Email" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="delivery-mobile">Mobile no</label>--}}
                                    {{--<input type="number" name="delivery-mobile" placeholder="Mobile no" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="delivery-mobile-2">Mobile no (2)</label>--}}
                                    {{--<input type="number" name="delivery-mobile-2" placeholder="Mobile no (2)" class="form-control">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 col-sm-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="delivery-address">Address</label>--}}
                                    {{--<input type="text" name="delivery-address" placeholder="Address" class="form-control">--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="radio-inline">--}}
                                        {{--<input type="radio" name="area">Dhaka--}}
                                    {{--</label>--}}
                                    {{--<label class="radio-inline">--}}
                                        {{--<input type="radio" name="area">Outside of dhaka--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                                {{--<input type="submit" name="continue" value="Continue" class="btn btn-primary">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div id="guest-customer-section" class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Confirm order</h4>
                    </div>
                    <div class="panel-body">
                        <h4>Pay your bill to 01xxxxxxxxx by send money on bKash</h4>
                        <div class="form-group">
                            <label class="control-label" for="transaction-no">Transaction no</label>
                            <input type="text" name="transaction_no" placeholder="Transaction no" class="form-control">
                        </div>
                        <input type="submit" value="Confirm" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection