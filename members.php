
<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root');
if($con){
	echo"Database Connection successful!!!";
}else{
	echo "Database Not Connected!!!"; 
}

mysqli_select_db($con, 'food_ordering');
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password = $_POST['password'];


$q = " select * from register  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" Already Registered ";
}else{

	$qy= " insert  into register(name , mobile, username, password) values ('$name' ,'$mobile','$username', '$password') ";
	mysqli_query($con, $qy);
}



