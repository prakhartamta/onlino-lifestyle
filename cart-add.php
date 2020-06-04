<?php
require('includes/common.php');
$item_id=$_GET['id'];
if(!isset($_SESSION['email']))
{ header('location: index.php'); 
}
else{  
$email=$_SESSION['email'];
$Que="SELECT id from users where email='$email'";
$res=mysqli_query($con,$Que);
$user=mysqli_fetch_row($res);
$user_id=$user[0];
$query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$r=mysqli_query($con,$query);
if($r==true)
{ 
    header('location: product.php'); 
}
}

?>