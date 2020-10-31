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
    <main>
        <div class="w-100 h-100 d-flex justify-content-center align-items-center login">
            <div class="card">
                <div class="card-header">Zaloguj się do panelu administracyjnego</div>
                <div class="card-body p-5">
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Wpisz login">
                    </div>
                    <div class="form-group">
                        <label for="password">Hasło</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Wpisz hasło">
                    </div>
                    <!-- INPUTY DO PRZEKIEROWANIA POST -->
                    <input name="p" value="login" type="hidden"/>
                    <input name="a" value="submitted" type="hidden"/>
                    <button type="submit" class="btn btn-dark w-100 mt-3">Zaloguj się</button>
                </form>
                </div>
            </div>
        </div>
    </main>
    <script src='/config/script.js'></script>
</body>
