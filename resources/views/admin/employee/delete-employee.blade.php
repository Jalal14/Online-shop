@extends('layout.moderator-main')

@section('title')
    Admin - employee details
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Employee</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8" id="product-table">
                    <div class="heading">
                        <h3>Employee details</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td>Username: </td>
                                        <td><label>{{$admin->uname}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Name: </td>
                                        <td><label>{{$admin->name}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Email: </td>
                                        <td><label>{{$admin->email}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Contact 1: </td>
                                        <td><label>{{$admin->phone1}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Contact 2: </td>
                                        <td><label>{{$admin->phone2}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Gender: </td>
                                        <td><label>{{$admin->gender_name}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Date of birth: </td>
                                        <td><label>{{$admin->dob}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Address: </td>
                                        <td><label>{{$admin->address}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Join date: </td>
                                        <td><label>{{$admin->join_date}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Role: </td>
                                        <td><label>{{$admin->role}}</label></td>
                                    </tr>
                                    <tr>
                                        <td>Status: </td>
                                        <td><label>{{$admin->status_name}}</label></td>
                                    </tr>
                                    {{--<tr>--}}
                                        {{--<td></td>--}}
                                        {{--<td><label>Are you sure to delete?</label></td>--}}
                                    {{--</tr>--}}
                                    </thead>
                                </table>
                            </div>
                            <div class="row">
                                <form method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$admin->id}}">
                                    {{--<input type="submit" class="btn btn-danger btn-md pull-right" value="Remove">--}}
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <img class="img-thumbnail img-responsive" id="admin-photo" src="{{asset('images')}}/{{$admin->photo}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection