<!--This page is for the developer or person who is controls the website in backend. This is the request of contact page form this file 
only developer or person who is controls the website in backend can see after going to (http://localhost/training_project/fordeveloper.php)-->
<?php
require('includes/common.php');
$select_query="SELECT * FROM contact_us";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$total_rows_fetched=mysqli_num_rows($select_query_result);
?>
<html>
    <head>
<title>PHP SYNTAX</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1.0">  
    </head>
<body>
<div class="container">
   <?php while($row=mysqli_fetch_array($select_query_result)) {?>
    <div class="row">
    <div class="col-lg-12"><h4>User</h4></div>
    </div>
    
    <div class="row">
    <div class="col-xs-1">Id:</div>
    <div class="col-xs-11"><?php echo $row['id'] ?></div>
    </div>
    
    <div class="row">
    <div class="col-xs-1">Name:</div>
    <div class="col-xs-11"><?php echo $row['name'] ?></div>
    </div>
    
    <div class="row">
    <div class="col-xs-1">Email:</div>
    <div class="col-xs-11"><?php echo $row['email'] ?></div>
    </div>
    
    <div class="row">
    <div class="col-xs-1">Address:</div>
    <div class="col-xs-11"><?php echo $row['address'] ?></div>
    </div>
    
    <hr>
    
    <?php } ?>
    </div>
    
</body>    
</html>
