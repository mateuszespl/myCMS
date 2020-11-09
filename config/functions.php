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
    $get = "SELECT * FROM pages WHERE page_id = $id";
    $page = $db->query($get)->fetch_array();
    return $page;
}

// Edycja podstrony
function editPageByID($id, $data){
    global $db;
    $robots = $data['robots'];
    $header = $data['header'];
    $title = $data['title'];
    $article = $data['article'];
    $description = $data['description'];
    $isMain = $data['isMain'];
    $update = "UPDATE pages SET page_robots='$robots',page_description='$description',page_content='$article',page_title='$title',page_content_title='$header',page_isMain='$isMain' WHERE page_id ='$id'";
    $db->query($update);
    var_dump($db);
}

// Dodanie podstrony
function addPage($data){
    global $db;
    $robots = $data['robots'];
    $header = $data['header'];
    $title = $data['title'];
    $article = $data['article'];
    $description = $data['description'];
    $isMain = $data['isMain'];
    $update = "INSERT INTO pages (page_robots, page_description, page_content, page_title, page_content_title, page_isMain) VALUES ('$robots', '$description', '$article', '$title', '$header', '$isMain')";
    $db->query($update);
    var_dump($db);
}

// Usunięcie podstrony
function deletePage($id){
    global $db;
    $delete = "DELETE FROM pages WHERE page_id = '$id'";
    $db->query($delete);
    var_dump($db);
}