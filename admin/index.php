<?php 
session_start();
@include_once './includes/head.php';

echo "<body>";

$login = $_POST['login'];
$password = $_POST['password'];

if(($login || $_SESSION['login']) == "admin"  && ($password || $_SESSION['password']) == "admin"){
    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
        $_SESSION['login']=$login;
        $_SESSION['password']=$login;
    }
    @include_once './includes/panel.php';
} else @include_once './includes/loginForm.php';
echo "<script src='/config/script.js'></script>";
echo "</body>"
?>