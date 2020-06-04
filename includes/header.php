<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container"> 
           <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> <a class="navbar-brand" href="index.php">Lifestyle Store</a>
           </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['email']))//php code for the users who already registered
                { ?> 
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 
                <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                <li><a href = "order_history.php"><span class = "glyphicon glyphicon-file"></span> Order History</a></li>
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li> 
                ?>
                <?php
                } else {  //if the user did not registed then else part will be executed ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about_us.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                
                <?php } ?>
            </ul> 
        </div>
    </div> 
</div>