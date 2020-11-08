<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cours_style.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Kézikönyv</title>
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
            <div class="sajat-feltoltesek">
                <div class="main__title">
                        <h1>KÉZIKÖNYV</h1>
                </div>
                <p>
                    <p>1) A rendszerhez szükséges bejelentkezési adatokat az oktató rögzíti a Hallgatók menüpontban. Az oldalon található űrlapot értelemszerűen kitöltve, a hallgatót hozzárendeli a rendszerhez.</p>
                    <p>2) A hallgató bejelentkezni az email és a jelszó párossal tud, amit az oktatója biztosít számára. A hallgató a jelszavát a Profil menüpontban tudja megváltoztatni.</p>
                    <p>3) Az Üzenőfal menüpontban a felhasználóknak lehetőségük van a tanulmányokkal kapcsolatos kérdéseket feltenni, és a hallgató társaikkal észrevételeket, megjegyzéseket megosztani. Az itt történő tartalommegosztás stílusát az egyetem etikai kódexe szabályozza.</p>
                    <p>4) A Chat menüpontban a felhasználóknak lehetőségük van valós időben az adott tárggyal kapcsolatos feladatok megbeszélni. Az itt történő tartalommegosztás stílusát az egyetem etikai kódexe szabályozza.</p>
                    <p>5) A Profil menüpontban a hallgató a róla tárolt adatokat és a már korábban feltöltött feladatait látja listázva. Személyes adatainak a módosítását az oktatójától kérheti.</p>
                </p>
            </div>

        <script>$('#close').click(function(){$('#menu').toggle();});</script>
        <script>$('#open').click(function(){$('#menu').toggle();});</script>



    @else
        <script>window.location = "/main";</script>
    @endif

</body>
</html>