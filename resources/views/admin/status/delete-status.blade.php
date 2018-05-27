@extends('layout.moderator-main')

@section('title')
    Admin - delete status
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
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="heading">
                        <h3>Delete status</h3>
                    </div>
                    <div class="table-responsive">
                        <form method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$status->id}}">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Name: </td>
                                    <td><label>{{$status->name}}</label></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Are you sure to delete?</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" class="btn btn-danger btn-md pull-right" value="Delete"></td>
                                </tr>
                                </thead>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p class="error">* {{$error}}</p>
                @endforeach
            @endif
        </div>
    </div>
@endsection