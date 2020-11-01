<?php
@include_once 'head.php';
@include_once 'config/functions.php';
$pages = getPages();
global $id;
?>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Brand</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
    <?php
        foreach($pages as $navigationPage){
        $id= $navigationPage[0];
        $robots = $navigationPage[1];
        $description = $navigationPage[2];
        $content = $navigationPage[3];
        $title = $navigationPage[4];
        $date = $navigationPage[5];
        

        echo'<li class="nav-item">
                <a class="nav-link" href="/?p=page&id='.$id.'">'.$title.'</a>
            </li>';
        } ?>
      <li class="nav-item">
        <a class="nav-link" href="/?p=login">Panel admina</a>
      </li>
    </ul>
  </div>
</nav>