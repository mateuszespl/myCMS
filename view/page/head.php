<?php 
session_start();
global $currentPage;
$robots = $currentPage[1];
$description = $currentPage[2];
$title = $currentPage[4];
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="<?php echo $robots; ?>"/>
    <?php if($description != ""){
        echo '<meta name="description" content="'.$description.'">';
    };
    
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="config/style.css">
    <title><?php echo $title; ?></title>
</head>