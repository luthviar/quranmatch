<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="icon" href="../../../../favicon.ico">--}}

    <title>Quran Match</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('/css/floating-labels.css') }}" rel="stylesheet">
</head>

<body>
<form class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="{{ URL::asset('img/logo.png') }}" alt="" width="70%" height="70%">
        {{--<h1 class="h3 mb-3 font-weight-normal">Qur'an Match</h1>--}}
        {{--<p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>--}}
    {{--</div>--}}

    {{--<div class="form-label-group">--}}
        {{--<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>--}}
        {{--<label for="inputEmail">Email address</label>--}}
    {{--</div>--}}

    {{--<div class="form-label-group">--}}
        {{--<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>--}}
        {{--<label for="inputPassword">Password</label>--}}
    {{--</div>--}}

    {{--<div class="checkbox mb-3">--}}
        {{--<label>--}}
            {{--<input type="checkbox" value="remember-me"> Remember me--}}
        {{--</label>--}}
    {{--</div>--}}
        <a class="btn btn-info btn-primary btn-lg" href="{{ url('/guest/play') }}" role="button">Start Guest Mode</a>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2018 |
        <a href="https://linkedin.com/in/luthfi-ar/" target="_blank">luthviar</a>
    </p>
</form>
</body>
</html>