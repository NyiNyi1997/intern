<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
<form method='post' action="{{url('footballs')}}">
@csrf
<div class='col-sm-6'> 
<legend>Football Match Registration</legend>
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Seat Number</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="seatnumber">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>&nbsp;
  <button type="submit" class="btn btn-primary">Edit</button>&nbsp;
  <button type="Reset" class="btn btn-primary">Cancle</button>
</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>