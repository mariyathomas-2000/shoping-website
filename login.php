<!DOCTYPE html>
<html>
   <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Login Page</title>
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
       <div class="container">
            <center><h4></h4></center>
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>LOGIN</h2>
                        </div>
                        <div class="panel-body">
                            <form action="login_submit.php" method="POST">
                                <h3>Login to make a purchase</h3>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="e-mail" required="true" pattern="[a-z0-9._%=-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required="true" pattern=".{6,}">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form><br/>
                        </div>
                        <div class="panel-footer">
                            Don't have account? <a href="signup.php">Register</a>
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

