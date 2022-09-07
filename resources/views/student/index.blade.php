<!DOCTYPE html>
<html lang="en">
<head>
  <title>學生成績資料表</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 style="text-align: center;font-weight:900">學生成績表</h2>
  <a href="{{route('students.create')}}" class="mb-3 btn btn-success" role="button">Add</a>
  <table class="table table-danger table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Chinese</th>
        <th>English</th>
        <th>Math</th>
        <th>options</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $value)
          <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->chinese}}分</td>
            <td>{{$value->english}}分</td>
            <td>{{$value->math}}分</td>
            <td>
              <a href="{{route('students.edit',['student'=>$value->id])}}" class="mb-3 btn btn-primary" role="button">edit</a>
              {{-- <a href="{{route('students.destroy',['student'=>$value->id])}}" class="mb-3 btn btn-danger" role="button">del</a> --}}
              <form action="{{route('students.destroy',['student'=>$value->id])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="del" class="mb-3 btn btn-danger">
              </form>
              @php
                  
              @endphp
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
