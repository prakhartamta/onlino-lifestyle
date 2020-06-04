<?php
   require('includes/common.php');

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password=md5($password);                                  //ecrypting password

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address); 
  

   
   $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";     //valitadions for email
   $regex_contact="/^[789][0-9]{9}$/";                             //valitadions for contact


    $squery="SELECT id from users WHERE email='".$email."'";
    $res=mysqli_query($con,$squery)or die($mysqli_error($con));

    if(mysqli_num_rows($res)!=0){
    $account_error="The account is Already Existed";
    header('location:signup.php?account_error='.$account_error);
        
    } else if (!preg_match($regex_email, $email)) {
     $email_error="Invalid email!";
     header('location:signup.php?email_error='.$email_error);
  }  else if (!preg_match($regex_contact, $contact)) {
     $contact_error="Invalid contact!";
     header('location:signup.php?contact_error='.$contact_error);
  } 
    
    else{
    
        $iquery="Insert into users (name,email,password,contact,city,address) VALUES                                                ('$name','$email','$password','$contact','$city','$address')";
        mysqli_query($con,$iquery) or die(mysqli_error($con));
        mysqli_insert_id($con);
    
        $_SESSION['email']=$email;
        if (isset($_SESSION['email']))
        $msg="Successfully Registered";
        { header('location: product.php?msg='.$msg); }

        }


?>