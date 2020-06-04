<?php
    
       require('includes/common.php');
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $Que="SELECT id from users where email='$email'";
        $res=mysqli_query($con,$Que);
        $user=mysqli_fetch_row($res);
        $user_id=$user[0];
        $query="SELECT * FROM users_items INNER JOIN item ON users_items.item_id=item.id WHERE users_items.status='Added to cart' 
                AND users_items.user_id= $user_id ";
        $result=mysqli_query($con,$query);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Cart Page</title>
        

      
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        
        <!-- linking to syle.css -->
        <link href="style.css" rel="stylesheet" type="text/css">
         
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
       
           
       <nav>
             <?php
             require('includes/header.php');
             ?>
      </nav>
     
      <div class="content">
      <div class="container tb">
       <?php
           if(mysqli_num_rows($result)>0)
           {
           $totalp=0;
        ?>
          
        <table class="table table-bordered table-striped">
        <!--show table only if there are items added in the cart-->
                <tbody>
                    
                    <tr><th>Item Number </th> <th>Item Name </th> <th>Price</th><th></th></tr>
                    
                    <?php
                    
                    while($row=mysqli_fetch_array($result)){
        
                     ?>
                     
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["price"]; ?>Rs</td>
                            <td><a href='cart-remove.php?id=<?php echo $row["id"] ?>' class='remove_item_link'><span class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                           
                           $totalp=$totalp+$row['price'];
                           $itemIDs[] = $row['id'];
                           
                           
                         }
                         $ids = implode(',',$itemIDs);
                        ?>
                          <tr><td><a href='product.php'><button type="button" class="btn btn-primary">Go Back</button></a></td> <td>Total</td> <td><?php echo $totalp ; ?>Rs</td><td><a href='success.php?ids=<?php echo $ids ?>'><button type="button" class="btn btn-primary">Confirm Order</button></a></td></tr>
                    						
                </tbody>
            </table>
               
        
           
    
      <?php
         }
         else
         {?>
            
           <p>Add items to the cart first!</p>
      <?php
          }
        }
       else{
           header('location:login.php');
          }
        
       ?>
   </div>
  </div>
 </body>
 <footer id="footer">
        <?php
         require('includes/footer.php');
         ?>
 </footer>       
</html>