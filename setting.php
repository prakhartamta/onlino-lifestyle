<?php
require('includes/common.php');
if (!isset($_SESSION['email']))
{ header('location: index.php'); }

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Setting Page</title>
        

      
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
        <nav>
            <?php
             require('includes/header.php');
          
            ?>
        </nav>
          <div class="container">
              <div class="row row_style">
                <div class= "col-xs-4 col-xs-offset-4">
                       
                        
                
                       <h3>Change Password</h3>
                       
                     <form action="setting_script.php" method="POST">
                            
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldpassword" placeholder="Old Password" required="true">
                         </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password" required="true" 
                            pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repassword" placeholder="Re-type New Password" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Change</button><br><br>
                         
                        <?php if(isset($_GET['updated'])){ ?>
                            <div class="alert alert-success"><?php echo $_GET['updated']; ?></div><!--Alerting Message
                                                                                                      if the password is updated-->
                         <?php } ?>
                         
                        <?php if(isset($_GET['error_password'])){ ?>
                           <div class="alert alert-danger"><?php echo $_GET['error_password']; ?></div><!--Alerting Message
                                                                                                         if old password is incorrect-->
                        <?php } ?>
                         
                          <?php if(isset($_GET['error'])){ ?>
                           <div class="alert alert-danger"><?php echo $_GET['error']; ?></div><!--Alerting Message
                                                                                                if re password and new password are not same-->
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