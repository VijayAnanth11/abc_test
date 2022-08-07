<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
  </head>
  <body>
  @include("navbar")
  
  <div class="row header-container justify-content-center">
  <div class="header">
    <h1>Product Management System</h1>
  </div>
</div>

<div class="card mb-3">
  <img src="https://media.istockphoto.com/photos/assorted-indian-recipes-food-various-picture-id922783734?k=20&m=922783734&s=612x612&w=0&h=_oV4oOrb8kC4RVgAI6RrGfQ8lIKsnP89lwwjHfhxUzQ=" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Products</h5>

    <div class="col-md-12 row p-5">
    <div class="col-md-6">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Fixed Price</th>
      <th scope="col">Discount Price</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($personal_access_tokens as $team)
    <tr>
      <th scope="row">{{ $team->id}}</th>
      <td>{{ $team->code}}</td>
      <td>{{ $team->name}}</td>
      <td>{{ $team->fixedprice}}</td>
      <td>{{ $team->discountprice}}</td>
      <td>
        <a href="/delete-insert/{{$team->id }}" class="btn btn-danger">Delete</a>
        <a href="/edit/{{$team->id }}" class="btn btn-success">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="col-md-6">
<form class="form" method="post" action="/insert-data" >
@csrf
<h3>Add Product</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">code</label>
    <input type="text" class="form-control" name="code">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Fixed Price</label>
    <input type="number" class="form-control" name="fixedprice" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Discount Price</label>
    <input type="number" class="form-control" name="discountprice" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

</div>
</div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>