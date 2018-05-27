@extends('layout.moderator-main')

@section('title')
    Admin - add company
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
                <div class="col-lg-6 col-md-6 col-sm-6" id="product-table">
                    <div class="heading">
                        <h3>Add company</h3>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Name: </td>
                                    <td><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td>Logo: </td>
                                    <td><input type="file" name="logo"></td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="row">
                            <input type="submit"  class="btn btn-primary btn-md pull-right" name="submit" value="ADD">
                        </div>
                    </form>
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <p class="error">* {{$error}}</p>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection