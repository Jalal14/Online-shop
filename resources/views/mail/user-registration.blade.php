<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Congratulations, you have successfully registered to turingShop</h2>
To activate your account, please click this <a href="{{route('registration.regToken', [$token->token, $token->id])}}">link</a>
</body>
</html>