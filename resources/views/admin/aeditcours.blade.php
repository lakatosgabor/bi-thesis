<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('addtask') }}" method="POST" enctype="multipart/form-data" >
    {{csrf_field() }}
        
        Feladat: <input type="text" name="task">
        Fájl: <input type="file" name="file" id="file">
        <input type="submit" value="Küldes">    
    </form>
</body>
</html>