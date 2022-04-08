<?php

session_start();

unset(!isset($_SESSION['id']));

header('location:login.php');
header('location:edit.php');
header('location:delete.php');

?>