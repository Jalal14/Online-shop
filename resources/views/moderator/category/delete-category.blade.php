@extends('layout.moderator-main')

@section('title')
    delete category
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
                <div class="col-lg-6 col-md-6 col-sm-6" id="product-table">
                    <div class="heading">
                        <h3>Remove category</h3>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <input type="hidden" name="id">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Name: </td>
                                    <td><label>Laptop</label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><label>Are you sure to delete?</label></td>
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