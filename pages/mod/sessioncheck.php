<?php  
    session_start();
   

    $role = $_SESSION['role'];
    if(!isset($_SESSION['username'])){
        header("Location:/pages/login.php?msg=not logged in");
    }
?>