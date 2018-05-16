@extends('layout.moderator-main')

@section('title')
    product list
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
                        <a href="/admin/add-product"><button type="button" class="btn btn-primary btn-md pull-right">ADD NEW</button></a>
                    </div>
                    <div class="heading">
                        <h3>Product list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('images')}}/products/imac.png" class="image-content" alt="iMAC"></td>
                                <td>iMAC</td>
                                <td>380000</td>
                                <td>50</td>
                                <td>Desktop</td>
                                <td>Apple</td>
                                <td><a href="/admin/update-product">Update</a> | <a href="/admin/delete-product">Delete</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('images')}}/products/imac.png" class="image-content" alt="iMAC"></td>
                                <td>iMAC</td>
                                <td>380000</td>
                                <td>50</td>
                                <td>Desktop</td>
                                <td>Apple</td>
                                <td><a href="/admin/update-product">Update</a> | <a href="/admin/delete-product">Delete</a></td>
                            </tr>
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
                                <td><input type="checkbox" id="select_all_categories"> All categories</td>
                            </tr>
                            <tr>
                                <td><input class="categories_checkbox" type="checkbox" name="categories[]"> Laptop</td>
                            </tr>
                            <tr>
                                <td><input class="categories_checkbox" type="checkbox" name="categories[]"> Desktop</td>
                            </tr>
                            <tr>
                                <td><input class="categories_checkbox" type="checkbox" name="categories[]"> Mobile</td>
                            </tr>
                            <tr>
                                <td><input class="categories_checkbox" type="checkbox" name="categories[]"> Tablets</td>
                            </tr>
                            <tr>
                                <td><input class="categories_checkbox" type="checkbox" name="categories[]"> Camera</td>
                            </tr>
                            <tr>
                                <td class="heading"><h3>Company</h3></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" id="select_all_companies"> All companies</td>
                            </tr>
                            <tr>
                                <td><input class="companies_checkbox" type="checkbox" name="companies[]"> Apple</td>
                            </tr>
                            <tr>
                                <td><input class="companies_checkbox" type="checkbox" name="companies[]"> Huawei</td>
                            </tr>
                            <tr>
                                <td><input class="companies_checkbox" type="checkbox" name="companies[]"> Sony</td>
                            </tr>
                            <tr>
                                <td><input class="companies_checkbox" type="checkbox" name="companies[]"> Samsung</td>
                            </tr>
                            <tr>
                                <td><input class="companies_checkbox" type="checkbox" name="companies[]"> HP</td>
                            </tr>

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