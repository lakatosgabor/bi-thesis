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
                <a href="{{url('course')}}">Kurzusok</a>
                <a href="{{url('chat')}}">Chat</a>
                <a href="{{url('asks')}}">Kézikönyv</a>
                <a href="{{url('/main/logout')}}">Kijelentkezés</a>
            </nav>
    </div>      
        <form action="{{ route('addpost') }}" method="POST" enctype="multipart/form-data">
           {{csrf_field() }}
            <input type="text" name="name" value="{{Auth::user()->name }}" hidden>
            <input id="msg" type="textarea" name="post" placeholder="Bejegyzés írása..."><br><br>
            Fénykép csatolása: <input type="file" name="image"><br><br>
            <input id="logb" type="submit" value="Megosztás">
        </form>
        @foreach ($news as $new)
            <div class="card_inner1">          
                <div class="post">
                    <a href="{{ asset('uploads/images/'.$new->image)}}"><img class="post_img" src="{{ asset('uploads/images/'.$new->image)}}" alt="Image"></a>
                    <b><u>{{$new->name}}</u></b><br>
                    {{$new->created_at}}<br><br> 
                    {{$new->post}}
                </div>
                            
            </div> 
        @endforeach

    <script>$('#close').click(function(){$('#menu').toggle();});</script>
    <script>$('#open').click(function(){$('#menu').toggle();});</script>

    



@else
    <script>window.location = "/main";</script>

@endif

</body>
</html>