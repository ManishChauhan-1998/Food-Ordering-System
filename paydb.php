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
$cardno = $_POST['cardno'];
$validity = $_POST['validity'];
$cvv = $_POST['cvv'];
$name = $_POST['name'];

$query = "insert into payment (cardno, validity, cvv, name)
values('$cardno','$validity','$cvv','$name')";
mysqli_query($con, $query);

header('location:index.php');
?>