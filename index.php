<?php
session_start();
@include_once 'config/db.php';

// Status zalogowania // Zalogowany == 1 // Niezalogowany == 0 // W trakcie logowania == 2 // l == logged //
$logged = $_SESSION['l'] ?? $_GET['l'] ?? $_POST['l'] ?? '0';

// Adres strony // p == page //
$page = $_GET['p'] ?? $_POST['p'] ?? "page";

// Akcja na stronie // a == action //
$action = $_GET['a'] ?? $_POST['a'] ?? "home";

// ID strony // id = identification number //
$id = $_GET['id'] ?? $_POST['id'] ?? "0";

// Router
if($page == "page"){
    @include_once './controller/pageController.php';
}else if($page == "admin"){
    @include_once './controller/adminController.php';
    $adminController = new AdminController;
    if($logged == 1){
        if($action == "home" && $id == "0"){
            $adminController -> showWelcomePage();
        }elseif($action == "url" && $id == "0"){
            $adminController -> showEditPage("Url");
        } elseif($action == "page" && $id == "0"){
            $adminController -> showEditPage("Page");
        } elseif($action == "menu" && $id == "0"){
            $adminController -> showEditPage("Menu");
        } elseif($id != "0" && $action == "edit"){
            $adminController -> editForm($id);
        } elseif($id != "0"){
            $adminController -> showEditPageForm();
        } else $adminController->showLoginForm();
    }
    }elseif($page == "login"){
        @include_once './controller/loginController.php';
        $loginController = new LoginController;
        if($logged == 0 && $action == "submitted"){
            $loginController->validateForm();
        }elseif($logged == 1 && $action == "success"){
            $loginController->redirectToAdminPanel();
        }elseif($action == "logout"){
            $loginController->logout();
        }elseif($logged == 1){
            $loginController->showAdminPanel();
        } else $loginController->showLoginForm();
    }
 ?>
