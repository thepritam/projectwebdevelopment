<?php

session_start();
if (isset($_SESSION['email'])) {
    header('location:product.php');
} 



?>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       <link rel=" stylesheet" type="text/css" href="newcss.css">
           
    </head>
    <body>
         <div class="container-fluid">  
            <div class=" row">
                <div class=" col-xs-12">
        <nav class=" navbar navbar-inverse navbar-fixed-top ">
            <div class="container" >
                <div class=" navbar-header " >
                    <button type="button" class=" navbar-toggle"  data-toggle="collapse"
                            data-target="#Mynavbar">
                        <span class="icon-bar"></span>
                        <span class=" icon-bar"></span>
                        <span class=" icon-bar"></span>
                    </button>
                <a href="#" class=" navbar-brand">E-store</a>                
            </div>
                <div  class=" collapse navbar-collapse"      id="Mynavbar">
                    <ul class=" nav navbar-nav navbar-right" >
                        <li class=" active "><a href="cart.php"><span class=" glyphicon glyphicon-shopping-cart ">Cart</span></a></li>
                            
                        <li><a  href="setting.php"><span class=" glyphicon glyphicon-user">Settings</span></a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
                        
                    </ul>
                </div>
            </div>
            
        </nav> 
                </div>         
        </div>
        </div>
        <div style="margin-top: 80px" class="container">
            <div   class="row">
                <div class="col-xs-6">
                    <div class=" panel panel-primary">
                        <div class=" panel-heading">
                            <h1>Login Here</h1>
                        </div>
                        <div class="panel-body">
                            <h3 class=" text-warning">Login to make a purchase</h3>
                            <form method="post" action="login1.php">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type='text' id="e-mail" name="e-mail" placeholder=" Enter email"required = "true" 
                                          >
                                     
                                </div>
                                 <div class="form-group">
                                     <label for="password">Password</label>
                                     <input class="form-control" type='password' id="password" name="password" placeholder=
                                           " Enter password" required = "true" >
                                    
                                   
   
                                </div>
                                <div style="margin-bottom: 5px"> <button  type="submit" value="login_submit"class="btn btn-primary ">Submit
                                    </button>
                                </div>
                            </form>
                                    <div>
                                <br><p>Don't have an account? Register</p>
                                <a  href="signup.php" class="btn btn-primary" role="button"
                                    
                                    >Register</a>                                                            
                        </div>                     
                    </div>
                </div>
                </div>
            
             
          </div> 
        </div>  
          <div class="foot">
            <div style="background-color: black;color: white;" class="container-fluid">
                    <div class="row">
                        <div class="col-xs-4">
                            <h3>Information</h3>
                            <ul type="none">
                                <li><a href="aboutus.php">About us</a></li>
                                <li><a href="contactus.php">Contact us</a></li>
                            </ul>
                        </div>
                         <div class="col-xs-4">
                            <h3>My account</h3>
                            <ul type="none">
                                <li><a href="signup.php">sign up</a></li>
                                <li><a href="login.php">login</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-4">
                            <h4>
                                Contact->+91-123-000000
                            </h4>
                        </div>
                        
                    </div>
                    
                </div> 
           
         
        </div>
        
    </body>
</html>
<?php
if(!isset($_SESSION['email'])){
    
    //
}

?>

