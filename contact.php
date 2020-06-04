<?php
require('includes/common.php');
if (isset($_SESSION['email']))
{ header('location: product.php'); }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Contact Us</title>
        
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
                          
               <?php if(isset($_GET['message'])){ ?>
                 <div class="alert alert-success"><?php  echo $_GET['message']; ?>
                 </div>
               <?php
                } ?>
        
                 <div class="col-md-10 col-sm-6 home-feature">
                   <h1>Live Support</h1>
                    <!--I use here Inline Styling to allign text-->
                   <p  style="text-align:justify;">The Contact Us page is one of the most visited pages on any website.That seems like a complelling enough reason to redesign your Contacts section to better meet your users needs and grab their attention. While working on this post, I came across hundreds of beautifully made websites,yet their Contact Us pages were, for the most part, dissapointing. Most Contact pages were, for the most part,dissapointing.Most Contact pages are made for show, with just an email address,phone ,location, and some short boring text on a plain background reason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds.</p>
                 </div>
              
                 <div class="col-md-2 col-sm-6 home-feature">
                  <img src="img/contact.png" alt="Responsive Image"><br><br>
                 </div>
              
            <div class="col-md-8 col-sm-6 home-feature">
              <h1>CONTACT US</h1>
               <form method="post" action="contact_scripts.php">
                   <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                   </div>
                   
                   <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                   
                   <div class="form-group">
                       <textarea type="text" rows="4" class="form-control" name="address" placeholder="Address" required="true"></textarea>
                   </div>
                   
                   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                   
                   <br><br>
               </form>
              </div>
              <div class="col-md-4 col-sm-6 home-feature">
                 <h3>COMPANY INFORMATION :</h3>
                 <p>Gurgaon, India-122018</p><br>
                 <p>Phone: +91 8448444853</p><br>
                 <p>Email: training@internshala.com</p><br><br>    
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