<?php
require('includes/common.php');
if (isset($_SESSION['email']))
{ header('location: product.php'); }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>About Us</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"><!--for linking to syle.css file-->
        <style>
          .tb{
                
            margin-top: 80px;
            }
            .column_style{
                border: 1px solid #000;
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
        
          <div class="container tb">
            <div class="col-md-4 col-sm-6 home-feature">
                <h3>WHO WE ARE</h3><br><br>
                <img src="img/about-img.jpg" alt="Responsive Image"><br><br>
                
                <!--I use here Inline Styling to allign text-->
                <p style="text-align:justify;">Online shopping is a form of electronic commerce which allows consumers to directly buy goods  or services from a seller over the Internet using a web browser. Consumers  find a product of  interest by visiting the website of the retailer directly or by searching among alternative vendors using a shopping search engine, which displays the same product’s availability and pricing at different e-retailers. As of 2016, costumers can shop online using a range of different computers, laptops, tablet computers and smartphones.</p> 
            </div>
            <div class="col-md-4 col-sm-6 home-feature">            
              <h3>OUR HISTORY</h3><br><br>
                <h4 style="color:#2B9BDC">1960</h4>
                <p style="text-align:justify;">One of the earliest form of trade conducted online was IBM’s online transaction processing (OLTP) developed in the 1960s.</p>
                
                 <h4 style="color:#2B9BDC">1985</h4>
                
                 <p style="text-align:justify;">The processing of financial transactions in real-time. The computerized ticket reservation system developed for American Airlines called Semi-Automatic Business Research Environment (SABRE) was one of its applications.</p>
                
                <h4 style="color:#2B9BDC">1990</h4>
                
                <p style="text-align:justify;">Here, computer terminal located in different travel agencies were linked to a large IBM mainframe computer, which processed transactions simultaneously and coordinated them so that all travel agents had access to the same information at the same time.</p>
                
                <p>The emergence of online shopping as we know today developed with the emergence of the Internet.</p>
              </div>
              
              <div class="col-md-4 col-sm-6 home-feature">
              <h3>GROWTH</h3><br><br>
                  
               <p>Growth is a online shoppers.</p>
                  
               <p style="text-align:justify;">As the revenues from online sales continued to grow significantly researchers identified different types of online shoppers, Rohm & Swaninathan[7] identified four categories and named them “convenience shoppers”. They focused on shopping motivations and found that the variety of products available and the perceived convenience of the buying online experience were significant motivating factors. </p>
              
              </div>
          </div>
       </div>
    
    </body>
  <footer id="footer">
    <?php
    include('includes/footer.php');
    ?>
 </footer >
</html>