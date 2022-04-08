<?php 

    if($_SESSION['id']){
        header('localhost:login.php');
        header('location:edit.php');
        header('location:delete.php');
    }

?>