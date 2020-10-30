<?php 
class LoginController{
    function showLoginForm(){
        return @include_once './view/login.php';
    }
    function showAdminPanel(){
        return @include_once './view/admin.php';
    }
    function validateForm(){
        
    }
}