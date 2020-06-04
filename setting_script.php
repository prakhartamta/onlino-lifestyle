<?php
    require('includes/common.php');
    if (!isset($_SESSION['email']))
       { header('location: index.php'); 
       }
      $oldpassword = $_POST['oldpassword'];
      $oldpassword = mysqli_real_escape_string($con, $oldpassword);
      $oldpassword=md5($oldpassword);   //encrypting passwords

      $newpassword = $_POST['newpassword'];
      $newpassword = mysqli_real_escape_string($con, $newpassword);
      $newpassword=md5($newpassword);

      $repassword = $_POST['repassword'];
      $repassword = mysqli_real_escape_string($con, $repassword);
      $repassword=md5($repassword);

       $email=$_SESSION['email'];
       $que="SELECT password,id from users where email='$email'";
       $res=mysqli_query($con,$que)or die($mysqli_error($con));
       $row=mysqli_fetch_array($res);
       $orig_pass=$row['password'];
       
  
  if($newpassword==$repassword)
   { 
     if($oldpassword==$orig_pass)
     {
        $cquery="UPDATE users SET password = '$newpassword' WHERE users.email = '$email'";
        $result=mysqli_query($con,$cquery)or die($mysqli_error($con));
        if($result==true)
        {
            $updated="Your password is updated.";
            header('location:setting.php?updated='.$updated);
        }
     }
    else
     {
        $error_password="Your Old Password is wrong!!";
        header('location:setting.php?error_password='.$error_password);
     }

   }
 else{
    $error="The passwords are not Same!!";
    header('location:setting.php?error='.$error); 
    }
?>