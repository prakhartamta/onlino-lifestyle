<?php
 function check_if_added_to_cart($item_id){
        $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
        $email=$_SESSION['email'];
        $que="SELECT id from users where email='$email'";
        $result=mysqli_query($con,$que);
        $user=mysqli_fetch_row($result);
        $user_id=$user[0];
        $cquery="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
        $value=mysqli_query($con,$cquery);
        $rem=mysqli_num_rows($value);
        if($rem>=1){
           return 1;
        }
       else{
          return 0;
        }
    
 }
?>