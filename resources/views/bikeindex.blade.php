<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>bikes resource</h1> <br>
    <div>
        <div><h2>creat btn</h2></div>
        <a href="/Laravel/public/bikes/create">creat</a><!--方法一-->
        <a href="{{route('bikes.create')}}">create2</a><!--方法二 可直接打名字-->
    </div>
    <div>
        <div><h2>edit btn</h2></div>
        <a href="/Laravel/public/bikes/123/edit">edit</a>
        <a href="{{route('bikes.edit',['bike'=>30,'test'=>123])}}">edit2</a>
    </div>
    <div>
        <div><h2>student btn</h2></div>
        <a href="{{route('student123')}}">student btn</a><br>
    </div>

    @php
        foreach ($data['myarr'] as $key => $value) {
            echo("$key=>$value<br>");
        }
        echo $data['v1'];   echo "<br>".$data['v2'];
    @endphp
</body>
</html>