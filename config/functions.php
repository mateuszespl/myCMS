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

}