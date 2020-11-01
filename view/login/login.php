<?php @include_once 'head.php';
global $action;
$action == "failure" ? $failure = true : $failure = false;
 ?>
<body>
    <main>
        <div class="w-100 h-100 d-flex justify-content-center align-items-center login">
            <div class="card">
                <div class="card-header">Zaloguj się do panelu administracyjnego</div>
                <div class="card-body p-5">
                <form method="POST" action="index.php">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control <?php echo $failure ? "is-invalid" : null; ?>" id="login" name="login" placeholder="Wpisz login">
                    </div>
                    <div class="form-group">
                        <label for="password">Hasło</label>
                        <input type="password" class="form-control <?php echo $failure ? "is-invalid" : null; ?>" id="password" name="password" placeholder="Wpisz hasło">
                    </div>
                    <?php echo $failure ? '<div class="invalid-feedback">Login lub hasło są nieprawidłowe. Spróbuj ponownie.</div>' : null ?>
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
