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
    <table>
        <tr>
            <td><img class="logo" src="{{asset('fotos/ik-logo.png')}}"><br><p>BEJELENTKEZÉS</p><br></td>
        </tr>
        @if (isset(Auth::user()->email))
            <script>window.location="/main/dashboard"</script>
        @endif
        
        @if ($message = Session::get('error'))
            <div class="alert-danger">
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
            <tr>
                <td>
                    
                <input type="text" name="email" placeholder="Email">
                </td>
            </tr>
            <tr>
                <td>
                <input type="password" name="password" placeholder="A kapott jelszó">
                </td>
            </tr>
            <tr>    
                <td>
                    <br>
                    <button id="logb" name="login" type="submit"><img style=" width: 15px" src="{{asset('fotos/log-ikon.png')}}">  Bejelentkezés</button><br>
                </td>
            </tr>
        </form>
        <br>
        <tr>
            <td>
                <button id="help" name="help" type="button">Segítség a bejelentkezéshez!</button>
                <div id="h">Bejelentkezni, a hallgató saját email címével, és az oktatója álltal megadott jelszóval lehetséges.<br> Jelszót igényelni a godo.zoltan@inf.unideb.hu email címen lehet.</div>
                <script>$('#help').click(function(){$('#h').toggle();});</script>
            </td>
        </tr>
        </table>
    </div>
</body>
</html>