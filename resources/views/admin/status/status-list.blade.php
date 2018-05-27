@extends('layout.moderator-main')

@section('title')
    Admin - status list
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Status</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 pull-right">
                            <a href="{{route('status.create')}}"><button class="btn btn-primary">Add new</button></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="heading">
                                <h3>Status list</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    @forelse($statusList as $status)
                                        <tr>
                                            <td>{{$status->id}}</td>
                                            <td>{{$status->name}}</td>
                                            <td><a href="{{route('status.edit', [$status->id])}}">Update</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td></td>
                                            <td>Status</td>
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
        </div>
    </div>
@endsection