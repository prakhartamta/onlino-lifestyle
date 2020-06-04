<?php
require('includes/common.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Product Page</title>
        

      
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">
        <style>
           .jstyle{
               margin-top: 80px;
               background-color: #c0c0c0;
           }
            .imdw{
                padding-bottom: 8px;
            }
        </style>
        </head>
       
    <body>
        <div class="content">
       <nav>
            <?php
             require('includes/header.php');
             include('includes/check-if-added.php');
          
            ?>
        </nav>
        
        <div class="container">
         <!-- Jumbotron Header -->
         <div class="jumbotron jstyle">
            <h1>Welcome to our Lifestyle Store!</h1>
             <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
         </div>
            <div>
            <?php if(isset($_GET['msg'])){ ?>
              <div class="alert alert-success"><?php  echo $_GET['msg']; //alert message for user of successful registering ?>
              </div>
           <?php } ?>
            <row class="text-center" id="cameras">
            <div class="col-md-3 col-sm-6 ">
                <div class="thumbnail">
                <img src="img/5.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Cannon EOS</h3>
                     <h5>Price:Rs.36000.00</h5>
                     
                     <?php 
                     if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { //We have created a function to check whether this particular product is added to cart or not.
                     if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?>
                     <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                    </div>
                    
                </div>
                </div>
                 <div class="col-md-3 col-sm-6 home-feature">
                  <div class="thumbnail">
                    <img src="img/2.jpg" alt="Responsive Image">
                    <div class="caption">
                    <h3 style="font-weight: bold">Nikon DSLR</h3>
                     <h5>Price:Rs.40000.00</h5>
                     
                    <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(2)) { //We have created a function to check whether this particular product is added to cart or not.
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; //This is same as if(check_if_added_to_cart != 0) 
                     }
                    else { ?> <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/3.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Sony DSLR</h3>
                     <h5>Price:Rs.45000.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(3)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/4.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Olympus DSLR</h3>
                     <h5>Price:Rs.50000.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(4)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                
                </div>
            </row>
                
                
                
            <row class="text-center" id="watches">
            <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/9.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Titan Model #301</h3>
                     <h5>Price:Rs.13000.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(5)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                    
                </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/10.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Titan Model #201</h3>
                     <h5>Price:Rs.3000.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(6)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/11.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">HMT Milan</h3>
                     <h5>Price:Rs.8000.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(7)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/12.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Faber Luba #111</h3>
                     <h5>Price:Rs.18000.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(8)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                
                </div>
            </row>
                
                
            <row class="text-center" id="shirts">
            
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/13hh.jpg" class="imdw" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">H&W</h3>
                     <h5>Price:Rs.800.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(9)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                </div>
                
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/6.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Luis Phil</h3>
                     <h5>Price:Rs.1000.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(10)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/13.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">John Zok</h3>
                     <h5>Price:Rs.1500.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(11)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                <div class="thumbnail">
                <img src="img/14.jpg" alt="Responsive Image">
                 <div class="caption">
                    <h3 style="font-weight: bold">Jhalsani</h3>
                     <h5>Price:Rs.1300.00</h5>
                     
                     <?php if (!isset($_SESSION['email'])) { ?> 
                     <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                     <?php } 
                     else { 
                     if (check_if_added_to_cart(12)) {  
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                     }
                    else { ?> <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                     <?php } 
                     } ?>
                     
                     
                    </div>
                </div>
                
                </div>
            </row>
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