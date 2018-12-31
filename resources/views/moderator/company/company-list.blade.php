@extends('layout.moderator-main')

@section('title')
    Admin - company list
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
@endsection

@section('content')
    <div id="main">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Company</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9" id="product-table">
                    <div class="row">
                        <a href="{{route('company.create')}}"><button type="button" class="btn btn-primary btn-md pull-right">ADD NEW</button></a>
                    </div>
                    <div class="heading">
                        <h3>Company list</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @forelse($companyList as $company)
                                <tr>
                                    <td>{{$company->id}}</td>
                                    <td><img src="{{asset('images')}}/{{$company->logo}}"  class="image-content"></td>
                                    <td>{{$company->name}}</td>
                                    <td><a href="{{route('company.edit', [$company->id])}}">Update</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td></td>
                                    <td>Company</td>
                                    <td>not</td>
                                    <td>found</td>
                                </tr>
                            @endforelse
                            </thead>
                        </table>
                    </div>
                    <div class="pagination">
                        {{ $companyList->links() }}
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3" id="search-area">
                    <div class="heading">
                        <h3>Search by category</h3>
                    </div>
                    <div class="table-responsive">
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
            </div>
        </div>
    </div>
@endsection