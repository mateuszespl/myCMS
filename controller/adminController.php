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
    function editForm($id){
        editPageByID($id, $_POST);
    }
    function addForm(){
        addPage();
    }
}