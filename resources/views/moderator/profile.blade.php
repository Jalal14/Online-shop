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
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" value="Full name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" value="Email address" name="email">
                        </div>
                        <div class="form-group">
                            <label for="address">Phone 1:</label>
                            <input type="text" class="form-control" value="Contact 1" name="contact1">
                        </div>
                        <div class="form-group">
                            <label for="address">Phone 2:</label>
                            <input type="text" class="form-control" value="Contact 2" name="contact2">
                        </div>
                        <div class="form-group">
                            <label for="address">Gender:</label>
                            <label class="radio-inline"><input type="radio" name="gender">Male</label>
                            <label class="radio-inline"><input type="radio" name="gender">Female</label>
                            <label class="radio-inline"><input type="radio" name="gender">Other</label>
                        </div>
                        <div class="form-group">
                            <label for="address">Date of birth:</label>
                            <input type="text" class="form-control" name="dob" id="dob">
                        </div>
                        <div class="form-group">
                            <label for="contact">Address:</label>
                            <input type="text" class="form-control" value="Mobile number" name="contact">
                        </div>
                        <div class="form-group control-fileupload">
                            <label for="photo">Photo:</label>
                            <input type="file" class="form-control" name="photo">
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