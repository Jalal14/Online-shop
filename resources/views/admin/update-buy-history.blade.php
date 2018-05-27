@extends('layout.moderator-main')

@section('title')
    Admin - update product
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Buy history</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" id="product-table">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="heading">
                                <h3>Product info</h3>
                            </div>
                            <div class="table-responsive">
                                <form method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$history->id}}">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>Name: </td>
                                            <td><label>{{$history->name}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Total Price: </td>
                                            <td><input type="text" class="form-control" name="total" value="{{$history->total_price}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Unit selling Price: </td>
                                            <td><input type="text" class="form-control" name="price" value="{{$history->sell_price}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Category: </td>
                                            <td><label>{{$history->category_name}}</label></td>
                                        </tr>
                                        <tr>
                                            <td>Company: </td>
                                            <td><label>{{$history->company_name}}</label></td>
                                        </tr>
                                        </thead>
                                    </table>
                                    <input type="submit"  class="btn btn-primary btn-block" name="submit" value="UPDATE">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="heading">
                                <h3>Photo</h3>
                            </div>
                            <img class="img-thumbnail img-responsive" id="admin-photo" src="{{asset('images')}}/{{$history->image}}">
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
                </div>
            </div>
        </div>
    </div>
@endsection