<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard_style.css')}}">
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
    <div class="fej">
    <table>
    <tr>
    <td>
    <img class="profil-ikon" src="{{asset('fotos/profil.png')}}">
    </td>
    <td>
    <div id="nev">{{Auth::user()->name }}<br></div>
    <div class="felh-adatok">
    {{Auth::user()->neptun }}<br>
    {{Auth::user()->email }}<br>
    Létrehozva: {{Auth::user()->created_at }}<br>
    Módosítva: {{Auth::user()->updated_at }}<br>
    </div>
    <a href="{{url('/main/logout')}}" style="color: red; padding-left: 330px;">Kijelentkezés</a>
    </td>    
    </tr>
    </table>
    </div>

    <div class="sajat-feltoltesek">
    <table>
    <caption>FELTÖLTÖTT FELADATAIM</caption>
    <tr>
    <th>Megnevezés</th>
    <th>Megjegyzés</th>
    <th>Fájl</th>
    <th>Dátum</th>
    </tr>
    <tr>
    <td>Programozás</td> 
    <td style="max-width: 200px">Megjegyzés adható a feltöltött feladatokhoz.</td>
    <td>Ikon</td>
    <td>2020. 04. 22. 09:30:30</td>
    </tr>
    </table>
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