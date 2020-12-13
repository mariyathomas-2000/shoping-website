<!DOCTYPE html>
<html>
   <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Lifestyle Store</title>
   </head>
   <body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       
                   </button>
                   <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                   
               </div>
               <div class="collapse navbar-collapse" id="mynavbar">
                   <ul class="nav navbar-nav navbar-right">
                       <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                       <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                       <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Login</a></li>
                   </ul>
               </div>
           </div>
       </nav>
       <div class="panel-margin">
           <div class="jumbotron">
               <center>
                   <h1>Welcome to our Lifestyle Store</h1>
                   <p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</p>
               </center>
           </div>
           <div class="row text-center">
               <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="image/5.jpg" alt="camera">
                       <div class="caption">
                           <h3>Canon EOS</h3>
                           <p>Price:Rs.36000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="image/2.jpg" alt="camera">
                       <div class="caption">
                           <h3>Sony DSLR</h3>
                           <p>Price:Rs.40000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="image/3.jpg" alt="camera">
                       <div class="caption">
                           <h3>Sony DSLR</h3>
                           <p>Price:Rs.50000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
               
               <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="image/4.jpg" alt="camera">
                       <div class="caption">
                           <h3>Olympus DSLR</h3>
                           <p>Price:Rs.80000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
               
           </div>
           <div class="row text-center">
           <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="image/9.jpg" alt="watch">
                       <div class="caption">
                           <h3>Titan Model #301</h3>
                           <p>Price:Rs.13000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="image/10.jpg" alt="watch">
                       <div class="caption">
                           <h3>Titan Model #201</h3>
                           <p>Price:Rs.3000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
                   <div class="thumbnail">
                       <img src="image/11.jpg" alt="watch">
                       <div class="caption">
                           <h3>HMT Milan</h3>
                           <p>Price:Rs.8000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
               <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                       <img src="image/12.jpg" alt="watch">
                       <div class="caption">
                           <h3>Faber Luba #111</h3>
                           <p>Price:Rs.18000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
           </div>
       <div class="row text-center">
           <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
                       <img src="image/8.jpg" alt="shirt">
                       <div class="caption">
                           <h3>H&W</h3>
                           <p>Price:Rs.800.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
           <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
                       <img src="image/6.jpg" alt="shirt">
                       <div class="caption">
                           <h3>Luis Phil </h3>
                           <p>Price:Rs.1000.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
           <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
                       <img src="image/13.jpg" alt="shirt">
                       <div class="caption">
                           <h3>John Zok</h3>
                           <p>Price:Rs.1500.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
           <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
                       <img src="image/14.jpg" alt="shirt">
                       <div class="caption">
                           <h3>Jhalsani</h3>
                           <p>Price:Rs.1300.00</p>
                           <?php if (!isset($_SESSION['email'])) { ?>
                           <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
     if (check_if_added_to_cart(1)) { 
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } else {
             ?>
                           <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       </div>
                   </div>
               </div>
           
   </div>
           
       
       
           
               
               
       </div>
       <footer class="footer">
        <div class="container">
            <center>
                <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
                 </center>
        </div>
        </footer>
   </body>
</html>
        

