<?php 
@include_once 'config/functions.php';
class LoginController{
    function showLoginForm(){
        return @include_once './view/login/login.php';
    }
    function showAdminPanel(){
        return @include_once './view/admin/admin.php';
    }
    function validateForm(){
        $user = getUser(); 
        $userLogin = $user['user_login'];
        $userPassword = $user['user_password'];
        $loginInput = $_POST['login'];
        $passwordInput = $_POST['password'];
    if($userLogin == $loginInput && $userPassword == $passwordInput){
        session_start();
        $_SESSION['l'] = 1;
        header("Location: /?p=admin&l=1");
    }
    }
}