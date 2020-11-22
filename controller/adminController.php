<?php 
@include_once 'config/functions.php';
class AdminController{
    public $page;
    function __construct(){
        $this->$page = $page;
    }
    function redirect(){
        @include_once 'view/admin/redirect.php';
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
    function deleteFromMenuForm($id){
        deleteFromMenu($id);
    }
    function editForm($id){
        editPageByID($id, $_POST);
        $data = getPageByID($id);
        updateMenuData($id, $data);
    }
    function addForm(){
        addPage($_POST);
    }
    function deleteForm($id){
        deletePage($id);
    }
}