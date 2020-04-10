<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "tut");
$email = mysqli_real_escape_string($connect, $_POST['email']);
$op = mysqli_real_escape_string($connect, $_POST['op']);
$np = mysqli_real_escape_string($connect,$_POST['np']);
$rnp = mysqli_real_escape_string($connect,$_POST['rnp']);

$fetch="SELECT id,password from users WHERE email='$email'";
$fetch_result= mysqli_query($connect, $fetch)or die(mysqli_error($connect));
$row= mysqli_fetch_array($fetch_result);
if($op==$row['password'])
    if($np==$rnp){{
           // foreach ($row as $keys=> $value) {       
      $id= mysqli_real_escape_string($connect,$row['id']);
    $update="UPDATE users SET password='$np' WHERE id='$id'";
     $update_result= mysqli_query($connect, $update)or die(mysqli_error($connect));
            //}
          

            
    }
    
    }
    ?>
<h2><?php echo 'password updated succesfully';?></h2>





