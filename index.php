<?php
@include_once('./config/consoleLog.php');
@include_once('./config/db.php');

// Routing 
$uri = $_SERVER['REQUEST_URI'];
if($uri == "/"){
    @include_once "./themes/lightTheme/index.php";
} else if($_GET["logged"] != null && $_GET["logged"] == 0){
    session_destroy();
    @include_once "./themes/lightTheme/index.php";
} elseif($uri == "/admin/login"){
    @include_once "./admin/index.php";
} elseif(preg_match("@/.*@Umsi", $uri)){
    @include_once "./themes/lightTheme/index.php";
}
 ?>
