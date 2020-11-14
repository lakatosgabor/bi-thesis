<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="{{ url('addtask' )}}"  enctype="multipart/form-data" >
    {{csrf_field() }}
        
            <input type="text" name="table" hidden value="{{ $name }}">
        
        Feladat: <input type="text" name="task">
        Fájl: <input type="file" name="file" id="file">
        <input type="submit" value="Küldes">    
    </form>
</body>
</html>