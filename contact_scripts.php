<?php
 require('includes/common.php');

  $email=mysqli_real_escape_string($con,$_POST['email']);
  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";  //valitadions for email
  if (!preg_match($regex_email, $email)) {
     echo "Incorrect email";
    }
  else{
   $name=mysqli_real_escape_string($con,$_POST['name']);
   $address=mysqli_real_escape_string($con,$_POST['address']);
      
   $valuequery="Insert into contact_us(name,email,address) VALUES ('$name','$email','$address')";
     if(mysqli_query($con,$valuequery)){
       $message="Your Request Is Successfully Sended to us!!";
       header('location:contact.php?message='.$message);
     }
   }
?>