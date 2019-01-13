@extends('layout.moderator-main')

@section('title')
    Admin - update employee
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
                <div class="col-lg-6 col-md-6 col-sm-6" id="product-table">
                    <div class="heading">
                        <h3>Update employee</h3>
                    </div>
                    <form method="post">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$admin->id}}">
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
                                    <td>Contact: </td>
                                    <td><label>{{$admin->phone1}}</label></td>
                                </tr>
                                <tr>
                                    <td>Role: </td>
                                    <td>
                                        <select name="role" class="form-control">
                                            @if($admin->role == 0)
                                                <option value="0" selected>Admin</option>
                                                <option value="1">Moderator</option>
                                            @else
                                                <option value="1" selected>Moderator</option>
                                                <option value="0">Admin</option>
                                            @endif
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Action</td>
                                    <td>
                                        <select class="form-control" name="status">
                                            @forelse($statusList as $status)
                                                @if($status->id == $admin->status)
                                                    <option value="{{$status->id}}" selected>{{$status->name}}</option>
                                                @else
                                                    <option value="{{$status->id}}">{{$status->name}}</option>
                                                @endif
                                            @empty
                                            @endforelse
                                        </select>
                                    </td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="row">
                            <input type="submit" class="btn btn-warning btn-md pull-right" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection