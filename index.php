<?php
@include_once('./config/consoleLog.php');
@include_once('./config/db.php');

// Zalogowany == 1 // Niezalogowany == 0 // W trakcie logowania == 2 // l == logged //
$logged = $_GET['l'] ?? $_POST['l'] ?? '0';

// Adres strony // p == strona //
$page = $_GET['p'] ?? $_POST['l'] ?? "home";

if($page == "home"){
    @include_once './controller/pageController.php';
}else if($page == "admin"){
    @include_once './controller/adminController.php';
}else if($page == "login"){
    @include_once './controller/loginController.php';
    $loginController = new loginController;
    if($logged == 0){
        $loginController->showLoginForm();
    }elseif($logged == 1){
        $loginController->showAdminPanel();
    }elseif($logged == 2){
        $loginController->validateForm();
    } else $loginController->showLoginForm();

}
 ?>
