<?php session_start();
global $action;
global $id;
global $menu;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/config/style.css">
    <meta name="robots" content="noindex, follow">
    <title><?php
    if($_SERVER["REQUEST_URI"] == "/admin"){
        $adminTitle = "Panel admina";
    } else if($_SERVER["REQUEST_URI"] == "/?p=admin&l=1&a=page"){
        $adminTitle = "Panel admina - Edytuj strony";
    } else if($action == "edit"){
        $adminTitle = "Zmiany zostały wprowadzone";
    } else if($action == "add" && $id == 0){
        $adminTitle = "Panel admina - Dodaj stronę";
    } else if($action == "add" && $id != 0){
        $adminTitle = "Strona została dodana";
    } else if($_SERVER["REQUEST_URI"] == "/?p=admin&id=".$id.""){
        $adminTitle = "Panel admina - Edycja strony";
    } else if($action == "delete"){
        $adminTitle = "Strona została usunięta";
    } else if($menu != null && $action == "menu" && $id == 0){
        $adminTitle = "Dodano pozycję do menu";
    } else if($menu != null && $action == "menu" && $id != 0){
        $adminTitle = "Usunięto pozycję z menu";
    } else if($_SERVER["REQUEST_URI"] == "/?p=admin&l=1&a=menu"){
         $adminTitle= "Panel admina - Edytuj menu";
    } else if($action == "menuaccept"){
        $adminTitle = "Kolejność zmieniona pomyślnie";
    } else $adminTitle = "Panel admina";
     echo $adminTitle; ?></title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>