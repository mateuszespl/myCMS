<?php 
@include_once './includes/head.php';

$login = $_POST['login'];
$password = $_POST['password'];

if($login == "admin" && $password == "admin"){
    @include_once './includes/panel.php';
} else @include_once './includes/loginForm.php'
 ?>