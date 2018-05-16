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
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/stylesheet.css">
    @yield('style')

    <script type="text/javascript" src="{{asset('js')}}/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/script.js"></script>
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
                <a class="navbar-brand" href="/home">TuringShop</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown mega-dropdown">
                        <a href="#" data-toggle="dropdown">Brands <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Brands</li>
                                        <li><a href="#">Apple</a></li>
                                        <li><a href="#">Sony</a></li>
                                        <li><a href="#">Huawei</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Brands</li>
                                        <li><a href="#">Apple</a></li>
                                        <li><a href="#">Sony</a></li>
                                        <li><a href="#">Huawei</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Brands</li>
                                        <li><a href="#">Apple</a></li>
                                        <li><a href="#">Sony</a></li>
                                        <li><a href="#">Huawei</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Brands</li>
                                        <li><a href="#">Apple</a></li>
                                        <li><a href="#">Sony</a></li>
                                        <li><a href="#">Huawei</a></li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" data-toggle="dropdown">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Categories</li>
                                        <li><a href="#">Desktop</a></li>
                                        <li><a href="#">Laptop</a></li>
                                        <li><a href="#">Mobile</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Categories</li>
                                        <li><a href="#">Desktop</a></li>
                                        <li><a href="#">Laptop</a></li>
                                        <li><a href="#">Mobile</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Categories</li>
                                        <li><a href="#">Desktop</a></li>
                                        <li><a href="#">Laptop</a></li>
                                        <li><a href="#">Mobile</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Categories</li>
                                        <li><a href="#">Desktop</a></li>
                                        <li><a href="#">Laptop</a></li>
                                        <li><a href="#">Mobile</a></li>
                                    </ul>
                                </li>
                            </div>
                            <div class="row">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">Categories</li>
                                        <li><a href="#">Desktop</a></li>
                                        <li><a href="#">Laptop</a></li>
                                        <li><a href="#">Mobile</a></li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" id="wish-link"><i class="fa fa-heart"></i> Wish list <span class="badge badge-light">0</span></a></li>
                    <li><a href="#" id="cart-link"><i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-pill badge-light">0</span></a></li>
                    <li><a href="#" id="signup-link" data-toggle="modal" data-target="#signup-modal">Signup <i class="fa fa-plus-circle"></i></a></li>
                    <li><a href="#" id="login-link" data-toggle="modal" data-target="#login-modal">Login  <i class="fa fa-sign-in"></i></a></li>
                    <li class="dropdown mega-dropdown">
                        <a href="#" id="account-link">My account  <i class="fa fa-user-circle-o"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Change password</a> </li>
                        </ul>
                    </li>
                    <li><a href="#" id="logout-link">Logout  <i class="fa fa-sign-out"></i></a></li>
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
                        <form>
                            <div class="form-group">
                                <label for="username"> Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password"> Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
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
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="fName">First name:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="fName" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="lName">Last name:</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="lName" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="gender">Gender:</label>
                                        <label class="radio-inline">
                                            &nbsp; &nbsp; <input type="radio" name="optradio" checked>Male
                                        </label>
                                        <label class="radio-inline">
                                            &nbsp; <input type="radio" name="optradio">Female
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="email">Email:</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="pass">Password:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="Password" name="traveler-pass">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="con-pass">Confirm password:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" placeholder="Confirm password" name="traveler-con-pass">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Signup</button>
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