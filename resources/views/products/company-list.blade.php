@extends('layout.user-main')

@section('title')
    TuringShop - Brands
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js')}}/productJS.js"></script>
@endsection

@section('content')
    <div class="banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-2 banner-cat">
                    <div class="heading">
                        <h3>Popular categories</h3>
                    </div>
                    <ul class="nav nav-pills nav-stacked">
                        @forelse($topCategories as $category)
                            <li><a  class="items" href="#">{{$category->name}}<div class="arrow"><strong>></strong></div></a></li>
                        @empty
                        @endforelse
                    </ul>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div id="myCarousel" class="carousel slide banner-mid" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#"><img src="{{asset('images')}}/macbook-air.jpg" alt="Macbook air"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{asset('images')}}/iPhone-7.PNG" alt="iPhone 7 plus"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{asset('images')}}/iMAC.png" alt="iMAC"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{asset('images')}}/display.jpg" alt="Macbook air"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 banner-cat">
                    <div class="heading">
                        <h3>Featured products</h3>
                    </div>
                    <div class="col-md-5 col-sm-5 body-items">
                        <div class="product-image">
                            <a href="/details"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/nokia.png"></a>
                        </div>
                        <div class="product-specification">
                            <a href="/details">
                                <h4>Canon camera</h4></a>
                            <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                        </div>
                        <div class="details-icon pull-right">
                            <a href="#"><img class="img-responsive" src="{{asset('images')}}/buy-now-button.png"></a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 body-items">
                        <div class="product-image">
                            <a href="/details"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/nokia.png"></a>
                        </div>
                        <div class="product-specification">
                            <a href="/details">
                                <h4>Canon camera</h4></a>
                            <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                        </div>
                        <div class="details-icon pull-right">
                            <a href="#"><img class="img-responsive" src="{{asset('images')}}/buy-now-icon.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="select-option-section">
                        <div class="heading">
                            <h3>Categories</h3>
                        </div>
                        <div class="body-option-section">
                            <div class="checkbox">
                                <label><input type="checkbox" id="select_all_categories" checked>Select all</label>
                            </div>
                            @forelse($categoryList as $category)
                                <div class="checkbox">
                                    <label><input type="checkbox" class="categories_checkbox" value="{{$category->id}}" checked>{{$category->name}}</label>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="row">
                        <h3 class="shop-top-title">Brands</h3>
                    </div>
                    @forelse($companyList->chunk(5) as $companies)
                        <div class="row">
                            @foreach($companies as $company)
                                <div class="col-md-2 col-sm-3 body-items">
                                    <div class="product-image">
                                        <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/{{$company->logo}}"></a>
                                    </div>
                                    <div class="product-specification">
                                        <a href="#"><h4><center>{{$company->name}}</center></h4></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection