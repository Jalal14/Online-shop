@extends('layout.moderator-main')

@section('title')
    Admin - buy history
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
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <div class="heading">
                        <h3>Buy list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Company</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Added by</th>
                                <th>Updated</th>
                            </tr>
                            @forelse($historyList as $history)
                            <tr>
                                <td><img class="img-thumbnail img-responsive img-employee" src="{{asset('images')}}/{{$history->image}}"></td>
                                <td><a href="{{route('information.editBuyHistory', [$history->id])}}">{{$history->name}}</a> </td>
                                <td>{{$history->category_name}}</td>
                                <td>{{$history->company_name}}</td>
                                <td>{{$history->buy_date}}</td>
                                <td>{{$history->total_price}}</td>
                                <td>{{$history->quantity}}</td>
                                <td>{{$history->sell_price}}</td>
                                <td>{{$history->status_name}}</td>
                                <td>{{$history->username}}</td>
                                <td>
                                    @if($history->updated == null)
                                        No
                                    @else
                                        {{$history->updated}}
                                    @endif
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>Buy</td>
                                    <td>history</td>
                                    <td>not</td>
                                    <td>found</td>
                                </tr>
                            @endforelse
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Category</strong>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="select_all_categories" checked> All categories
                                        </label>
                                    </td>
                                </tr>
                                @forelse($categoryList as $category)
                                <tr>
                                    <td>
                                        <label class="checkbox-inline">
                                            <input class="categories_checkbox" type="checkbox" name="categories[]" value="{{$category->id}}" checked> {{$category->name}}
                                        </label>
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Company</strong>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="select_all_companies" checked> All companies
                                        </label>
                                    </td>
                                </tr>
                                @forelse($companyList as $company)
                                <tr>
                                    <td>
                                        <label class="checkbox-inline">
                                            <input class="companies_checkbox" type="checkbox" name="companies[]" value="{{$company->id}}" checked> {{$company->name}}
                                        </label>
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection