<?php 
@include_once 'config/functions.php';
class AdminController{
    public $page;
    function __construct(){
        $this->$page = $page;
    }
    function showEditPage($page){
        @include_once 'view/admin/admin.php';
        @include_once 'view/admin/admin-edit'.$page.'.php';
    }
    function showLoginForm(){
        @include_once 'view/login/login.php';
    }
    function showWelcomePage(){
        @include_once 'view/admin/admin.php';
        @include_once 'view/admin/admin-welcome.php';
    }
    function showEditPageForm(){
        @include_once 'view/admin/admin.php';
        @include_once 'view/admin/admin-editForm.php';
    }
    function showAddPageForm(){
        @include_once 'view/admin/admin.php';
        @include_once 'view/admin/admin-addForm.php';
    }
    function addToMenuForm($menu){
        addToMenu($menu);
    }
    function deleteFromMenuForm(){
        $id = $_GET["id"];
        deleteFromMenu($id);
    }
    function editForm($id){
        editPageByID($id, $_POST);
        $data = getPages();
        updateMenuData($id, $data[sizeof($data) - 1]);
    }
    function addForm(){
        addPage($_POST);
    }
    function deleteForm($id){
        deletePage($id);
    }
}