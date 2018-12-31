@extends('layout.moderator-main')

@section('title')
    Admin - employee list
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Employee list</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <select class="form-control">
                        <option>All</option>
                        <option>Moderator list</option>
                        <option>Admin list</option>
                    </select>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 pull-right">
                    <a href="{{route('admin.create')}}"><button class="btn btn-primary">Add new</button></a>
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @forelse($adminList as $admin)
                                <tr>
                                    <td>{{$admin->id}}</td>
                                    <td><img class="img-thumbnail img-responsive img-employee" src="{{asset('images')}}/{{$admin->photo}}"></td>
                                    <td>{{$admin->uname}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->phone1}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->join_date}}</td>
                                    <td>
                                        @if($admin->role == 0)
                                            Admin
                                        @else
                                            Moderator
                                        @endif

                                    </td>
                                    <td>{{$admin->status_name}}</td>
                                    <td><a href="{{route('admin.edit', [$admin->id])}}">Update</a> | <a href="{{route('admin.show', [$admin->id])}}">Details</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td></td>
                                    <td>employee</td>
                                    <td>not</td>
                                    <td>fount</td>
                                    <td>in</td>
                                    <td>the</td>
                                    <td>list</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforelse
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection