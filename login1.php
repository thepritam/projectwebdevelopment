<?php

session_start();
if (isset($_SESSION['email'])) {
    header('location:product.php');
} 


$connect = mysqli_connect("localhost", "root", "", "tut");

$email = mysqli_real_escape_string($connect, $_POST['e-mail']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
//use insert query and store the data in the database.

$select_query = "SELECT   email FROM users";
$select_query_email_result = mysqli_query($connect, $select_query) or die(mysqli_error($connect));

$select_query_password = "SELECT password FROM users";
$select_query_result = mysqli_query($connect, $select_query_password) or die(mysqli_error($connect));

 while (($row = mysqli_fetch_array($select_query_email_result))&& $row1= mysqli_fetch_array($select_query_result)) { 
        if(($row['email']==$email)&&($row1['password']==$password)){
            
      
            header('location:product.php');
           $_SESSION['email'] = $email;
       $_SESSION['id'] = mysqli_insert_id($connect)or die($connect);

            break;
        }
 }
 
 
  while (($row = mysqli_fetch_array($select_query_email_result))&& $row1= mysqli_fetch_array($select_query_result)) { 
        if(($row['email']!=$email)||($row1['password']!=$password)){
            
            echo'wrong email or password';         
            header('location:login.php');
         
            
        }
 }
 
 if(isset($_SESSION['id'])){
     
     header('location:login.php');
 }
         
         ?>
   




