<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tut");
?>
<html>
    <head>
        <title>Order Confirmation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       <link rel=" stylesheet" type="text/css" href="newcss.css">
    </head>
    <body>
        <div  style="margin-left: 15px; margin-top: 80px" class="container">
             <?php
        $e_mail= mysqli_real_escape_string($connect,$_SESSION['email']);
        if(!empty($_SESSION["cart"]))
	{
		
		foreach($_SESSION["cart"] as $keys => $values)
		{
                     $pro= mysqli_real_escape_string($connect,$values["item_name"]);
                     $quantity= mysqli_real_escape_string($connect,$values["item_quantity"]);
                    $select_query="SELECT id FROM users WHERE email='$e_mail'";
                    $select_query_result= mysqli_query($connect, $select_query);
                  $select_query_products="SELECT id FROM products WHERE p_name='$pro'";
                    $select_query_products_results= mysqli_query($connect, $select_query_products);
                      
                  while(($row1= mysqli_fetch_array($select_query_result))&&($row2= mysqli_fetch_array($select_query_products_results))){
                          $row3=$row1['id'];
                        $row4=$row2['id'];      
                    $select_query_insert="INSERT into user_products(user_id,product_id,product_quantity) VALUES('$row3','$row4','$quantity')";
                     $submit= mysqli_query($connect, $select_query_insert) or die(mysqli_error($connect));       
                  }          
                }
        
        
                }
        ?>
            
            
            
            
            
            <h1> Your order is confirmed.</h1> 
            <h3>Thank you for shopping with us.</h3>
            <?php
        unset($_SESSION["cart"]);
            ?>
            <h4><a  style="text-decoration: none" href="product.php">Click here</a> to purchase any other item</h4>
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

