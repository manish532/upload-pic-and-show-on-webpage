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
  <style>
  
.color{
  background-color:#ccc;
}
  </style>
</head>
<body>

<div class="container my-5 p-2 color">
<center> <h1>Register employee details</h1></center>
<button class="border-0 color">
<a href="{{ route('datarecieve') }}" class="btn bg-primary mt-2 mr-5 text-light px-4">all data</a>
</button>  
 
 <div class="col-md-12 border border-1 p-5">
  <form action="send" method="post" enctype = multipart/form-data>
  @csrf
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    
    </div>
    <div class="form-group">
      <label for="number">number:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="custom-file pb-3">
    <input type="file" class="custom-file-input" id="customFile" name="file">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    </div>
  @if(Session::has("message"))
<div class="alert alert-success alert-dismissible fade show">
    <strong>{{(Session::get("message"))}}</strong> 
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
@endif  


</div>
</body>
</html>
