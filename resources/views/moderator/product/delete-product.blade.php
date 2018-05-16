@extends('layout.moderator-main')

@section('title')
    delete product
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Product</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6" id="product-table">
                    <div class="heading">
                        <h3>Delete product</h3>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Name: </td>
                                    <td><label>iMAC</label></td>
                                </tr>
                                <tr>
                                    <td>Price: </td>
                                    <td><label>320000</label?></td>
                                </tr>
                                <tr>
                                    <td>Quantity: </td>
                                    <td><label>50</label></td>
                                </tr>
                                <tr>
                                    <td>Image: </td>
                                    <td><img src="{{asset('images')}}/products/iMAC.png" class="image-content"></td>
                                </tr>
                                <tr>
                                    <td>Category: </td>
                                    <td><label>Laptop</label> </td>
                                </tr>
                                <tr>
                                    <td>Company: </td>
                                    <td><label>Apple</label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Are you sure to delete?</td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="row">
                            <input type="submit"  class="btn btn-primary btn-md pull-right" name="submit" value="DELETE">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection