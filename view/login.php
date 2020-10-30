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
    <div class="w-100 h-100 d-flex justify-content-center align-items-center login">
        <div class="card">
            <div class="card-header">Zaloguj się do panelu administracyjnego</div>
            <div class="card-body p-5">
            <form method="POST" action="/admin/index.php">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Wpisz login">
                </div>
                <div class="form-group">
                    <label for="password">Hasło</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Wpisz hasło">
                </div>
                <button type="submit" class="btn btn-dark w-100 mt-3">Zaloguj się</button>
            </form>
            </div>
        </div>
    </div>
    <script src='/config/script.js'></script>
</body>
