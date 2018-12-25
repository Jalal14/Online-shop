@extends('layout.user-main')

@section('title')
    TuringShop - Password
@endsection

@section('content')
    <div class="container" id="profile-area">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Update password</h4></div>
                    <div class="panel-body">
                        <form method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="password">Current password:</label>
                                <input type="password" class="form-control" name="currentPassword">
                            </div>
                            <div class="form-group">
                                <label for="newPassword">New password:</label>
                                <input type="password" class="form-control" name="newPassword">
                            </div>
                            <div class="form-group">
                                <label for="confirmNewPassword">Confirm new password:</label>
                                <input type="password" class="form-control" name="confirmNewPassword">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-success" value="Update">
                            </div>
                        </form>
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p class="error">* {{$error}}</p>
                            @endforeach
                        @endif
                        <div id="msg" class="error">
                            @if(session('msg'))
                                * {{session('msg')}}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection