<?php

$con = mysqli_connect("localhost", "root", "", "tut") or die(mysqli_error($con));

$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con,$_POST['last_name']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);


$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=enter correct format of  email');
}
$select_query = "SELECT   email FROM users";
$select_query_email_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
while($row= mysqli_fetch_array($select_query_email_result)){
    if($row['email']==$email){
        header('location:signup.php');
        echo 'emailalreadyregiester';
    }
    
}
$password0 = $_POST['password'];
if (strlen($password0) < 6) {
  header('location: signup.php?password_error=enter correct format of password');
}
$email = mysqli_real_escape_string($con, $email);
$password0 = mysqli_real_escape_string($con, $password0);


$city = mysqli_real_escape_string($con,$_POST['city']);
$address= mysqli_real_escape_string($con,$_POST['address']);
$user_registration_query = "INSERT into users(email, first_name, last_name, phone,password, city, address) VALUES"
        . " ('$email', '$first_name', '$last_name', '$phone','$password0','$city','$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query)or die(mysqli_error($con));
echo "User successfully inserted";


?>
         