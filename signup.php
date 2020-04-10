<html>
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       <link rel=" stylesheet" type="text/css" href="newcss.css">
           
    </head>
    <body>
         <div class=" container-fluid">  
            <div class=" row">
                <div class=" col-xs-12">
        <nav class=" navbar navbar-inverse ">
            <div class="containe-fluid" >
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
                        
                            
                        <li><a  href="signup.php"><span class=" glyphicon glyphicon-user">Sign up</span></a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
                        
                    </ul>
                </div>
            </div>
            
        </nav> 
                </div>         
        </div>
        </div>
        <div style="margin-top: 2px; margin-bottom: 40px;" class="container">
            <div class="row">
                <div class="col-xs-6">
                    <form method="post" action="signup1.php">
                        <h1>Sign Up </h1>
                         <div class="form-group">
                            <label  for="first_name">First Name</label>
                            <input type="text" name="first_name"  id="first_name"class="form-control" placeholder="Enter your name">
                        </div>
                          <div class="form-group">
                            <label  for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter your name">
                        </div>                                                                                         
                         <div class="form-group">
                            <label  for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        
                         <div class="form-group">
                            <label  for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your Password" pattern=".{6,}">
                        </div>
                        
                        
                         <div class="form-group">
                            <label  for="contact">Contact</label>
                            <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter your contact no"pattern=".{10,}">
                        </div>
                        
                         <div class="form-group">
                            <label  for="city">City/Town</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="Enter your city/town">
                        </div>
                        
                         <div class="form-group">
                            <label  for="adress">Address</label>
                            <input type="text" name="address" id="address"class="form-control" placeholder="Enter your address">
                        </div>
                        <button type="submit" value="signup_submit" class="btn btn-primary btn-md">Submit
                        </button>
                        
                        
                        
                        
                        
                        
                    </form>
                
            </div>
                <div class="col-xs-6" style="margin-top: 50px;height: 200%;">
                <div class="thumbnail ">
                    <img src="newbootstrap/signup1.jpg">
                </div>
                    <div  class="thumbnail ">
                        <img  style="height: 50%;" src="newbootstrap/yess.jpg">
                </div>
            </div>
            
                
            </div>
        </div>
         
        <div style="margin-top: -100px;"class="foot">
            <div style="background-color: black;color: white" class="container-fluid">
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


