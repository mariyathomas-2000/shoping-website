<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings</title>
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
                       <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                       <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                   </ul>
               </div>
           </div>
       </nav>
       <div class="container panel-margin">
           <div class="panel panel-default">
               <div class="panel-heading">
                   <h2 class="panel-title">Sign Up</h2>
               </div>
               <form>
                   <div  class="form-group">
                       <h1>Change Password</h1>
                   
                       
               
           </div>
                   <div class="form-group">
                       <input type="password" class="form-control" id="password" name="password" placeholder="Old password" required>
                       
                   </div>
                   <div class="form-group">
                       <input type="password" class="form-control" id="password" name="password" placeholder="New Password" required>
                   </div>
                   <div class="form-group">
                       <input type="password" class="form-control" id="password" name="password" placeholder="Re-type New Password" required>
           
                   </div>
                       
                   <button type="submit" class="btn btn-primary">Change</button>
               </form>
                   
           </div>
           <div class="panel-footer">
               Don't have a account? <a href="signup.php">Register</a> 
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



