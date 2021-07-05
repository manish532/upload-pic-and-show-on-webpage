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

<div class="container my-5">
<h1>update data</h1>
 <div class="border border-1 col-md-12 p-5">
  <form action="/api/update" method="post" enctype = multipart/form-data>

  <div class="form-group">
  <input type="hidden" class="form-control" id="id" placeholder="Enter id" name="id" value="{{ $data->id }}">
      
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$data->name}}">
    
    </div>
    <div class="form-group">
      <label for="number">number:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter number" name="number" value="{{ $data->number }}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $data->email }}">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="password" value="{{ $data->password }}">
    </div>
    <div class="custom-file pb-3">
    <input type="file" class="custom-file-input" id="customFile" name="file" value="{{ $data->file }}">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    </div>
  @if(Session::has("msg"))
<div class="alert alert-success alert-dismissible fade show">
    <strong>{{(Session::get("msg"))}}</strong> 
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif  


</div>
</body>
</html>
