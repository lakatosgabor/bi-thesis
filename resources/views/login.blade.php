<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login_style.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <title>Bejelentkezés</title>
</head>
<body>
    <div class="login-form">
        <img class="logo" src="{{asset('fotos/ik-logo.png')}}"><br><p stlye="text-align: center"><b><u>HALLGATÓI BEJELENTKEZÉS</u></b></p><br>
        
        @if (isset(Auth::user()->email))
            <script>window.location="/main/dashboard"</script>
        @endif
        
        @if ($message = Session::get('error'))
            <div class="alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        
        @if (count  ($errors) > 0)
            <div class="alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ url('/main/checklogin' )}}">
            {{csrf_field() }}
            <img style=" width: 13px" src="{{asset('fotos/fh-ikon.png')}}"><label> Neptun</label><br>
            <input type="text" name="neptun" placeholder="neptun"><br><br>
            <img style=" width: 20px" src="{{asset('fotos/pw-ikon.png')}}"><label>Jelszó</label><br>
            <input type="password" name="password" placeholder="A kapott jelszó">
            <button id="logb" name="login" type="submit"><img style=" width: 15px" src="{{asset('fotos/log-ikon.png')}}">  Bejelentkezés</button><br>
        </form>
        <br>
        <button id="help" name="help" type="button">Segítség a bejelentkezéshez!</button>
        <div id="h">Bejelentkezni hallgató saját email címével, és az oktatója álltal megadott jelszóval lehetséges.<br> Jelszót igényelni a godo.zoltan@inf.unideb.hu email címen lehet.</div>
        <script>$('#help').click(function(){$('#h').toggle();});</script>
    </div>
</body>
</html>