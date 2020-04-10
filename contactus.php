<?php

session_start();
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
        <div style="margin-top: 50px;" class="container">
            <div class="row">
                <div class="col-xs-8">
                    <h1>LIVE SUPPORT</h1>
                    <h3>24|HOURS|7 DAYS A WEEK | 365 DAYS A YEAR LIVE Technical Support</h3>
                    <h5>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h5><br>
                        <h5> The point of using Lorem Ipsum is that it has more-or-less normal distribution of letters.They are many variations of passages 
                        of Loem Ipsum available,but the majority </h5><br><h5>have suffered alteration in some form,by injected form,by injected humour,or randomised words which
                            don't look even slightly believable.If you are going to use a</h5><br><h5> passage of Lorem Ipsum ,you need to be sure there is not anythings
                        embarrassing hidden in the middle of text.
                     </h5>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <img src="newbootstrap/contact.png">
                    </div>
                
            </div>
            
            
        </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <form method="POST" action="contactus1.php">
                        <div class="form-group"> 
                            <label for='name'>Name</label>
                            <input type='text'class="form-control"id="name" name='name'required="true" placeholder="enter your name">
                        </div>       
                      <div class="form-group"> 
                            <label for='email'>Email</label>
                            <input type='text'class="form-control" id="email" name='email'pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true" placeholder="enter your email">
                        </div> 
                        <div class="form-group"> 
                            <label for='message'>Enter your query</label>
                            <input type='text'class="form-control" id="message" name='message' pattern=".{10,}" placeholder="enter your query">
                                   
                        </div> 
                        <input type="submit" value="submit" name="button" class="btn btn-primary">
                    </form>
                    
                </div>
                <div class="col-xs-4">
                    <h2>Company Information</h2>
                    <h5>
                       500 Lorem Ipsum Dolor sit,
                    </h5><br>
                    <h5>22-56-2-9 Amet,Lorem</h5><br>
                    <h5>USA</h5><br>
                    <h5>phone:(00)222 666 444</h5><br>
                    <h5>(000)000 00 00 0</h5><br>
                    <h5><a href="#">Email:"info@mycompany.com</a></h5><br>
                    <h5>Follow On : Facebook Twitter</h5><br>
                    
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