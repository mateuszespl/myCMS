<?php 
@include_once 'config/functions.php';
class LoginController{
    function showLoginForm(){
        @include_once 'view/login/login.php';
    }
    function showAdminPanel(){
        @include_once 'view/admin/admin.php';
    }
    function redirectToAdminPanel(){
        @include_once 'view/login/login-redirectInfo.php';
    }
    function validateForm(){
        $user = getUser(); 
        $userLogin = $user['user_login'];
        $userPassword = $user['user_password'];
        $loginInput = $_POST['login'];
        $passwordInput = $_POST['password'];
        if($userLogin == $loginInput && $userPassword == $passwordInput){
            $_SESSION['l'] = 1;
            header("Location: /?p=login&a=success");
        } else{
            header("Location: /?p=login&a=failure");
        }
    }
    function logout(){
        $_SESSION['l'] = 0;
        @include_once 'view/login/login-logoutInfo.php';
    }
}