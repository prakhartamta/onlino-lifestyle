<?php
require('includes/common.php');
if (isset($_SESSION['email']))
{ header('location: product.php'); }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign-Up Page</title>
        

      
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        <style>
            .row_style{
                margin-top: 80px;
            }
        </style>
        
    </head>
    <body>
    <div class="content">
     <nav class="navbar navbar-inverse navbar-fixed-top">
          <?php
             require('includes/header.php');
          ?>
        </nav>
        <div class="container">
         <div class="row row_style">
            <div class= "col-xs-4 col-xs-offset-4">
                
                   
                       <h1>SIGN-UP</h1>
                       <form action="signup_script.php" method="POST">
                            <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Valid Email" required="true" >
                            </div>
                       <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password(Min. 6-characters)" required="true" pattern=".{6,}">
                            
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" placeholder="Enter Valid Phone Number(Ex. 844844853)" required="true">
                           
                         </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                        
                        <?php if(isset($_GET['account_error'])){ ?>
                            <div class="alert alert-danger"><?php echo $_GET['account_error']; ?></div><!--Alerting Message
                                                                                                        if account is already existed-->
                        <?php } ?>
                
                        <?php if(isset($_GET['email_error'])){ ?>
                              <div class="alert alert-danger"><?php echo $_GET['email_error']; ?></div><!--Alerting Message
                                                                                                             if email is not valid-->
                        <?php } ?>
                
                        <?php if(isset($_GET['contact_error'])){ ?>
                            <div class="alert alert-danger"><?php echo $_GET['contact_error']; ?></div><!--Alerting Message
                                                                                                        if contact is not valid-->
                       <?php } ?>
                       </form><br> 
                    </div>
               </div>
        </div>
    </div>
</body>
    <footer id="footer">
    <?php
    include('includes/footer.php');
    ?>
</footer>
    
</html>