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
        <div class="row details-body">
            <div class="col-md-8 col-sm-12" id="details-body">
                <div id="content">
                    <div class="wish-icon">
                        <a href="#"><img class="img-responsive pull-right" src="{{asset('images')}}/wish-icon.png"></a>
                    </div>
                    <div class="thumbnail">
                        <img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/imac.png">
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#product-details">Details</a></li>
                    <li><a data-toggle="tab" href="#product-specification">Specifications</a></li>
                </ul>

                <div class="tab-content">
                    <div id="product-details" class="tab-pane fade in active">
                        <h3>This is heading of details</h3>
                        <br>
                        <ul>
                            <li>This is first delails</li>
                            <li>This is second delails</li>
                            <li>This is third delails</li>
                            <li>This is fourth delails</li>
                        </ul>
                    </div>
                    <div id="product-specification" class="tab-pane fade">
                        <h3>This is heading of specification</h3>
                        <br>
                        <ul>
                            <li>This is first specification</li>
                            <li>This is second specification</li>
                            <li>This is third specification</li>
                            <li>This is fourth specification</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12" id="order">
                <h3>iMAC</h3>
                <h4>Brand: <a href="#">Apple</a></h4>
                <h4>Availability: In stock</h4>
                <h3>&lrm;Price: ৳1,200.00</h3>
                <form>
                    <table>
                        <tr>
                            <td><h4> Quantity: </h4></td>
                            <td><input type="number" name="uantity" value="1" id="quantity"></td>
                        </tr>
                        <tr>
                            <td><h4> Total price: &nbsp;৳</h4></td>
                            <td><h4 id="total_price">1200</h4></td>
                        </tr>
                    </table>
                    <a href="/checkout"><input type="submit" class="btn btn-primary btn-block" name="submit" value="Add to cart"></a>
                </form>
            </div>
        </div>
    </div>