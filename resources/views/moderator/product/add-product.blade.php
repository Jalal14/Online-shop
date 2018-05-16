@extends('layout.moderator-main')

@section('title')
    update product
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Add product</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" id="product-table">
                    <form method="post" enctype="multipart/form-data">
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
                                            <td><input type="text" name="p_name" value="iMAC"></td>
                                        </tr>
                                        <tr>
                                            <td>Price: </td>
                                            <td><input type="text" name="price" value="280000"></td>
                                        </tr>
                                        <tr>
                                            <td>Quantity: </td>
                                            <td><input type="text" name="quantity" value="50"></td>
                                        </tr>
                                        <tr>
                                            <td>Logo: </td>
                                            <td><input type="file" name="image"></td>
                                        </tr>
                                        <tr>
                                            <td>Category: </td>
                                            <td>
                                                <select name="cat">
                                                    <option>Desktop</option>
                                                    <option>Laptop</option>
                                                    <option>Mobile</option>
                                                    <option>Tablet</option>
                                                    <option>Camera</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Company: </td>
                                            <td>
                                                <select name="com">
                                                    <option>Apple</option>
                                                    <option>Huwaei</option>
                                                    <option>Samsung</option>
                                                    <option>Sony</option>
                                                    <option>HP</option>
                                                </select>
                                            </td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="heading">
                                    <h3>Product details</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                        </tr>
                                        <tr id="details-area">
                                            <td><input type="text" name="detailsTitle"></td>
                                            <td><input type="text" name="detailsDescription"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="button" class="add-details-button" class="btn btn-success" value="Add new field"></td>
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
                                        </tr>
                                        <tr id="specification-area">
                                            <td><input type="text"></td>
                                            <td><input type="text"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="button" class="add-specification-button" class="btn btn-success" value="Add new field"></td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
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