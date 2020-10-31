<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/config/style.css">
    <title>Admin panel</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
</head>
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
                        <a class="nav-link" href="/?l=0">Wyloguj</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="admin__panel w-100 min-vh-100 d-flex justify-content-center align-items-center">