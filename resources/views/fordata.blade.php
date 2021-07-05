<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1>all details</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">number</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">images</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
<tbody>

@if(!empty($data))

@foreach($data as $datas)
    <tr>
      
      <th>{{ $datas->id }}</th>
      <td>{{ $datas->name }}</td>
      <td>{{ $datas->number }}</td>
      <td>{{ $datas->email }}</td>
      <td>{{ $datas->password }}</td>
      <td><img src="#" style="width:100px;height:100px;" />m</td>
      <!-- <td><img src="{{'data:image/jpeg;base64,'.base64_encode(Storage::get($datas->file))}}" style="width:100px;height:100px;" /></td> -->
      <td><a href="edit/{{$datas->id}}">edit</td>
      <td><a href="delete/{{$datas->id}}">delete</td>

    </tr>
 @endforeach
 @endif
</tbody>
</table>

</div>
</body>
</html>