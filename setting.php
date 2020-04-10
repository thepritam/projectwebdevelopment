<html>
    <head>
        <title>TODO supply a title</title>
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
        <div style=" margin-top: 80px " class=" container">
            <div class="row">
                <div class=" col-xs-6">
                    <form method="POST" action="setting1.php">
                        <h1>Reset the password</h1>
                       <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="enter email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>  
                        
                    <div class="form-group">
                        <label for="op">Old password</label>
                        <input class="form-control" type="password" name="op" id="op" placeholder="enter old password">
                    </div>
                     <div class="form-group">
                        <label for="np">New password</label>
                        <input class="form-control" type="password" name="np" id="np" placeholder="enter new password">
                    </div>
                     <div class="form-group">
                        <label for="rnp">New password AGAIN</label>
                        <input class="form-control" type="password" name="rnp" id="rnp" placeholder="enter new password again">
                    </div>
                        <input type="submit" class="btn btn-danger" value="submit">
                    
                </form>
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
