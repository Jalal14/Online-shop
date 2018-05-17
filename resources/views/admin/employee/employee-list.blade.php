@extends('layout.moderator-main')

@section('title')
    employee list
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
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <select class="form-control">
                        <option>Moderator list</option>
                        <option>Admin list</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pull-right">
                    <a href="#"><button class="btn btn-primary">Add new</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="heading">
                        <h3>Employee list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Join</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img class="img-thumbnail img-responsive img-employee" src="{{asset('images')}}/msi.png"></td>
                                <td>Moderator</td>
                                <td>Jalal uddin</td>
                                <td>0154465464654564</td>
                                <td>Admin@example.com</td>
                                <td>2017-22-12</td>
                                <td>Admin</td>
                                <td><a href="#">Update</a> | <a href="#">Delete</a></td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection