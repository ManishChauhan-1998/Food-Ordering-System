<!DOCTYPE html>
<html>
<head>
<title>Food Studio  </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'header.php'  ?>
<div class="header">
<h2>Register</h2>
</div>
 <form action="members.php" method="post">
 
	 <div class="input-group">
	 <label>Name</label>
	 <input type="text" name="name"  placeholder="Name" >
	 </div>
	 <div class="input-group">
	 <label>Mobile</label>
	 <input type="text" name="mobile" placeholder="Mobile">
	 </div>
	  <div class="input-group">
	 <label>Username</label>
	 <input type="text" name="username" placeholder="Username">
	 </div>
	 
	  <div class="input-group">
	 <label>Password</label>
	 <input type="password" name="password"  placeholder="Password">
	 </div>
	 <div class="input-group">
	 <button type="submit" name="register" class="btn btn-primary">Register</button>
	 </div>
	 <p> Already Registered? <a href="login.php">Sign in</a>
	 
	 </form>
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