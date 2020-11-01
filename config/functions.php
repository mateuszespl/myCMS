<?php
@include_once 'db.php';

// Pobieranie danych admina z bazy danych
function getUser(){
    global $db;
    $get = "SELECT * FROM `users`";
    $users = $db->query($get)->fetch_assoc();
    return $users;
}

// Pobieranie danych podstron z bazy danych
function getPages(){
    global $db;
    $get = "SELECT * FROM `pages`";
    $pages = $db->query($get)->fetch_all();
    return $pages;
}

// Pobieranie danej strony po ID
function getPageByID($id){
    global $db;
    $get = "SELECT * FROM `pages` WHERE `page_id` = $id";
    $page = $db->query($get)->fetch_array();
    return $page;
}