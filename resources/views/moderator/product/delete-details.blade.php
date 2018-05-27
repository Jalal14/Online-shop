@extends('layout.moderator-main')

@section('title')
    Admin - delete detail
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
                        <input type="hidden" name="id" value="{{$details->id}}">
                        <input type="hidden" name="product" value="{{$product->id}}">
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
                                            <td>Unit selling Price: </td>
                                            <td><label>{{$product->sell_price}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Discount (%): </td>
                                            <td><label>{{$product->discount}}</label></td>
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
                                <div class="heading">
                                    <h3>Details</h3>
                                </div>
                                <label>{{$details->details}}</label><br>
                                <label class="error">Are you sure you want to delete this detail?</label>
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
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <input type="submit"  class="btn btn-danger btn-block" name="submit" value="DELETE">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection