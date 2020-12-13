<!DOCTYPE html>
<html>
   <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Cart</title>
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
                       <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                       <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                       <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                   </ul>
               </div>
           </div>
       </nav>
       <div class="container">
           <table class="table table-hover">
               <tbody>
                   <tr><th>Item number</th><th>Item Name</th><th>Price</th></tr>
                   <tr><td></td><td>Total</td><td>Rs.0</td><td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
               </tr>
               </tbody>
           </table>
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


