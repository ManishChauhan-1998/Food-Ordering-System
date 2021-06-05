<!DOCTYPE html>
<html>
<head>
<title>Food Studio  </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'header.php'  ?>
<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">Contact Us</h1>
	</div>
	
	<h3 class="text-center">Send us mail</h3>
	<div class="w-50 m-auto">
	 <form action="user.php" method="post">
	 <div class="form-group">
	 <label>Username</label>
	 <input type="text" name="name"  placeholder="Name" autocomplete="off" class="form-control">
	 </div>
	  <div class="form-group">
	 <label>Email ID</label>
	 <input type="text" name="email" placeholder="Email ID" autocomplete="off" class="form-control">
	 </div>
	 
	  <div class="form-group">
	 <label>Mobile</label>
	 <input type="text" name="mobile"  placeholder="Mobile" autocomplete="off" class="form-control">
	 </div>
	  <div class="form-group">
	 <label>Message</label>
	 <textarea class="form-control" name="comment" placeholder="Type you message here..."></textarea>
	 </div>
	 <button type="submit" class="btn btn-primary">Submit</button>
	 </form>
	 
	 
	
</div>

</section>
<footer> 
	<p class="p-3 bg-dark text-white text-center">@TheFoodStudio<br>
	    Contact: +918291352002, +917745876156</p>
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>		
			
</body>
</html>