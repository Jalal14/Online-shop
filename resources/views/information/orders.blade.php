@extends('layout.moderator-main')

@section('title')
    order list
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Sales</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9" id="product-table">
                    <div class="heading">
                        <h3>Orders</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sl </th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>abc</td>
                                <td>Pending</td>
                                <td>500000</td>
                                <td>17-8-17</td>
                                <td><a href="#">Process</a></td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" id="search-area">
                    <div class="heading">
                        <h3>Search orders</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>Date from: <input type="date"></td>
                                <td>Date from: <input type="date"></td>
                            </tr>
                            <tr>
                                <td>Min price: <input type="number" name="min_price"></td>
                                <td>Max price: <input type="number" name="max_price"></td>
                            </tr>
                            <tr>
                                <td>Min quantity: <input type="number" name="min_qnt"></td>
                                <td>Max quantity: <input type="number" name="max_qnt"></td>
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
                                <td></td>
                                <td></td>
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