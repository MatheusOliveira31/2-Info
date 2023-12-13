<?php 
    session_start();

    $_SESSION['vetordelinks'][] = $_GET['link'];

    header('location:index.php');
    //session_destroy();
?>