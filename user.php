<?php 
$con=mysqli_connect('localhost','root');
if($con)
{
    echo "Database Connected Successfully!!!";
}
else {
    echo "Database Not Connected!!!";
}
mysqli_select_db($con, 'food_ordering');
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into contact (name, email, mobile, comment)
values('$name','$email','$mobile','$comment')";
mysqli_query($con, $query);

header('location:index.php');
?>