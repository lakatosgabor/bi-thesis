<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cours_style.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Chat</title>
</head>
<body>

    @if(isset(Auth::user()->email))
        <div class="header">
            <button id="open" name="open" type="button">Menü</button>
            <div class="header-p">
                Debreceni Egyetem Informatika Kar
                <br>
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
            <div class="sajat-feltoltesek">
                <div class="main__title">
                        <p>KURZUSOK</p>
                        <a class="new_course" href="newcourse">ÚJ KURZUS LÉTREHOZÁSA</a>
                </div>
                        <div class="card_inner1">
                            <img class="logo" src="{{asset('fotos/ik-logo.png')}}">
                            <p class="text-primary-p">Teszt 1 kurzus</p>
                            <span class="font-bold text-title">Belépés</span><br>
                            <span class="font-bold text-title">Szerkesztés</span>
                        </div>
                        <div class="card_inner1">
                            <img class="logo" src="{{asset('fotos/ik-logo.png')}}">
                            <p class="text-primary-p">Teszt 1 kurzus</p>
                            <span class="font-bold text-title">Belépés</span><br>
                            <span class="font-bold text-title">Szerkesztés</span>
                        </div>
                        <div class="card_inner1">
                            <img class="logo" src="{{asset('fotos/ik-logo.png')}}">
                            <p class="text-primary-p">Teszt 1 kurzus</p>
                            <span class="font-bold text-title">Belépés</span><br>
                            <span class="font-bold text-title">Szerkesztés</span>
                        </div>
                        <div class="card_inner1">
                            <img class="logo" src="{{asset('fotos/ik-logo.png')}}">
                            <p class="text-primary-p">Teszt 1 kurzus</p>
                            <span class="font-bold text-title">Belépés</span><br>
                            <span class="font-bold text-title">Szerkesztés</span>
                        </div>

                            <div class="card_inner1">
                                <i class="fa fa-user-secret fa-2x text-green"></i>
                                <p class="text-primary-p">Jogosúltság</p>
                                <span class="font-bold text-title">Oktatói</span>
                            </div>

                        <div class="card_inner1">
                            <i class="fa fa-wrench fa-2x text-yellow"></i>
                            <p class="text-primary-p">Módosítva</p>
                            <span class="font-bold text-title">{{Auth::user()->updated_at}}</span>
                        </div>
                        <div class="card_inner1">
                            <i class="fa fa-wrench fa-2x text-yellow"></i>
                            <p class="text-primary-p">Módosítva</p>
                            <span class="font-bold text-title">{{Auth::user()->updated_at}}</span>
                        </div>
                        <div class="card_inner1">
                            <i class="fa fa-wrench fa-2x text-yellow"></i>
                            <p class="text-primary-p">Módosítva</p>
                            <span class="font-bold text-title">{{Auth::user()->updated_at}}</span>
                        </div>
                        <div class="card_inner1">
                            <i class="fa fa-wrench fa-2x text-yellow"></i>
                            <p class="text-primary-p">Módosítva</p>
                            <span class="font-bold text-title">{{Auth::user()->updated_at}}</span>
                        </div>
            </div>

        <script>$('#close').click(function(){$('#menu').toggle();});</script>
        <script>$('#open').click(function(){$('#menu').toggle();});</script>



    @else
        <script>window.location = "/main";</script>
    @endif

</body>
</html>