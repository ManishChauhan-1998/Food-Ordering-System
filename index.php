<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html>
<head>
<title> The Food Studio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'header.php'  ?>
<div class="container">
<h2 class="text-center text-success">Welcome <?php echo $_SESSION['username'];?></h2>
<a href="logout.php">Logout</a>
</div>
<br>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block mx-auto" src="Images/back.jpg" alt="Rolls Mania" width="1400" height="600">
      <div class="carousel-caption">
        <h3>Rolls Mania</h3>
        <p> Have a great time in THE FOOD STUDIO!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="Images/back1.jpg" alt="Veg Planet" width="1400" height="600">
      <div class="carousel-caption">
        <h3>Veg Planet</h3>
        <p>Feeling Hungry, Hurry up!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto" src="Images/back3.jpg" alt="Dessert" width="1400" height="600">
      <div class="carousel-caption">
        <h3>Dessert</h3>
        <p>Tasty and Yummy!</p>
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
<br>
<h3 class="text-center"> For Food Menu <a href="cart.php">Click Here</a></h3>
<br>

<footer> 
	<p class="p-3 bg-dark text-white text-center">@TheFoodStudio<br>
	    Contact: +918291352002, +917745876156</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>