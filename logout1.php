<?php
session_start();
if(isset($_SESSION['email'])){
    
    header('location:index.php');
session_unset();
session_destroy();
}


?>
