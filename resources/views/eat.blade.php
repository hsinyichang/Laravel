<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>餐廳訂位</h3>
    {{-- <p>
        {!! $data['str']!!}
    </p> --}}

    {{-- 原生php語法 --}}
    <?php
    echo "姓名:".$data['name']. "<br>";
    echo "人數:".$data['num'] ."人";
    ?>
{{-- blade語法 --}}
    <p>{{$data['name']}}</p>
    <p>{{$data['num']}}</p>

    {{-- blade語法 --}}
    @php
     echo $data['name']."<br>";
     echo $data['num'];   
    @endphp
</body>
</html>