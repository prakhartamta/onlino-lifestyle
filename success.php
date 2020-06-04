<?php
require('includes/common.php');
if (!isset($_SESSION['email']))
{ header('location: index.php'); }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Success Page</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        <style>
            .ps{
                margin-top: 80px;
            }
        </style>
    </head>
 <body>
 <div class="content">
   <div class="container">
    <div class="jumbotron ps">
        <?php
         $ids=$_GET['ids'];
        //We will change the status of the items purchased by the user to 'Confirmed'
         $query="UPDATE users_items SET status = 'Confirmed' WHERE item_id IN ($ids) ";
          $res=mysqli_query($con,$query);
              date_default_timezone_set('Asia/Calcutta');
              $date=date('y-m-d');
              $time=date('H:i:s');
              $td=$date." ".$time;  //Taking the correct date and time when order is placed
              $iquery="UPDATE users_items SET date='$td' WHERE item_id IN ($ids)";  
              mysqli_query($con,$iquery);
          if($res=true)
          {
              
            ?> 
        
        
           <center><p>Your order is confirmed. Thank you for shopping with us.</p> </center><hr>
           <center><p><a href="product.php">Click here</a> to purchase any other item.</p></center>
            
           <?php
            }
             
          ?>
       </div>
     </div>
   </div>
 </body>
<footer id="footer">
    <?php
         require('includes/footer.php');
    ?>
</footer>
</html>