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
    $get = "SELECT * FROM pages WHERE page_id = '$id'";
    $page = $db->query($get)->fetch_array();
    return $page;
}

// Pobieranie danej strony po Url
function getPageBySlug($slug){
    global $db;
    $get = "SELECT * FROM pages WHERE page_url = '$slug'";
    $page = $db->query($get)->fetch_array();
    return $page;
}

// Edycja przyjaznego url
function makeSlug($url){
    $url = preg_replace('~[^\pL\d]+~u', '-', $url);
    $url = iconv('utf-8', 'us-ascii//TRANSLIT', $url);
    $url = preg_replace('~[^-\w]+~', '', $url);
    $url = trim($url, '-');
    $url = preg_replace('~-+~', '-', $url);
    $url = strtolower($url);
    return $url;
}

// Edycja podstrony
function editPageByID($id, $data){
    global $db;
    $robots = $data['robots'];
    $header = $data['header'];
    $title = $data['title'];
    $article = $data['article'];
    $description = $data['description'];
    $isMain = $data['isMain'] == "on" ? 1 : 0;
    $url = $isMain == 1 ? "" : makeSlug($data['url']);
    $update = "UPDATE pages SET page_robots='$robots',page_description='$description',page_content='$article',page_title='$title',page_content_title='$header',page_isMain='$isMain',page_url='$url' WHERE page_id ='$id'";
    $db->query($update);
}

// Dodanie podstrony
function addPage($data){
    global $db;
    $robots = $data['robots'];
    $header = $data['header'];
    $title = $data['title'];
    $article = $data['article'];
    $description = $data['description'];
    $isMain = $data['isMain']  == "on" ? 1 : 0;
    $url = $isMain == 1 ? "" : makeSlug($data['url']);
    $insert = "INSERT INTO pages (page_robots, page_description, page_content, page_title, page_content_title, page_isMain, page_url) VALUES ('$robots', '$description', '$article', '$title', '$header', '$isMain', '$url')";
    $db->query($insert);
}

// Usunięcie podstrony
function deletePage($id){
    global $db;
    $delete = "DELETE FROM pages WHERE page_id = '$id'";
    $db->query($delete);
}

// Dodanie pozycji do menu
function addToMenu($data, $submenuData = 0){
    global $db;
    $dataid = unserialize($data)[0];
    $hasSubmenu = $submenuData == 0 ? 0 : 1;
    $insert = "INSERT INTO menu (menu_data, menu_data_id, menu_has_submenu, menu_submenu_data) VALUES ('$data', '$dataid', '$hasSubmenu', $submenuData)";
    $db->query($insert);
}

// Usuwanie pozycji z menu
function deleteFromMenu($id){
    global $db;
    $delete = "DELETE FROM menu WHERE menu_position = '$id'";
    $db->query($delete);
}

// Pobieranie danych menu
function getMenu(){
    global $db;
    $get = "SELECT * FROM `menu`";
    $menu = $db->query($get)->fetch_all();
    return $menu;
}

// Aktualizowanie danych menu
function updateMenuData($id, $menuData){
    global $db;
    $data = serialize($menuData);
    $menuUpdate = "UPDATE menu SET menu_data='$data' WHERE menu_data_id='$id'";
    $db->query($menuUpdate);
}