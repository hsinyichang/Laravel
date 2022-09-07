<!DOCTYPE html>
<html lang="en">
<head>
  <title>修改學員資料</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 style="text-align: center;font-weight:900">修改資料</h2>

  <table class="table table-danger table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Chinese</th>
        <th>English</th>
        <th>Math</th>
      </tr>
    </thead>
    <tbody>
      <form action="{{route('students.update',['student'=>$data->id])}}" method="post">  <!--編輯後到update function執行更新-->
          @csrf  <!--token保護機制-->
          @method('PUT')  <!--要加上這行 資料才能傳送-->
          <tr>    <!--因為是擷取單筆資料  所以不用foreach-->
            <td>{{$data->id}}</td>  
            <td><input type="text" name="name" id="name" value="{{$data->name}}"></td>
            <td><input type="number" name="chinese" id="chinese" value="{{$data->chinese}}"></td>
            <td><input type="number" name="english" id="english" value="{{$data->english}}"></td>
            <td><input type="number" name="math" id="math" value="{{$data->math}}"></td>
            
          </tr>
      
      <tr>
        <td colspan="5"><button class="btn btn-success" type="submit">edit</button></td>
      </tr>
    </form>
    </tbody>
  </table>
</div>

</body>
</html>
