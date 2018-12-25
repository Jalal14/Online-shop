@extends('layout.user-main')

@section('title')
    Home
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
    <div class="shop-top-section container-fluid">
        <div class="row">
            <h3 class="shop-top-title">Top Brands</h3>
            <a href="{{route('home.companyList')}}" class="shop-top-button"><img class="img-responsive" src="{{asset('images')}}/see-more-icon.png"></a>
        </div>
        <div class="row">
            @forelse($topBrands as $topBrand)
                <div class="col-md-2 col-sm-2 items">
                    <a href="#">
                        <img src="{{asset('images')}}/{{$topBrand->logo}}" alt="{{$topBrand->name}}">
                        <h4><center>{{$topBrand->name}}</center></h4>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <div class="shop-top-section container-fluid">
        <div class="row">
            <h3 class="shop-top-title">Best Selling Products</h3>
            <a href="{{route('home.bestSale')}}" class="shop-top-button"><img class="img-responsive" src="{{asset('images')}}/see-more-icon.png"></a>
        </div>
        <div class="row">
            @forelse($bestSales as $bestSale)
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    @if(session()->has('loggedUser'))
                        @if(in_array($bestSale->id, $userWishList))
                            <a href="{{route('wish.destroy', [$bestSale->id])}}"><img class="img-responsive pull-right" title="Remove from wish list" src="{{asset('images')}}/wished-icon.png"></a>
                        @else
                            <a href="{{route('wish.store', [$bestSale->id])}}"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                        @endif
                    @else
                        <a href="#" data-toggle="modal" data-target="#login-modal"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                    @endif
                </div>
                <div class="product-image">
                    <a href="{{route('home.productDetails', [$bestSale->id])}}"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/{{$bestSale->image}}" alt="{{$bestSale->name}}"></a>
                </div>
                <div class="product-specification">
                    <a href="{{route('home.productDetails', [$bestSale->id])}}"><h4>{{$bestSale->name}}</h4></a>
                    <p>{{$bestSale->details}}</p>
                    <div class="price"><strong>&lrm;Price: ৳{{$bestSale->sell_price}}</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="{{route('home.productDetails', [$bestSale->id])}}"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="{{route('home.productDetails', [$bestSale->id])}}"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </div>
    <div class="shop-top-section container-fluid">
        <div class="row">
            <h3 class="shop-top-title">New Products</h3>
            <a href="{{route('home.newArrivals')}}" class="shop-top-button"><img class="img-responsive" src="{{asset('images')}}/see-more-icon.png"></a>
        </div>
        <div class="row">
            @forelse($newProducts as $newProduct)
                <div class="col-md-2 col-sm-3 body-items">
                    <div class="wish-icon">
                        @if(session()->has('loggedUser'))
                            @if(in_array($newProduct->id, $userWishList))
                                <a href="{{route('wish.destroy', [$newProduct->id])}}"><img class="img-responsive pull-right" title="Remove from wish list" src="{{asset('images')}}/wished-icon.png"></a>
                            @else
                                <a href="{{route('wish.store', [$newProduct->id])}}"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                                {{--<a href="{{route('wish.store', [$bestSale->id])}}"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>--}}
                            @endif
                        @else
                            <a href="#" data-toggle="modal" data-target="#login-modal"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                        @endif
                    </div>
                    <div class="product-image">
                        <a href="{{route('home.productDetails', [$newProduct->id])}}"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/{{$newProduct->image}}"></a>
                    </div>
                    <div class="product-specification">
                        <a href="{{route('home.productDetails', [$newProduct->id])}}"><h4>{{$newProduct->name}}</h4></a>
                        <p>{{$newProduct->details}}</p>
                        <div class="price"><strong>&lrm;Price: ৳{{$newProduct->sell_price}}</strong></div>
                    </div>
                    <div class="cart-icon">
                        <a href="{{route('home.productDetails', [$newProduct->id])}}"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                    </div>
                    <div class="details-icon pull-right">
                        <a href="{{route('home.productDetails', [$newProduct->id])}}"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection