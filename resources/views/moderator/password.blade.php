@extends('layout.moderator-main')

@section('title')
    password
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
                    <form>
                        <div class="form-group">
                            <label for="cPass">Current password:</label>
                            <input type="password" class="form-control" name="cPass">
                        </div>
                        <div class="form-group">
                            <label for="newPass">New password:</label>
                            <input type="password" class="form-control" name="newPass">
                        </div>
                        <div class="form-group">
                            <label for="cPass">Retype new password:</label>
                            <input type="password" class="form-control" name="cNewPass">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection