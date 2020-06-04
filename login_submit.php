<?php
   require('includes/common.php');
   $email = $_POST['email'];
   $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";   //valitadions for email
   if (!preg_match($regex_email, $email)) {
        $email_error="Invalid email";
       header('location:login.php?email_error='.$email_error);
       }
    if(isset($_POST['email'])){
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $password=md5($password);   //encrypting password
    
        $sql="SELECT id,email from users where email='".$email."'AND password='".$password."'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);    
         if($num==0){
   
          $error="You have entered incorrect Password or Email <br><br> Or You did not registered yet!";   //showing message if password is not                                                                                                          correct
          header('location:login.php?error='.$error);
    
        }
    else{
         mysqli_fetch_array($result);
         $_SESSION['email']=$email;      //session created
         if (isset($_SESSION['email']))
         { header('location: product.php'); }
    
    }
   }

?>