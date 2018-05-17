@extends('layout.moderator-main')

@section('title')
    Reqruit employee
@endsection

@section('style')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('js')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Reqruit employee</h1>
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
                                            <td>User name: </td>
                                            <td><input type="text" class="form-control" name="uname"></td>
                                        </tr>
                                        <tr>
                                            <td>Name: </td>
                                            <td><input type="text" class="form-control" name="name"></td>
                                        </tr>
                                        <tr>
                                            <td>Email: </td>
                                            <td><input type="email" class="form-control" name="email"></td>
                                        </tr>
                                        <tr>
                                            <td>Password: </td>
                                            <td><input type="password" class="form-control" name="pass"></td>
                                        </tr>
                                        <tr>
                                            <td>Confirm Password: </td>
                                            <td><input type="password" class="form-control" name="cPass"></td>
                                        </tr>
                                        <tr>
                                            <td>Phone 1: </td>
                                            <td><input type="text" class="form-control" name="contact1"></td>
                                        </tr>
                                        <tr>
                                            <td>Phone 2: </td>
                                            <td><input type="text" class="form-control" name="contact2"></td>
                                        </tr>
                                        <tr>
                                            <td>Gender: </td>
                                            <td>
                                                <label class="radio-inline"><input type="radio" name="gender">Male </label> |
                                                <label class="radio-inline"><input type="radio" name="gender">Female </label> |
                                                <label class="radio-inline"><input type="radio" name="gender">Other </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Date of birth: </td>
                                            <td><input type="text" name="dob" id="dob"></td>
                                        </tr>
                                        <tr>
                                            <td>Addreess: </td>
                                            <td><input type="text" class="form-control" name="address"></td>
                                        </tr>
                                        <tr>
                                            <td>Photo</td>
                                            <td><input type="file" class="form-control" name="photo"></td>
                                        </tr>
                                        <tr>
                                            <td>Role: </td>
                                            <td>
                                                <select class="form-control" name="role">
                                                    <option>Moderator</option>
                                                    <option>Admin</option>
                                                </select>
                                            </td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <input type="submit"  class="btn btn-primary btn-block" name="submit" value="ADD">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection