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
    <link rel="icon" href="{!! asset('images/tab-icon.ico') !!}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/stylesheet.css">
    @yield('style')

    <script type="text/javascript" src="{{asset('js')}}/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/script.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/userscript.js"></script>
    @yield('js')

</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home.index')}}">TuringShop</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" data-toggle="dropdown">Brands <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                @forelse($companyList->chunk(3) as $companies)
                                <li class="col-lg-3 col-md-3 col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Brands</li>
                                        @foreach($companies as $company)
                                            <li><a href="{{route('home.productsByCompany', [$company->id])}}">{{$company->name}}</a></li>
                                        @endforeach
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                @empty
                                @endforelse
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" data-toggle="dropdown">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                @forelse($categoryList->chunk(3) as $categories)
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Categories</li>
                                        @foreach($categories as $category)
                                            <li><a href="{{route('home.productsByCategory', [$category->id])}}">{{$category->name}}</a></li>
                                        @endforeach
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                @empty
                                @endforelse
                            </div>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('wish.index')}}" id="wish-link"><i class="fa fa-heart"></i> Wish list <span class="badge badge-light">0</span></a></li>
                    <li><a href="{{route('user.cartList')}}" id="cart-link"><i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-pill badge-light">0</span></a></li>
                    @if(session()->has('loggedUser'))
                        <li class="dropdown mega-dropdown">
                            <a href="{{route('user.editProfile')}}" id="account-link">My account  <i class="fa fa-user-circle-o"></i></a>
                            <ul class="dropdown-menu" id="change-password-dropdown">
                                <li><a href="{{route('user.editProfile')}}">Profile</a> </li>
                                <li><a href="{{route('user.editPassword')}}">Change password</a> </li>
                            </ul>
                        </li>
                        <li><a href="{{route('logout.userLogout')}}" id="logout-link">Logout  <i class="fa fa-sign-out"></i></a></li>
                    @else
                        <li><a href="#" id="signup-link" data-toggle="modal" data-target="#signup-modal">Signup <i class="fa fa-plus-circle"></i></a></li>
                        <li><a href="#" id="login-link" data-toggle="modal" data-target="#login-modal">Login  <i class="fa fa-sign-in"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!--Login modal-->
        <div class="modal fade" id="login-modal" role="dialog">
            <div class="modal-dialog">
                <!--Modal content-->
                <div class="modal-content">
                    <div class="modal-header modal-icon">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4>
						<span><img src="{{asset('images')}}/login.png" class="img-circle" alt="Login" width="60" height="60">
						</span> Login</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('userAjax.userLogin')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="email"> Email:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                                </div>
                                <span id="emailMsg" class="error"></span>
                            </div>
                            <div class="form-group">
                                <label for="password"> Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                                </div>
                                <span id="passwordMsg" class="error"></span>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-block" value="Login"><span class="glyphicon glyphicon-off"></span> Login</button>
                            <span id="errorMsg" class="error">
                                @if(session('msg'))
                                    * {{session('msg')}}
                                @endif
                            </span>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <p>Not a member? <a href="#" class="sign-up">Signup</a></p>
                        <p><a href="#">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Signup modal  -->
        <div class="modal fade" id="signup-modal" role="dialog">
            <div class="modal-dialog">
                <!--Modal content-->
                <div class="modal-content">
                    <div class="modal-header modal-icon">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4><span><img src="{{asset('images')}}/signup.png" class="img-circle" alt="Signup" width="60" height="60"></span> Signup</h4>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content">
                            <div id="traveler" class="tab-pane fade in active">
                                <form class="form-horizontal" method="post" action="{{route('userAjax.registration')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="fName">Full name:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" placeholder="Full name">
                                            <span id="nameMsg" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="email">Email:</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" placeholder="Email" name="regEmail">
                                            <span id="reg-emailMsg" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="phone">Phone:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Phone number" name="phone">
                                            <span id="phoneMsg" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="address">Address:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Full address" name="address">
                                            <span id="addressMsg" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="pass">Password:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="Password" name="regPassword">
                                            <span id="reg-passwordMsg" class="error"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="con-pass">Confirm password:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="Confirm password" name="regCPassword">
                                            <span id="reg-con-passwordMsg" class="error"></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block" value="Signup"><span class="glyphicon glyphicon-off"></span> Signup</button>
                                    <span id="errorMsg" class="error">
                                        @if(session('msg'))
                                            * {{session('msg')}}
                                        @endif
                                    </span>
                                    <div class="loader"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <p>Member already? <a class="login" href="#">Login</a></p>
                        <p><a href="#">Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</body>
</html>