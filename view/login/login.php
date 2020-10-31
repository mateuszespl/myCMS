<?php @include_once 'head.php' ?>
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
