<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chat_style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Chat</title>
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
                        <div class="message_box">
                            @foreach($msg as $m)
                            <p><span>{{$m->name}}: </span>{{$m->message}}</p>
                            @endforeach
                        </div>

                        <form action="{{ route('addchat') }}" method="POST">
                        {{csrf_field() }}
                                <input type="text" placeholder="Üzenet.." name="message" id="message" autocomplete="off" autofocus >    
                                <input type="text" name="name" value="{{Auth::user()->name }}" hidden > 
                                <input type="submit" name="submit" id="send">

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