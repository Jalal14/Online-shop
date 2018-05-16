@extends('layout.user-main')

@section('title')
    TuringShop - Password
@endsection

@section('content')
    <div class="container" id="profile-area">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel">
                    <div class="panel-heading"><h4>Update password</h4></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Current password:</label>
                                <input type="password" class="form-control" name="cPass">
                            </div>
                            <div class="form-group">
                                <label for="email">New password:</label>
                                <input type="password" class="form-control" name="newPass">
                            </div>
                            <div class="form-group">
                                <label for="address">Retype new password:</label>
                                <input type="text" class="form-control" name="cNewPass">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-success" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection