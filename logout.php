<?php 
    session_start();
    $_SESSION['email'] == "";
    $_SESSION['senha'] == "";
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header("location: index.php");
?>