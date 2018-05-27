@extends('layout.moderator-main')

@section('title')
    Admin - product details
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Products</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" id="product-table">
                    <form method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="asdf">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="heading">
                                    <h3>Product info</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>Name: </td>
                                            <td><label>{{$product->name}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Discount (%): </td>
                                            <td><label>{{$product->discount}}%</label></td>
                                        </tr>
                                        <tr>
                                            <td>Unit selling Price: </td>
                                            <td>
                                                @if($product->discount > 0)
                                                    <del>{{$product->sell_price}}</del><br>
                                                    <label>{{$product->discount_price}}</label>
                                                @else
                                                    <label>{{$product->sell_price}}</label>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Category: </td>
                                            <td><label>{{$product->category_name}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Company: </td>
                                            <td><label>{{$product->company_name}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Status: </td>
                                            <td><label>{{$product->status_name}}</label></td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                                <div class="heading">
                                    <h3>Photo</h3>
                                </div>
                                <img class="img-thumbnail img-responsive" id="admin-photo" src="{{asset('images')}}/{{$product->image}}">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#product-details">Details</a></li>
                                    <li><a data-toggle="tab" href="#product-specification">Specifications</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div id="product-details" class="tab-pane fade in active">
                                        <br>
                                        <table class="table table-hover table-striped table-bordered table-responsive">
                                        @forelse($details as $detail)
                                        <tr>
                                            <td>{{$detail->details}}</td>
                                        </tr>
                                        @empty
                                        @endforelse
                                        </table>
                                    </div>
                                    <div id="product-specification" class="tab-pane fade">
                                        <br>
                                        <table class="table table-hover table-striped table-bordered table-responsive">
                                        @forelse($specifications as $specification)
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
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="error">* {{$error}}</p>
                                @endforeach
                            @endif
                            @if(session('msg'))
                                <span class="error">{{session('msg')}}</span>
                            @endif
                        </div>
                        {{--<div class="col-lg-4 col-md-12 col-sm-12">--}}
                            {{--<input type="submit"  class="btn btn-primary btn-block" name="submit" value="UPDATE">--}}
                        {{--</div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection