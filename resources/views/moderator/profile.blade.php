@extends('layout.moderator-main')

@section('title')
    Admin - profile
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
                    <form method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Name : </td>
                                    <td><input type="text" class="form-control" name="name" value="{{$admin->name}}"></td>
                                </tr>
                                <tr>
                                    <td>Email : </td>
                                    <td><input type="email" class="form-control" name="email" value="{{$admin->email}}"></td>
                                </tr>
                                <tr>
                                    <td>Phone 1 : </td>
                                    <td><input type="text" class="form-control" name="phone1"  value="{{$admin->phone1}}"></td>
                                </tr>
                                <tr>
                                    <td>Phone 2 : </td>
                                    <td><input type="text" class="form-control" name="phone2" value="{{$admin->phone2}}"></td>
                                </tr>
                                <tr>
                                    <td>Gender: </td>
                                    <td>
                                        @forelse($genderList as $gender)
                                            @if($gender->id == $admin->gender)
                                                <label class="radio-inline"><input type="radio" name="gender" value="{{$gender->id}}" checked> {{$gender->name}}</label> |
                                            @else
                                                <label class="radio-inline"><input type="radio" name="gender" value="{{$gender->id}}"> {{$gender->name}}</label> |
                                            @endif
                                        @empty
                                        @endforelse
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of birth : </td>
                                    <td><input type="text" class="form-control" name="dob" id="dob" value="{{$admin->dob}}"></td>
                                </tr>
                                <tr>
                                    <td>Address : </td>
                                    <td><input type="text" class="form-control" name="address" value="{{$admin->address}}"></td>
                                </tr>
                                <tr>
                                    <td>Photo : </td>
                                    <td><input type="file" class="form-control" id="file-upload"  name="photo"></td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-warning btn-block" value="Update">
                        </div>
                    </form>
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <p class="error">* {{$error}}</p>
                        @endforeach
                    @endif
                    @if(session('msg'))
                        <span class="error">{{session('msg')}}</span>
                    @endif
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img class="img-thumbnail img-responsive" id="admin-photo" src="{{asset('images')}}/{{$admin->photo}}">
                </div>
            </div>
        </div>
    </div>
@endsection