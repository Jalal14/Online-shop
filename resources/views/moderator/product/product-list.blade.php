@extends('layout.moderator-main')

@section('title')
    Admin - product list
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
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
                <div class="col-lg-9 col-md-9 col-sm-9" id="product-table">
                    <div class="row">
                        <a href="{{route('product.create')}}"><button type="button" class="btn btn-primary btn-md pull-right">ADD NEW</button></a>
                    </div>
                    <div class="heading">
                        <h3>Product list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name (Update)</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Available</th>
                                <th>Sold</th>
                                <th>Add date</th>
                                <th>Category</th>
                                <th>Company</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @forelse($productList as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td><img src="{{asset('images')}}/{{$product->image}}" class="image-content" alt="{{$product->name}}"></td>
                                    <td><label><a href="{{route('product.show', [$product->id])}}">{{$product->name}}</a></label></td>
                                    <td>{{$product->sell_price}}</td>
                                    <td>{{$product->discount}}%</td>
                                    <td>{{$product->available}}</td>
                                    <td>{{$product->sold}}</td>
                                    <td>{{$product->added}}</td>
                                    <td>{{$product->category_name}}</td>
                                    <td>{{$product->company_name}}</td>
                                    <td>{{$product->status_name}}</td>
                                    <td><a href="{{route('product.addQuantity', [$product->id])}}">Add quantity</a> | <a href="{{route('product.edit', [$product->id])}}">Update</a>
                                        @if(session()->has('loggedAdmin'))
                                            <br><a href="#">Delete</a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" id="search-area">
                    <div class="heading">
                        <h3>Search product</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <td><label for="p_name">Name</label></td>
                                <td><input type="text" name="p_name"></td>
                            </tr>
                            <tr>
                                <td><label for="min_price">Min price</label></td>
                                <td><input type="number" name="min_price"></td>
                            </tr>
                            <tr>
                                <td><label for="max_price">Max price</label></td>
                                <td><input type="number" name="max_price"></td>
                            </tr>
                            <tr>
                                <td><label for="min_qnt">Min quantity</label></td>
                                <td><input type="number" name="min_qnt"></td>
                            </tr>
                            <tr>
                                <td><label for="max_qnt">Max quantity</label></td>
                                <td><input type="number" name="max_qnt"></td>
                            </tr>
                            <tr>
                                <td class="heading"><h3>Category</h3></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="select_all_categories" checked> All categories
                                    </label>
                                </td>
                            </tr>
                            @forelse($categoryList as $category)
                                <tr>
                                    <td>
                                        <label class="checkbox-inline">
                                            <input class="categories_checkbox" type="checkbox" name="categories[]" value="{{$category->id}}" checked> {{$category->name}}
                                        </label>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            <tr>
                                <td class="heading"><h3>Company</h3></td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" id="select_all_companies" checked> All companies
                                    </label>
                                </td>
                            </tr>
                            @forelse($companyList as $company)
                                <tr>
                                    <td>
                                        <label class="checkbox-inline">
                                            <input class="companies_checkbox" type="checkbox" name="companies[]" value="{{$company->id}}" checked> {{$company->name}}
                                        </label>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            <tr>
                                <td></td>
                                <td><button type="button" class="btn btn-primary btn-md">Search</button></td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection