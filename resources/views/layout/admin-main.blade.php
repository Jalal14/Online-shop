<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/adminStyle.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/font-awesome.min.css">
    @yield('style')

    <script type="text/javascript" src="{{asset('js')}}/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/adminscript.js"></script>
    @yield('js')
</head>
<body>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <p class="pull-left visible-xs">
                    <!--button id="offcanvasleft" class="btn btn-xs glyphicon glyphicon-menu-hamburger" type="button" data-toggle="offcanvas"></button-->
                    <button id="offcanvasleft" class="btn btn-xs" type="button" data-toggle="offcanvas">
                        <span class="icon-bar"></span>
                    </button>
                </p>
                <a class="navbar-brand" href="#">TuringShop</a>
            </div>
            <div class="nav navbar-nav navbar-right" id="account-nav">
                <ul class="nav navbar-nav">
                    <li class="dropdown" id="account-dropdown">
                        <a href="#" data-toggle="dropdown">Account <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="account-dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Your store</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="row-offcanvas row-offcanvas-left" id="left-menu">
    <div class="sidebar-offcanvas">
        <div class="nav-side-menu col-md-12">
            <div class="menu-list">
                <ul class="menu-content collapse-out" id="left-menu-content">
                    <li><a href="/admin">Dashboard</a></li>
                    <li><a href="/admin/products">Products</a></li>
                    <li><a href="/admin/categories">Categories</a></li>
                    <li><a href="/admin/companies">Company</a></li>
                    <li  data-toggle="collapse" data-target="#sales" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i> Sales <span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="sales">
                        <li class="active"><a href="{{route('information.orders')}}">Pending</a></li>
                        <li><a href="{{route('information.process')}}">Processing</a></li>
                        <li><a href="{{route('information.delivered')}}">Delivered</a></li>
                        <li><a href="{{route('information.returns')}}">Returns</a></li>
                        <li class="active"><a href="{{route('information.index')}}">Orders</a></li>
                    </ul>

                    <li  data-toggle="collapse" data-target="#report" class="collapsed active">
                        <a href="#"><i class="fa fa-gift fa-lg"></i> Best sales<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="report">
                        <li class="active"><a href="/admin/orders">Product</a></li>
                        <li><a href="/admin/process">Category</a></li>
                        <li><a href="/admin/delivered">Company</a></li>
                    </ul>
                    <li><a href="{{route('admin.all')}}">Employee</a></li>
                    <li><a href="#">Customers</a></li>
                    <li><a href="#">Report</a></li>
                    <li><a href="#">Information</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
@yield('content')
</html>