<?php
   require('includes/common.php');
   $id=$_GET['id'];
   $email=$_SESSION['email'];
   $Que="SELECT id from users where email='$email'";
   $res=mysqli_query($con,$Que);
   $user=mysqli_fetch_row($res);
   $user_id=$user[0];
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
   $dquery="DELETE FROM `users_items` WHERE `users_items`.`user_id` = '$user_id' And users_items.item_id='$id' ";
   $result=mysqli_query($con,$dquery);
   if($result=true)
     {
      header('location:cart.php');
     }
   else{
      echo "The is not deleted due to some technical problem!";
     }
?>