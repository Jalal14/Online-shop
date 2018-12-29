@extends('layout.moderator-main')

@section('title')
    Transaction history
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Transaction history</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="heading">
                        <h3>Transaction list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Member</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($transactionList as $transaction)
                            <tr>
                                <td>{{$transaction->admin_name}} ({{$transaction->admin_email}})</td>
                                <td>{{$transaction->tr_date}}</td>
                                <td>{{$transaction->amount}}</td>
                                <td>{{$transaction->type_name}}</td>
                                <td>
                                    @if($transaction->type == 1)
                                        <a href="{{route('information.process', [$transaction->invoice])}}">View</a>
                                    @else
                                        <a href="{{route('information.editBuyHistory', [$transaction->buy_id, $transaction->id])}}">View</a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        <h4>Total profit:   5454545</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
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