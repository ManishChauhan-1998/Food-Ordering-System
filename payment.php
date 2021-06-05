<!DOCTYPE html>
<html>
<head>
<title>Food Studio</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/Style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'header.php'  ?>
<div class="header">
<h2>Payment</h2>
</div>
 <form action="paydb.php" method="post">
 
     <img src="Images/icon1.png"  alt="logo" style="width:50px;">
     <img src="Images/icon2.png"  alt="logo" style="width:40px;">
     <img src="Images/icon3.jpg"  alt="logo" style="width:40px;">
     <img src="Images/icon4.jpg"  alt="logo" style="width:40px;">
     <img src="Images/icon5.png"  alt="logo" style="width:40px;">
	 <div class="input-group">
	 <label>Card Number</label>
	 <input type="text" name="cardno">
	 </div>
	 <div class="input-group">
	 <label>Validity</label>
         <input type="date" name="validity">
	
	 </div>
	  <div class="input-group">
	 <label>CVV</label>
	 <input type="text" name="cvv">
	 </div>
	 
	  <div class="input-group">
	 <label>Card holder Name</label>
	 <input type="text" name="name">
	 </div>
	 <div class="input-group">
	 <button type="submit" class="btn btn-primary">Submit</button>
	 </div>
           
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