<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner img { width: 100%; height: 100%;	}
  </style>
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
  <form class="form-inline">
  <label class="sr-only" for="inlineFormInputName2">Name</label>
  <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Nickname">

  <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
  <div class="input-group mb-2 mr-sm-2">
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password">
  </div>

  <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
    <label class="form-check-label" for="inlineFormCheck">
      Merken
    </label>
  </div>

  <button type="submit" class="btn btn-dark mb-2">Submit</button>
</form>
</nav>

<div class="jumbotron text-center">
  <h1>FWStyle++</h1>
  <p>CSS Style for Freewar in german and english</p> 
</div>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="bg-dark"></li>
    <li data-target="#demo" data-slide-to="1" class="bg-dark"></li>
    <li data-target="#demo" data-slide-to="2" class="bg-dark"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bild.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3 class="text-dark">Los Angeles</h3>
        <p class="text-dark">We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="bild.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
       <h3 class="text-dark">Chicago</h3> 
        <p class="text-dark">Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="bild.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
         <h3 class="text-dark">New York</h3>
        <p class="text-dark">We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
</body>
</html>
