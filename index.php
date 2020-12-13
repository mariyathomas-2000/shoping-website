<!DOCTYPE html>
<!DOCTYPE html>
 <html>
   <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>
        <style>
            body{
                width:100%;
                height:100%;
                margin:0;
            }
            a{
                text-decoration:none;
                background-color:transparent;
                color:#ededed;
            }
            .inner header{
                width:80%;
                margin:auto;
            }
            .logo{
                float: left;
                height: 50px;
                padding: 15px;
                font-size: 20px;
                font-weight: bold;
            }
            .header-link {
                float:right;
                font-size:14px; 
                height: 50px;
                padding: 15px 15px;
                font-size:16px;
                font-weight: bold;
            }
            .content {
                min-height: 600px;
            }
            .banner-image {
                padding-bottom: 50px;
                margin-bottom: 20px;
                text-align: center;
                color: #f8f8f8;
                background: url(image/intro-bg_1.jpg) no-repeat center; 
                background-size: cover;
            }
            .inner-banner-image{
                padding-top: 12%;
                width:80%;
                margin:auto;
            }
            .banner_content{
                position: relative;
                padding-top: 6%;
                padding-bottom: 6%;
                overflow:hidden;
                margin-bottom: 12%;
                background-color: rgba(0, 0, 0, 0.7);
                max-width: 660px;
            }
            .container{
                width:90%;
                margin:auto;
                overflow:hidden;
            }
            .items{
                width:30%;
                display: block;
                padding: 4px;
                margin-bottom: 20px;
                line-height: 1.42857143;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                float:left; margin-left:1%;
            }
            .thumbnail{
                display: block;
                max-width: 100%;
                height: auto;
               
            }
            .caption{
                color:#000;
                padding:0px 10px 10px;
                font-weight: bold;
                text-align: center;
            }
            .footer{
                background-color: #000;
                color:#fff;
                font-size:14px;
            }
            
        </style>
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
                   <a href="#" class="navbar-brand">Lifestyle Store</a>
                   
               </div>
               <div class="collapse navbar-collapse" id="mynavbar">
                   <ul class="nav navbar-nav navbar-right">
                       <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                       <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                   </ul>
               </div>
           </div>
       </nav>
       <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <center>
                        <div class="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands</p>
                            <a href="products.php">
                                <center>
                                    <button class="btn btn-danger btn-lg active">Shop Now</button>
                                </center>
                            </a>
                            
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="items">
                <a href="#">
                    <img src="image/camera.jpg" alt="cameras" class="thumbnail">
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world  </p>
                    </div>
                </a>
                
            </div>
            <!--watches-->
            <div class="items">
                <a href="#">
                    <img src="image/watch.jpg" alt="watches" class="thumbnail">
                    <div class="caption">
                        <h2> Watches </h2>
                        <p>Original watches from the best brand</p>
                        
                       
                    </div>     
                </a>
                   
            </div>
            <!--shirts-->
            <div class="items">
                <a href="#">
                    <img src="image/shirt.jpg" alt="Shirts" class="thumbnail">
                    <div class="caption">
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts</p>
                        
                    </div>
                    
                </a>
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
