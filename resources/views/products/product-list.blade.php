@extends('layout.user-main')

@section('title')
    TuringShop - Product list
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
                            <li><a  class="items" href="{{route('home.productsByCategory', [$category->category])}}">{{$category->name}}<div class="arrow"><strong>></strong></div></a></li>
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
                <div class="col-md-2 col-sm-2">
                    <div class="select-option-section">
                        <div class="heading">
                            <h3>Companies</h3>
                        </div>
                        <div class="body-option-section">
                            <div class="checkbox">
                                <label><input type="checkbox" id="select_all_companies" checked>Select all</label>
                            </div>
                            @forelse($companyList as $company)
                            <div class="checkbox">
                                <label><input type="checkbox" class="companies_checkbox" value="{{$company->id}}" checked>{{$company->name}}</label>
                            </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
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
                        <h3 class="shop-top-title">{{$title}}</h3>
                    </div>
                    @forelse($productList->chunk(5) as $products)
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-md-2 col-sm-3 body-items">
                                @if($product->discount > 0)
                                    <div class="discount-section">
                                        <div class="discount">{{$product->discount}}%</div>
                                    </div>
                                @endif
                                <div class="wish-icon">
                                    @if(session()->has('loggedUser'))
                                        @if(in_array($product->id, $userWishList))
                                            <a href="{{route('wish.destroy', [$product->id])}}"><img class="img-responsive pull-right" title="Remove from wish list" src="{{asset('images')}}/wished-icon.png"></a>
                                        @else
                                            <a href="{{route('wish.store', [$product->id])}}"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                                        @endif
                                        {{--<a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>--}}
                                    @else
                                        <a href="#" data-toggle="modal" data-target="#login-modal"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                                    @endif
                                </div>
                                <div class="product-image">
                                    <a href="{{route('home.productDetails', [$product->id])}}"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/{{$product->image}}"></a>
                                </div>
                                <div class="product-specification">
                                    <a href="{{route('home.productDetails', [$product->id])}}"><h4>{{$product->name}}</h4></a>
                                    <p>{{$product->details}}</p>
                                    <div class="price">
                                        @if($product->discount > 0)
                                            <strong>Price: ৳</strong><small>&lrm;<del>{{$product->sell_price}} </del></small><strong>{{$product->dis_price}}</strong>
                                        @else
                                            <strong>&lrm;Price: ৳{{$product->sell_price}}</strong>
                                        @endif
                                    </div>
                                </div>
                                <div class="cart-icon">
                                    <a href="{{route('home.productDetails', [$product->id])}}"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                                </div>
                                <div class="details-icon pull-right">
                                    <a href="{{route('home.productDetails', [$product->id])}}"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
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