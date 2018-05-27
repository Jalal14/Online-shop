@extends('layout.moderator-main')

@section('title')
    Admin - add status
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
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <form method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="heading">
                                    <h3>Add status</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>Status name: </td>
                                            <td><input type="text" class="form-control" name="name"></td>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <input type="submit"  class="btn btn-primary btn-block" name="submit" value="ADD">
                            </div>
                        </div>
                    </form>
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