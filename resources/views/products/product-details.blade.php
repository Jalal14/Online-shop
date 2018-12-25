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
                        <a href={{route('wish.store', [$product->id])}}><img class="img-responsive pull-right" src="{{asset('images')}}/wish-icon.png"></a>
                    </div>
                    <div class="thumbnail">
                        <img class="img-thumbnail img-responsive" src="{{asset('images')}}/{{$product->image}}">
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#product-details">Details</a></li>
                    <li><a data-toggle="tab" href="#product-specification">Specifications</a></li>
                </ul>

                <div class="tab-content">
                    <div id="product-details" class="tab-pane fade in active">
                        <table class="table table-hover table-striped table-bordered table-responsive">
                            @forelse($detailsList as $detail)
                                <tr>
                                    <td>{{$detail->details}}</td>
                                </tr>
                            @empty
                            @endforelse
                        </table>
                    </div>
                    <div id="product-specification" class="tab-pane fade">
                        <table class="table table-hover table-striped table-bordered table-responsive">
                            @forelse($specificationList as $specification)
                                <tr>
                                    <td><label>{{$specification->title}}</label></td>
                                    <td>{{$specification->specification}}</td>
                                </tr>
                            @empty
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12" id="order">
                <h3>{{$product->name}}</h3>
                <h4>Brand: <a href="#">{{$product->company_name}}</a></h4>
                <h4>Category: <a href="#">{{$product->category_name}}</a></h4>
                <h4>Availability: {{$product->status_name}}</h4>
                <h3>&lrm;Price: ৳{{$product->sell_price}}</h3>
                <form>
                    <table>
                        <tr>
                            <td><h4> Quantity: </h4></td>
                            <td><input type="number" name="quantity" value="1" id="quantity"></td>
                        </tr>
                        <tr>
                            <td><h4> Total price: &nbsp;৳</h4></td>
                            <td><h4 id="total_price">{{$product->sell_price}}</h4></td>
                            <td><input type="hidden" id="unit_price" value="{{$product->sell_price}}"></td>
                        </tr>
                    </table>
                    <a href="/checkout"><input type="submit" class="btn btn-primary btn-block" name="submit" value="Add to cart"></a>
                </form>
            </div>
        </div>
    </div>
@endsection