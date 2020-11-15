<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table stlye=" border: 4px; ">
        <tr>
            @foreach($a as $i)
                <tr><td>{{$i->curs}}</td></tr>
                <tr><td>{{$i->text}}</td></tr>
                <tr><td>{{$i->file}}</td></tr>
                <tr><td>{{$i->created_at}}</td></tr>
            @endforeach
        </tr>
    </table>
</body>
</html>