<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news_style.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <title>Üzenőfal</title>
</head>
<body>

@if(isset(Auth::user()->email))

    <div class="header">
        <button id="open" name="open" type="button">Menü</button>
        <div class="header-p">
            Debreceni Egyetem Informatika Kar<br>
            <span>Hallgatói profil</span>

        </div>
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
                <a href="{{url('tasks')}}">Feladatok</a>
                <a href="{{url('chat')}}">Chat</a>
                <a href="{{url('/main/logout')}}">Kijelentkezés</a>
            </nav>
    </div>
    <div class="body-b">
        <div class="uzenetkuldes">
            <form action="">
                <table>
                    <caption>ÜZENET BEKÜLDÉS</caption>
                <tr>
                    <td>
                        <input id="msg" type="textarea" name="uzenet" placeholder="Üzenet írása...">
                        Fénykép csatolása: <input type="file">
                        <input id="submit" type="submit" value="Küldés">
                    </td>
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