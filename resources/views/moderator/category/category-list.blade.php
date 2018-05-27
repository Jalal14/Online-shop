@extends('layout.moderator-main')

@section('title')
    Admin - category list
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Category</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9" id="product-table">
                    <div class="row">
                        <a href="{{route('category.create')}}"><button type="button" class="btn btn-primary btn-md pull-right">ADD NEW</button></a>
                    </div>
                    <div class="heading">
                        <h3>Category list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @forelse($categoryList as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td><a href="{{route('category.edit', [$category->id])}}">Update</a> </td>
                            </tr>
                            @empty
                                <tr>
                                    <td>Category</td>
                                    <td>not</td>
                                    <td>found</td>
                                </tr>
                            @endforelse
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" id="search-area">
                    <div class="heading">
                        <h3>Search by company</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection