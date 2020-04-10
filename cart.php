<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tut");
?>

<html>
<head>
<meta charset="UTF-8">
<title>My Cart</title>
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
    <div style="margin-right: 20px;"class="container">
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6">
                <div style="align-items: center"class="thumbnail ">
                    <img src="newbootstrap/intro-bg.jpg">
                </div>
            </div>
            
        </div>
        
    </div>
    
    
<div class="container" style="width:60%;">
	<h2 align="center">MY CART</h2>
 <div style="clear:both"></div>
    <h2>My Shopping Bag</h2>
    <div class="table-responsive">
    <table class="table table-bordered">
    <tr>
    <th width="40%">Product Name</th>
    <th width="10%">Quantity</th>
    <th width="20%">Price Details</th>
    <th width="15%">Order Total</th>
    <th width="5%">Action</th>
    </tr>
    <?php
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>Rs <?php echo $values["product_price"]; ?></td>
            <td>Rs <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
            </tr>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">Rs <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
    
    </div>
   
    <form action="success.php">
        <?php
        /*$e_mail=$_SESSION['email'];
        if(!empty($_SESSION["cart"]))
	{
		
		foreach($_SESSION["cart"] as $keys => $values)
		{
                     $pro=$values["item_name"];
                     $quantity=$values["item_quantity"];
                    $select_query="SELECT id from users WHERE users.email='$e_mail'";
                    $select_query_result= mysqli_query($connect, $select_query);
                    $row1= mysqli_fetch_array($select_query_result);
                    $select_query_products="SELECT id from products WHERE products.p_name='$pro'";
                    $select_query_products_results= mysqli_query($connect, $select_query_products);
                    $row2= mysqli_fetch_array($select_query_products_results);
                    $select_query_insert="INSERT into user_products(user_id,product_id,product_quantity) VALUES('$row1','$row2','$quantity')";
                     $submit= mysqli_query($connect, $select_query_insert);       
                            
                }
        
        
                }*/
        ?>
        
    <input  type="submit" class="btn btn-block" value="Order" >  
    </form>
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