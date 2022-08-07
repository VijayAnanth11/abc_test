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
  <img src="https://guardian.ng/wp-content/uploads/2020/07/healthy-food-background-fruits-vegetables-cereal-nuts-superfood-dietary-balanced-vegetarian-eating-products-kitchen-143677456.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Categories</h5>
    <p class="card-text">You can find here all the information about products.</p>
    
    <div class="col-md-12 row p-5">
    <div class="col-md-6">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Operation</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($personal_access_tokens as $team)
    <tr>
      <th scope="row">{{ $team->id}}</th>
      <td>{{ $team->name}}</td>
      <td>
        <a href="/product" class="btn btn-success">Add Products</a>
        
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="col-md-6">
<form class="form" method="post" action="/category-data" >
@csrf
  <div class="mb-3">
    <h3>Add Cateogry</h3>
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

  </body>
  </div>
</div>


<footer></footer>  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>