<?php @include_once 'head.php' ?>
<body>
    <main class="min-vw-100 min-vh-100 position-relative">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/admin">Admin panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php echo $uri == "/?p=admin&l=1&a=page" ? "active font-weight-bold" : null ?> mx-5">
                        <a class="nav-link" href="/?p=admin&l=1&a=page">Edytuj podstrony</a>
                    </li>
                    <li class="nav-item  <?php echo $uri == "/?p=admin&l=1&a=menu" ? "active font-weight-bold" : null ?> mx-5">
                        <a class="nav-link" href="/?p=admin&l=1&a=menu">Edytuj menu</a>
                    </li>
                    <li class="nav-item <?php echo $uri == "/?p=admin&l=1&a=url" ? "active font-weight-bold" : null ?> mx-5">
                        <a class="nav-link" href="/?p=admin&l=1&a=url">Edytuj URL'e</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="/">Strona główna</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="/?p=login&a=logout">Wyloguj</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="admin__panel w-100 min-vh-100 d-flex justify-content-center align-items-center">