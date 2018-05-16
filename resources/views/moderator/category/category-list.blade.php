@extends('layout.moderator-main')

@section('title')
    category list
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Category</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9" id="product-table">
                    <div class="row">
                        <a href="/admin/add-category"><button type="button" class="btn btn-primary btn-md pull-right">ADD NEW</button></a>
                    </div>
                    <div class="heading">
                        <h3>Category list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Desktop</td>
                                <td><a href="/admin/update-category">Update</a> | <a href="/admin/delete-category">Delete</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Laptop</td>
                                <td><a href="/admin/update-category">Update</a> | <a href="/admin/delete-category">Delete</a></td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" id="search-area">
                    <div class="heading">
                        <h3>Search by company</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection