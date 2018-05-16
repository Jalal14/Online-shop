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
                        <li><a  class="items" href="#">Computer and laptops<div class="arrow"><strong>></strong></div></a>
                        </li>
                        <li><a class="items" href="#">Mobile and tablets<div class="arrow"><strong>></strong></div></a></li>
                        <li><a class="items" href="#">Camera and camcorders<div class="arrow"><strong>></strong></div></a></li>
                        <li><a class="items" href="#">Computer accessories<div class="arrow"><strong>></strong></div></a></li>
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
            <a href="" class="shop-top-button"><img class="img-responsive" src="{{asset('images')}}/see-more-icon.png"></a>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2 items">
                <a href="#"><img src="{{asset('images')}}/company/apple-logo.png"><h4>Apple</h4></a>
            </div>
            <div class="col-md-2 col-sm-2 items">
                <a href="#"><img src="{{asset('images')}}/company/huawei-logo.png"><h4>Huawei</h4></a>
            </div>
            <div class="col-md-2 col-sm-2 items">
                <a href="#"><img src="{{asset('images')}}/company/hp-logo.png"><h4>HP</h4></a>
            </div>
            <div class="col-md-2 col-sm-2 items">
                <a href="#"><img src="{{asset('images')}}/company/samsung-logo.png"><h4>Samsung</h4></a>
            </div>
            <div class="col-md-2 col-sm-2 items">
                <a href="#"><img src="{{asset('images')}}/company/dell-logo.png"><h4>Dell</h4></a>
            </div>
        </div>
    </div>
    <div class="shop-top-section container-fluid">
        <div class="row">
            <h3 class="shop-top-title">Best Selling Products</h3>
            <a href="/best-sell" class="shop-top-button"><img class="img-responsive" src="{{asset('images')}}/see-more-icon.png"></a>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="/details"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/imac.png"></a>
                </div>
                <div class="product-specification">
                    <a href="/details">
                        <h4>Canon camera</h4></a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wished-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/camera.png"></a>
                </div>
                <div class="product-specification">
                    <a href="">
                        <h4>Canon camera</h4></a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/iphone.png"></a>
                </div>
                <div class="product-specification">
                    <a href="">
                        <h4>Canon camera</h4>
                    </a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wished-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/lenovo.png"></a>
                </div>
                <div class="product-specification">
                    <a href="">
                        <h4>Canon camera</h4></a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/tablet.png"></a>
                </div>
                <div class="product-specification">
                    <a href="">
                        <h4>Canon camera</h4></a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-top-section container-fluid">
        <div class="row">
            <h3 class="shop-top-title">New Products</h3>
            <a href="/new-arrival" class="shop-top-button"><img class="img-responsive" src="{{asset('images')}}/see-more-icon.png"></a>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="/details"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/nokia.png"></a>
                </div>
                <div class="product-specification">
                    <a href="/details">
                        <h4>Canon camera</h4></a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wished-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/msi.png"></a>
                </div>
                <div class="product-specification">
                    <a href="">
                        <h4>Canon camera</h4></a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/mate.png"></a>
                </div>
                <div class="product-specification">
                    <a href="">
                        <h4>Canon camera</h4>
                    </a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wished-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/cam.png"></a>
                </div>
                <div class="product-specification">
                    <a href="">
                        <h4>Canon camera</h4></a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 body-items">
                <div class="wish-icon">
                    <a href="#"><img class="img-responsive pull-right" title="Add to wish list" src="{{asset('images')}}/wish-icon.png"></a>
                </div>
                <div class="product-image">
                    <a href="#"><img class="img-thumbnail img-responsive" src="{{asset('images')}}/products/vaio.png"></a>
                </div>
                <div class="product-specification">
                    <a href="">
                        <h4>Canon camera</h4></a>
                    <p>Things will get with product: A smart box as lamp holderLED basement
                        Accrylic design sheetA remote f..</p>
                    <div class="price"><strong>&lrm;Price: ৳1,200.00</strong></div>
                </div>
                <div class="cart-icon">
                    <a href="#"><img class="img-responsive" title="Add to cart" src="{{asset('images')}}/add-cart-icon.png"></a>
                </div>
                <div class="details-icon pull-right">
                    <a href="#"><img class="img-responsive" src="{{asset('images')}}/details-icon.png"></a>
                </div>
            </div>
        </div>
    </div>
@endsection