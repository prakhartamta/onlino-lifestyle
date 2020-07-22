<?php
  require('includes/common.php');
    // Redirects the user to products page if he/she is logged in.
    if (isset($_SESSION['email']))
       { header('location: product.php'); }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Onlino LifeStyle</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"><!--for linking to syle.css file-->
   </head>
   <body>
        
      <nav>
            <?php
             require('includes/header.php');
             ?>
        </nav>
          
     
           <div>
            <!--Main banner image starts-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
         
         </div>
       <!--Main banner image end-->

    <!--Item categories listing-->
    <div class="container" style="margin-top: 20px">
        <row>
              <div class="col-lg-4 col-xs-12">
                <a href="product.php#cameras" alt="">
                <div class="thumbnail">
                  <img src="img/1.jpg">
                     <div class="caption">
                        <center><h3>Cameras</h3>
                         <p>Choose among the best available in the world.</p>
                       </center>
                     </div>
                
                </div>
                </a>
            </div>
            
        <div class="col-lg-4 col-xs-12">
            <a href="product.php#watches">
            <div class="thumbnail">
                <img src="img/7.jpg" alt="">
                <div class="caption">
                   <center><h3>Watches</h3>
                    <p>Original watches from the best brand.</p>
                   </center>
               </div>
            </div>
            </a>
         </div>
            
               <div class="col-lg-4 col-xs-12">
                 <a href="product.php#shirts">
                 <div class="thumbnail">
                    <img src="img/8.jpg" alt="">
                      <div class="caption">
                         <center><h3>Shirts</h3>
                          <p>Our exquisite collection of shirts.</p>
                         </center>
                     </div>
                </div>
                </a>
               </div>
       </row>
            
      </div>
        <!--Item categories listing end-->
     
  </body>
  <footer id="footer">
    <?php
    include('includes/footer.php');
    ?>
  </footer>

</html>