<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/stylesheet.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="panel">
                <div class="panel-heading">
                    <center>
                    <h4><span><img src="{{asset('images')}}/login.png" class="img-circle" alt="Login" width="60" height="60"></span> Login</h4>
                    </center>
                </div>
            </div>
            <div class="panel-body">
                <form method="post">
                    {{csrf_field()}}
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
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="error">* {{$error}}</p>
                    @endforeach
                @endif
                <div id="msg" class="error">
                    @if(session('msg'))
                        * {{session('msg')}}
                    @endif
                </div>
            </div>
            <div class="panel-footer">
                <p><a href="#">Forgot Password?</a></p>
            </div>
        </div>
    </div>
</body>
</html>