<?php 
session_start();
@include_once 'config/functions.php';
global $id;
$page = getPageByID($id);
$robots = $page[1];
$description = $page[2];
$title = $page[4];
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="<?php echo $robots; ?>"/>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
</head>