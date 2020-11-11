<?php 
class PageController{
    function displayPage($slug){
        @include_once 'view/page/navigation.php';
        @include_once 'view/page/page.php';
    }
}