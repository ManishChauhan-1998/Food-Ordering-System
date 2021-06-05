<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" Database Connection successful!!!";
}else{
	echo "Database Not Connected!!!"; 
}

mysqli_select_db($con, 'food_ordering');

$username = $_POST['username'];
$password = $_POST['password'];


$q = " select * from register  where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $username;
	header('location:index.php');


}else{

	header('location:login.php');
}



?>