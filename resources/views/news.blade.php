<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news_style.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <title>Dashboard</title>
</head>
<body>

@if(isset(Auth::user()->email))
    <div class="header">
        <button id="open" name="open" type="button">Menü</button>
        <div class="header-p">Debreceni Egyetem Informatika Kar <br><span>Hallgatói profil</span></div>
    </div>
    <div id="menu" class="sidemenu">
        <button id="close" name="close" type="button">X</button>

    <div class="log-ikon">
    <img class="logo" src="{{asset('fotos/login-ikon.png')}}">
    <br>
    <strong> Belépve: {{Auth::user()->name }}</strong>
    <br>
    </div>
    <nav>
    <a href="{{url('dashboard')}}">Profil</a>
    <a href="{{url('news')}}">Üzenőfal</a>
    <a href="{{url('chat')}}">Chat</a>
    <a href="{{url('/main/logout')}}">Kijelentkezés</a>
    </nav>
    </div>
    <div class="body-b">
    <div class="sajat-feltoltesek">
    <form action="">
    <table>
    <caption>FELADAT BEKÜLDÉS</caption>
    <tr>
    <td><label for="">Feladat megnevezése: </label></td><td><input type="text" name="megnevezes" placeholder="1.feladat"></td>
    </tr>
    <tr>
    <td><label for="">Rövid megjegyzés: </label></td><td><input type="text" name="megjegyzes" placeholder="Megjegyés a feladathoz"><br></td>
    </tr>
    <tr>
    <td><label for="">Üzenet </label></td><td><input type="textarea" name="uzenet" placeholder="Üzenet írása..."></td>
    </tr>
    <tr>
    <td><label for="">Fájl feltöltése: </label></td><td><input type="file" name="fajl"></td>
    </tr>

    </tr>
    </table>



    </form>
    
    </div>


    </div>

    <div class="footer">
        <p>Készítette: Lakatos Gábor</p>
    </div>

    <script>$('#close').click(function(){$('#menu').toggle();});</script>
    <script>$('#open').click(function(){$('#menu').toggle();});</script>



@else
    <script>window.location = "/main";</script>

@endif

</body>
</html>