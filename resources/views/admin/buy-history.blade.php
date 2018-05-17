@extends('layout.moderator-main')

@section('title')
    employee list
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
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
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="heading">
                        <h3>Buy list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Company</th>
                                <th>Date</th>
                                <th>Quantity</th>
                                <th>Total price</th>
                            </tr>
                            <tr>
                                <td><img class="img-thumbnail img-responsive img-employee" src="{{asset('images')}}/msi.png"></td>
                                <td>IMac</td>
                                <td>Desktop</td>
                                <td>Apple</td>
                                <td>2018-04-24</td>
                                <td>20</td>
                                <td>654646456</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Date
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>From: </td>
                                    <td><input type="date" name="fromDate"></td>
                                    <td>To: </td>
                                    <td><input type="date" name="toDate"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn btn-success" value="Search"></td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category
                        </div>
                        <div class="panel-body">
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Company
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
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
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection