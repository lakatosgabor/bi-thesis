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
            <span>Oktatói profil</span>

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
                <a href="{{url('/admin/tutorial')}}">Profil</a>
                <a href="{{url('/admin/news')}}">Üzenőfal</a>
                <a href="{{url('/admin/course')}}">Kurzusok</a>
                <a href="{{url('/admin/chat')}}">Chat</a>
                <a href="{{url('/admin/editstudents')}}">Hallgatók</a>
                <a href="{{url('/admin/asks')}}">Kézikönyv</a>
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

    <script>$('#close').click(function(){$('#menu').toggle();});</script>
    <script>$('#open').click(function(){$('#menu').toggle();});</script>

    



@else
    <script>window.location = "/main";</script>

@endif

</body>
</html>