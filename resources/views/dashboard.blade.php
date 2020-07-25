<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home_style.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <title>dashboard</title>
</head>
<body>

@if(isset(Auth::user()->email))
    <div class="alert-danger">
        <strong> Welcome {{Auth::user()->email }}</strong>
        <br>
        <a href="{{url('/main/logout')}}">Kijelentkezés</a>
    </div>
@else
    <script>window.location = "/main";</script>

@endif

</body>
</html>