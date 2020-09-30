<?php


session_start();

$_SESSION['username']=$username;
session_unset();
session_destroy();
header('location:index.php');
$_SESSION['username']=$username;