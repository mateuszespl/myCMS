<?php
include_once 'head.php';
global $menuItems;
?>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">CMS PROTOTYPE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <?php
        foreach($menuItems as $menuItem){
        $data = unserialize($menuItem[2]);
        $title = $data[4];
        $slug = $data[8];
        $id = $data[0];
        if($_SERVER["REQUEST_URI"] == "/".$slug){
          echo'<li class="nav-item mx-5">
          <a class="nav-link active" href="/?slug='.$slug.'">'.$title.'</a>
          </li>';
        } else{
        echo'<li class="nav-item mx-5">
                <a class="nav-link" href="/?slug='.$slug.'">'.$title.'</a>
            </li>';
        }
        } ?>
      <li class="nav-item">
        <a class="nav-link mx-5" href="/?p=login">Panel admina</a>
      </li>
    </ul>
  </div>
</nav>