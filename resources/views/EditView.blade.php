
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class='col-sm-6 center'> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Address</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Seat Number</th>
      <th>Price</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>

@foreach($value as $value)
<tr>
<td>{{$value->id}}</td>
<td>{{$value->name}}</td>
<td>{{$value->address}}</td>
<td>{{$value->email}}</td>
<td>{{$value->phone}}</td>
<td>{{$value->seatnumber}}</td>
<td>{{$value->price}}</td>
<td><a href="resources/view/EditView.blade.php".{{$value->id}}>Edit</a></a></td>
</tr>
@endforeach
  </tbody>
</table>
</div>
</body>
</html>