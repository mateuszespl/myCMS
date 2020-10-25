<?php
@include_once('./config/consoleLog.php');
@include_once('./config/db.php');

// Routing 
switch($_SERVER["REQUEST_URI"]){
    case "/":
        @include_once("./themes/lightTheme/index.php");
    break;
    case "/admin":
        @include_once("./admin/index.php");
};
 ?>
