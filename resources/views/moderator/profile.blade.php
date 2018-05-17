@extends('layout.moderator-main')

@section('title')
    profile
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
                <h1>Profile</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <form enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Name : </td>
                                    <td><input type="text" class="form-control" value="Full name" name="name"></td>
                                </tr>
                                <tr>
                                    <td>Email : </td>
                                    <td><input type="email" class="form-control" value="Email address" name="email"></td>
                                </tr>
                                <tr>
                                    <td>Phone 1 : </td>
                                    <td><input type="text" class="form-control" value="Contact 1" name="contact1"></td>
                                </tr>
                                <tr>
                                    <td>Phone 2 : </td>
                                    <td><input type="text" class="form-control" value="Contact 2" name="contact2"></td>
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
                                    <td>Date of birth : </td>
                                    <td><input type="text" class="form-control" name="dob" id="dob"></td>
                                </tr>
                                <tr>
                                    <td>Address : </td>
                                    <td><input type="text" class="form-control" value="Mobile number" name="contact"></td>
                                </tr>
                                <tr>
                                    <td>Photo : </td>
                                    <td><input type="file" class="form-control" name="photo"></td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-thumbnail img-responsive" id="admin-photo" src="{{asset('images')}}/display.jpg">
                </div>
            </div>
        </div>
    </div>
@endsection