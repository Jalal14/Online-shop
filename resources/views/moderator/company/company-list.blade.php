@extends('layout.moderator-main')

@section('title')
    company list
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Company</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9" id="product-table">
                    <div class="row">
                        <a href="/admin/add-company"><button type="button" class="btn btn-primary btn-md pull-right">ADD NEW</button></a>
                    </div>
                    <div class="heading">
                        <h3>Company list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{asset('images')}}/company/apple-logo.png"  class="image-content"></td>
                                <td>Apple</td>
                                <td><a href="/admin/update-company">Update</a> | <a href="/admin/delete-company" class="image-content">Delete</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td  class="image-content"><img src="{{asset('images')}}/company/huawei-logo.png"  class="image-content"></td>
                                <td>Huawei</td>
                                <td><a href="/admin/update-company">Update</a> | <a href="/admin/delete-company">Delete</a></td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" id="search-area">
                    <div class="heading">
                        <h3>Search by category</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
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
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection