@extends('layout.moderator-main')

@section('title')
    employee list
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Buy history</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="heading">
                        <h3>Buy list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Buy</th>
                                <th>Sale</th>
                                <th>Profit</th>
                            </tr>
                            <tr>
                                <td>5456456</td>
                                <td>545456</td>
                                <td>56464</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="pull-right">
                        <h4>Total profit:   5454545</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Date
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>From: </td>
                                    <td><input type="date" name="fromDate"></td>
                                </tr>
                                <tr>
                                    <td>To: </td>
                                    <td><input type="date" name="toDate"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn btn-success" value="Search"></td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection