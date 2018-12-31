@extends('layout.moderator-main')

@section('title')
    Admin - add quantity
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1><a href="{{route('product.show', [$product->id])}}">{{$product->name}}</a> </h1>
            </div>
        </div>
        <div class="container-fluid">
            <form method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" id="product-table">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="heading">
                                    <h3>Add quantity</h3>
                                </div>
                                <div class="table-responsive col-lg-8 col-md-8 col-sm-8">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>Name: </td>
                                            <td><label>{{$product->name}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Unit price: </td>
                                            <td><label>{{$product->sell_price}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Quantity: </td>
                                            <td><input type="number" class="form-control" name="quantity"></td>
                                        </tr>
                                        <tr>
                                            <td>Buying price: </td>
                                            <td><input type="text" class="form-control" name="total"></td>
                                        </tr>
                                        <tr>
                                            <td>Category: </td>
                                            <td><label>{{$product->category_name}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Company: </td>
                                            <td><label>{{$product->company_name}}</label></td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <img src="{{asset('images')}}/{{$product->image}}" class="img-thumbnail img-responsive" alt="{{$product->name}}">
                                </div>
                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                        <p class="error">* {{$error}}</p>
                                    @endforeach
                                @endif
                                @if(session('msg'))
                                    <span class="error">{{session('msg')}}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <a href="{{ url()->previous() }}"><button class="btn btn-danger pull-left">BACK</button></a>
                        <button type="submit" class="btn btn-success pull-right" name="submit" value="ADD">ADD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection