<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard_style.css')}}">
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js”></script>
    <title>Profil</title>

<script>

jQuery(document).ready(function() {
  
  var btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });

});

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
</script>


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
                <a href="{{url('tasks')}}">Feladatok</a>
                <a href="{{url('chat')}}">Chat</a>
                <a href="{{url('/main/logout')}}">Kijelentkezés</a>
            </nav>
        </div>

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
                        <a href="{{url('/main/logout')}}" style="color: red; padding-left:430px;">Kijelentkezés</a>
                    </td>    
                </tr>
            </table>
        </div>
  
        <div class="sajat-feltoltesek"> 
        <a id="button"></a>   
            <table>
                <caption>FELTÖLTÖTT FELADATAIM</caption>
                <tr>
                    <th>Megnevezés</th>
                    <th>Megjegyzés</th>
                    <th>Dátum</th>
                    <th>Műveletek</th>

                </tr>
                @if (Auth::user()->neptun == "ABEOA2")
                    @foreach($file as $key=>$data)
                <tr>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->created_at}}</td>
                    <td><a href="/files/{{$data->id}}"> <img class="view" src="{{asset('fotos/view.png')}}" alt="Megtekint" title="Megtekint"></a>
                    <a href="/file/download/{{$data->file}}"><a href="/files/{{$data->id}}"> <img class="view" src="{{asset('fotos/download.png')}}" alt="Letöltés" title="Letöltés"></a>
                    <a href="#"> <img class="view" src="{{asset('fotos/delete.png')}}" alt="Törlés" title="Törlés"></td>
                </tr>
                    @endforeach
                @endif
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