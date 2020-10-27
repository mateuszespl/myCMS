<?php $uri = $_SERVER["REQUEST_URI"] ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/admin">Admin panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php echo $uri == "/admin/pages" ? "active font-weight-bold" : null ?> mx-5">
        <a class="nav-link" href="/admin/pages">Edytuj podstrony</a>
      </li>
      <li class="nav-item  <?php echo $uri == "/admin/menu" ? "active font-weight-bold" : null ?> mx-5">
        <a class="nav-link" href="/admin/menu">Edytuj menu</a>
      </li>
      <li class="nav-item <?php echo $uri == "/admin/url" ? "active font-weight-bold" : null ?> mx-5">
        <a class="nav-link" href="/admin/url">Edytuj URL'e</a>
      </li>
      <li class="nav-item mx-5">
        <a class="nav-link" href="/">Strona główna</a>
      </li>
      <li class="nav-item mx-5">
        <a class="nav-link" href="/?logged=0">Wyloguj</a>
      </li>
    </ul>
  </div>
</nav>