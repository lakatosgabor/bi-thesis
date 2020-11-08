<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard_style.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Hallgatói profil</title>
</head>
<body>

    @if(isset(Auth::user()->email))
        <div class="header">
            <button id="open" name="open" type="button">Menü</button>
            <div class="header-p">
                Debreceni Egyetem Informatika Kar
                <br>
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
                <a href="{{url('course')}}">Kurzusok</a>
                <a href="{{url('chat')}}">Chat</a>
                <a href="{{url('asks')}}">Kézikönyv</a>
                <a href="{{url('/main/logout')}}">Kijelentkezés</a>
            </nav>
        </div>
        <div class="body-b">              
            </div>
            <div class="sajat-feltoltesek">
            <div class="main__title">
                    <img src="{{asset('fotos/hello.svg')}}" alt="Hello User">
                    <div class="main__greeting">
                        <h1>Hello {{Auth::user()->name }}</h1>
                        <p>Üdv az Elearning rendszerben.</p>
                        <a class="fa fa-sign-out" aria-hidden="true" href="{{url('/main/logout')}}" style="color: red;  text-decoration: none;">Kijelentkezés</a>
                        <form method="post" action="{{ url('/newpassword' )}}">
                            {{csrf_field() }}  
                            Jelszó módosítása: <input type="text" name="password" placeholder="Új jelszó">
                            <button id="logb" name="add" type="submit">Módosít</button><br>
                        </form>
                    </div>
                </div>
                        <div class="card_inner1">
                            <i class="fa fa-user-o fa-2x text-lightblue"></i>
                            <p class="text-primary-p">Neptun kód</p>
                            <span class="font-bold text-title">{{Auth::user()->neptun }}</span>
                        </div>

                            <div class="card_inner4">
                                <i class="fa fa-user-secret fa-2x text-green"></i>
                                <p class="text-primary-p">Jogosúltság</p>
                                <span class="font-bold text-title">Hallgatói</span>
                            </div>

                        <div class="card_inner3">
                            <i class="fa fa-wrench fa-2x text-yellow"></i>
                            <p class="text-primary-p">Módosítva</p>
                            <span class="font-bold text-title">{{Auth::user()->updated_at}}</span>
                        </div>

                            <div class="card_inner2">
                                <i class="fa fa-calendar fa-2x text-red"></i>
                                <p class="text-primary-p">Létrehozva</p>
                                <span class="font-bold text-title">{{Auth::user()->created_at }}</span>
                            </div>

            </div>

        <script>$('#close').click(function(){$('#menu').toggle();});</script>
        <script>$('#open').click(function(){$('#menu').toggle();});</script>



    @else
        <script>window.location = "/main";</script>
    @endif

</body>
</html>