<!-- bootstraping cms -->

<?php
@require_once("./config/consoleLog.php");
// Routing 

switch($_SERVER["REQUEST_URI"]){
    case "/":
        echo "HEllo";
    case "/admin":
        @include_once("./admin/index.php");
};
@require_once("./themes/lightTheme/head.php");
@require_once("./themes/lightTheme/header.php");
@require_once("./themes/lightTheme/page.php");
@require_once("./themes/lightTheme/footer.php");
 ?>
