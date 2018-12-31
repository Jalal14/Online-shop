@extends('layout.moderator-main')

@section('title')
    Admin - add product
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
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="heading">
                                    <h3>Product info</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>Name: </td>
                                            <td><input class="form-control" type="text" name="name" value="{{old('name')}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Total Buying Price: </td>
                                            <td><input type="text" class="form-control" name="totalPrice" value="{{old('totalPrice')}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Unit selling Price: </td>
                                            <td><input type="text" class="form-control" name="price" value="{{old('price')}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Quantity: </td>
                                            <td><input type="number" class="form-control" name="quantity" value="{{old('quantity')}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Discount (%): </td>
                                            <td><input type="text" class="form-control" name="discount" value="{{old('discount')}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Image: </td>
                                            <td><input type="file" class="form-control" id="file-upload" name="image"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><img class="img-thumbnail img-responsive" id="admin-photo"></td>
                                        </tr>
                                        <tr>
                                            <td>Category: </td>
                                            <td>
                                                <select class="form-control" name="category">
                                                    @forelse($categoryList as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Company: </td>
                                            <td>
                                                <select class="form-control" name="company">
                                                    @forelse($companyList as $company)
                                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status: </td>
                                            <td>
                                                <select class="form-control" name="status">
                                                    @forelse($statusList as $status)
                                                        <option value="{{$status->id}}">{{$status->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            {{--<div class="col-lg-2 col-md-2 col-sm-12">--}}
                                {{--<div class="heading">--}}
                                    {{--<h3>Photo</h3>--}}
                                {{--</div>--}}
                                {{--<img class="img-thumbnail img-responsive" id="admin-photo">--}}
                            {{--</div>--}}
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="heading">
                                    <h3>Product details</h3>
                                </div>
                                {{--<div class="table-responsive specification-wrapper">--}}
                                    {{--<table class="table">--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<td><input class="form-control" type="text" name="details[]"></td>--}}
                                            {{--<td><input type="button" class="remove-specification btn btn-danger" value="Remove"></td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td><input type="button" class="add-details-button btn btn-success pull-right" value="Add new field"></td>--}}
                                            {{--<td></td>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                    {{--</table>--}}
                                {{--</div>--}}
                                <div class="details-wrapper">
                                    <div class="form-group row details-area">
                                        <div class="col-md-9 col-sm-9">
                                            <input type="text" class="form-control details-text" name="details[]" placeholder="Product details">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="button" class="remove-details btn btn-danger" value="Remove">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <input type="button" class="add-details btn btn-success pull-right" value="Add new field">
                                    </div>
                                </div>
                                <div class="heading">
                                    <h3>Product specification</h3>
                                </div>
                                {{--<div class="table-responsive">--}}
                                    {{--<table class="table">--}}
                                        {{--<thead>--}}
                                        {{--<tr>--}}
                                            {{--<th>Title</th>--}}
                                            {{--<th>Description</th>--}}
                                        {{--</tr>--}}
                                        {{--<tr id="specification-area">--}}
                                            {{--<td><input class="form-control" type="text" name="specTitle[]"></td>--}}
                                            {{--<td><input class="form-control" type="text" name="specDesc[]"></td>--}}
                                        {{--</tr>--}}
                                        {{--<tr>--}}
                                            {{--<td></td>--}}
                                            {{--<td><input type="button" class="add-specification-button btn btn-success" value="Add new field"></td>--}}
                                        {{--</tr>--}}
                                        {{--</thead>--}}
                                    {{--</table>--}}
                                {{--</div>--}}
                                <div class="specification-wrapper">
                                    <div class="form-group row specification-area">
                                        <div class="col-md-3 col-sm-3">
                                            <input type="text" class="form-control specification-text" name="specTitle[]" placeholder="Title">
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <input type="text" class="form-control specification-text" name="specDesc[]" placeholder="Description">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="button" class="remove-specification btn btn-danger" value="Remove">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <input type="button" class="add-specification btn btn-success pull-right" value="Add new field">
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
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <input type="submit"  class="btn btn-primary btn-block" name="submit" value="ADD">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection