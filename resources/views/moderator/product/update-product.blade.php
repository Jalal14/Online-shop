@extends('layout.moderator-main')

@section('title')
    Admin - update product
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
                        <input type="hidden" name="id" value="{{$product->id}}">
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
                                            <td><input class="form-control" type="text" name="name" value="{{$product->name}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Unit selling Price: </td>
                                            <td><input type="text" class="form-control" name="price" value="{{$product->sell_price}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Discount (%): </td>
                                            <td><input type="text" class="form-control" name="discount" value="{{$product->discount}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Image: </td>
                                            <td><input type="file" class="form-control" id="file-upload" name="image"></td>
                                        </tr>
                                        <tr>
                                            <td>Category: </td>
                                            <td>
                                                <select class="form-control" name="category">
                                                    @forelse($categoryList as $category)
                                                        @if($category->id == $product->category)
                                                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                        @else
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endif
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
                                                        @if($company->id == $product->company)
                                                            <option value="{{$company->id}}" selected>{{$company->name}}</option>
                                                        @else
                                                            <option value="{{$company->id}}">{{$company->name}}</option>
                                                        @endif
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
                                                        @if($status->id == $product->status)
                                                            <option value="{{$status->id}}" selected>{{$status->name}}</option>
                                                        @else
                                                            <option value="{{$status->id}}">{{$status->name}}</option>
                                                        @endif
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </td>
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
                                    <h3>Product details</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                        @forelse($details as $detail)
                                            <tr id="details-area">
                                                <td class="col-lg-11 col-md-11 col-sm-11"><input class="form-control" type="text" name="details[]" value="{{$detail->details}}"></td>
                                                <td class="col-lg-1 col-md-1 col-sm-1"><a href="{{route('product.deleteDetails', [$detail->id])}}"><button type="button" class="btn btn-danger">Delete</button></a> </td>
                                            </tr>
                                        @empty
                                            <tr id="details-area">
                                                <td></td>
                                                <td><input class="form-control" type="text" name="details[]"></td>
                                            </tr>
                                        @endforelse
                                        <tr>
                                            <td></td>
                                            <td><input type="button" class="add-details-button btn btn-success pull-right" value="Add new field"></td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="heading">
                                    <h3>Product specification</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        @forelse($specifications as $specification)
                                            <tr id="specification-area">
                                                <td class="col-lg-3 col-md-3 col-sm-3"><input class="form-control" type="text" name="specTitle[]" value="{{$specification->title}}"></td>
                                                <td class="col-lg-8 col-md-8 col-sm-8"><input class="form-control" type="text" name="specDesc[]" value="{{$specification->specification}}"></td>
                                                <td class="col-lg-1 col-md-1 col-sm-1"><a href="{{route('product.deleteSpecification', [$specification->id])}}"><button type="button" class="btn btn-danger">Delete</button></a> </td>
                                            </tr>
                                        @empty
                                            <tr id="specification-area">
                                                <td><input class="form-control" type="text" name="specTitle[]"></td>
                                                <td><input class="form-control" type="text" name="specDesc[]"></td>
                                            </tr>
                                        @endforelse
                                        <tr>
                                            <td></td>
                                            <td><input type="button" class="add-specification-button btn btn-success" value="Add new field"></td>
                                        </tr>
                                        </thead>
                                    </table>
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
                            <input type="submit"  class="btn btn-primary btn-block" name="submit" value="UPDATE">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection