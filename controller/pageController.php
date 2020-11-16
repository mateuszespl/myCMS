<?php 
class PageController{
    function displayPage($slug){
        global $pages;
        foreach($pages as $page){
            if($slug == $page[8]){
                header("Location:/?p=page&id=".$page[0]);
            }
        }
        @include_once 'view/page/navigation.php';
        @include_once 'view/page/page.php';
    }
}