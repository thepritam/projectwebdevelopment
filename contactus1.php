<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "tut");
$name= mysqli_real_escape_string($connect,$_POST['name']);
$email= mysqli_real_escape_string($connect,$_POST['email']);
$message= mysqli_real_escape_string($connect,$_POST['message']);
$select_id="SELECT id FROM users WHERE email='$email' ";
$select_id_result= mysqli_query($connect, $select_id)or die(mysqli_error($connect));
$row= mysqli_fetch_array($select_id_result);
$id= mysqli_real_escape_string($connect,$row['id']);
$store="INSERT into user_contact_us(name,email,message,user_id)VALUES ('$name','$email','$message','$id')";
$submit= mysqli_query($connect, $store);




?><
<h3><?php echo'your query has been recieved.Thank you.' ?></h3>