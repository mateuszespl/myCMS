<?php
session_start();
@include_once 'config/db.php';
@include_once 'config/functions.php';


// Status zalogowania // Zalogowany == 1 // Niezalogowany == 0 // W trakcie logowania == 2 // l == logged //
$logged = $_SESSION['l'] ?? $_GET['l'] ?? $_POST['l'] ?? '0';

// Adres strony //
$page = $_POST['p'] ?? $_GET['p'] ?? "page";

// Akcja na stronie //
$action = $_POST['a'] ?? $_GET['a'] ?? "home";

// ID strony // 
$id = $_POST['id'] ?? $_GET['id'] ?? "0";

// Url strony //
$slug = $_POST['slug'] ?? $_GET['slug'] ?? "0";

// Pozycja menu //
$menu = $_POST['menu'] ?? $_GET['menu'] ?? null;


// Pages data //
$currentPage = $slug != "0" ? getPageBySlug($slug) : getPageByID($id);
$pages = getPages();
$menuItems = getMenu();


// Router
if($page == "page"){
    @include_once 'controller/pageController.php';
    $pageController = new PageController;
    $pageController -> displayPage($slug);
}else if($page == "admin"){
    @include_once 'controller/adminController.php';
    $adminController = new AdminController;
    if($logged == 1){
        if($action == "home" && $id == "0"){
            $adminController -> showWelcomePage();
        }elseif($action == "url" && $id == "0"){
            $adminController -> showEditPage("Url");
        } elseif($action == "page" && $id == "0"){
            $adminController -> showEditPage("Page");
        } elseif($action == "menu" && $id == "0" && $menu != null){
            $adminController -> addToMenuForm($menu);
            $adminController -> showEditPage("Menu");
        } elseif($action == "menu" && $id != "0" && $menu != null){
            $adminController -> deleteFromMenuForm($id);
            $adminController -> showEditPage("Menu");
        } elseif($action == "menu" && $id == "0"){
            $adminController -> showEditPage("Menu");
        } elseif($id != "0" && $action == "edit"){
            $adminController -> editForm($id);
        } elseif($id == "0" && $action == "add"){
            $adminController -> showAddPageForm();
        } elseif($id != "0" && $action == "add"){
            $adminController -> addForm();
        } elseif($id != "0" && $action == "delete"){
            $adminController -> deleteForm($id);
        } elseif($id != "0"){
            $adminController -> showEditPageForm();
        } else $adminController->showLoginForm();
    }
    }elseif($page == "login"){
        @include_once 'controller/loginController.php';
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
