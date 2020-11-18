<?php 
class PageController{
    function displayPage($slug){
        global $pages;
        foreach($pages as $page){
            if($slug == $page[8]){
            }
        }
        @include_once 'view/page/navigation.php';
        @include_once 'view/page/page.php';
    }
}