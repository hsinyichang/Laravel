<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
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
            <td>{{$value->chinese}}</td>
            <td>{{$value->english}}</td>
            <td>{{$value->math}}</td>
            <td>
              <a href="{{route('students.edit',['student'=>$value->id])}}" class="mb-3 btn btn-primary" role="button">edit</a>
              <a href="{{route('students.create')}}" class="mb-3 btn btn-danger" role="button">del</a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
