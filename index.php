<?php
    include_once 'header.php';
?>

<div class="jumbotron text-center">
  <h1>FWStyle++</h1>
  <p>CSS Style for Freewar in german and english</p> 
</div>
<?php
  if(isset($_SESSION['u_id'])){
      echo "du bist eingeloggt";
  }?>

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
<section class="main-container">
  <div class="main-wrapper">
    <h2>Home</h2>
  </div>
</section>
<?php
    include_once 'footer.php';
?> 
