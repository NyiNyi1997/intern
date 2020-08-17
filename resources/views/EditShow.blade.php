<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
<form method='post' action="{{Route('register.show',$result->id)}}">
@csrf
@method('PUT')
<div class='col-sm-6'> 
<legend>Football Match Registration</legend>

<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="{{$result->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text"  name="address"  value="{{$result->address}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email"  value="{{$result->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="form-group">
    <label >Phone</label>
    <input type="text" name="phone"  value="{{$result->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label>Seat Number</label>
    <input type="number" name="seatnumber" value="{{$result->seatnumber}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="text" name="price" value="{{$result->price}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>&nbsp;
  <button type="Reset" class="btn btn-primary">Cancle</button>
</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>