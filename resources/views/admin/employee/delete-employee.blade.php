@extends('layout.moderator-main')

@section('title')
    remove employee
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Employee</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6" id="product-table">
                    <div class="heading">
                        <h3>Remove employee</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>Username: </td>
                                <td><label>admin</label></td>
                            </tr>
                            <tr>
                                <td>Name: </td>
                                <td>Alex</td>
                            </tr>
                            <tr>
                                <td>Email: </td>
                                <td>example@ecommerce.com</td>
                            </tr>
                            <tr>
                                <td>Role: </td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><label>Are you sure to delete?</label></td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="row">
                        <input type="submit" class="btn btn-danger btn-md pull-right" value="Remove">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection