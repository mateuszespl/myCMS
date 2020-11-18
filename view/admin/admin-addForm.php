<?php @include_once 'config/functions.php';
$pages = getPages();
 ?>  
 
            <div class="card p-2 bg-secondary">
                <form class="bg-light p-5" method="POST">
                    <div class="form-group">
                        <label for="title">Meta tytuł</label>
                        <input type="text" class="form-control" id="title" name="title">
                        <small class="form-text text-muted">Ogranicz ilość znaków do 100 (łącznie z nazwą firmy).</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Meta opis</label>
                        <input type="text" class="form-control" id="description" name="description">
                        <small class="form-text text-muted">Ogranicz ilość znaków do 160.</small>
                    </div>
                    <div class="form-group">
                        <label for="robots">Meta robots</label>
                        <select name="robots" class="form-control" id="robots">
                        <?php
                            $selectItems = ["index, follow","noindex, follow","index, nofollow", "noindex, nofollow"];
                            foreach($selectItems as $selectItem){
                                echo "<option>".$selectItem."</option>";
                            }
                            ?>
                        </select>
                        <small class="form-text text-muted">Ustawienia dla robotów wyszukiwarki Google.</small>
                    </div>
                    <div class="form-group">
                        <label for="header">Nagłówek artykułu</label>
                        <input type="text" class="form-control" id="header" name="header">
                    </div>
                    <div class="my-3">
                        <label for="article">Artykuł</label>
                        <textarea id="article" name="article"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="url">Przyjazny URL</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">http://splawski.4suns.pl/</div>
                            </div>
                            <input type="text" class="form-control" id="url" name="url" value="<?php echo $url; ?>">
                        </div>
                        <small class="form-text text-muted">Adres URL to na przykład: http://www.example.com/example.</small>
                    </div>
                    <div class="form-check mb-5">
                        <input type="checkbox" class="form-check-input" id="isMain" name="isMain">
                        <label for="header" class="form-check-label">Strona główna</label>
                        <small class="form-text text-muted">Zaznacz, jeśli chcesz aby to była strona główna.</small>
                    </div>
                    <!-- INPUTY DO PRZEKIEROWANIA POST -->
                    <input name="a" value="add" type="hidden"/>
                    <input name="id" value="<?php echo sizeof($pages)+1 ?>" type="hidden"/>
                    <button type="submit" class="btn btn-success">Zaakceptuj zmiany</button>
                </form>
            </div>
        </div>
    </main>
    <script src='config/script.js'></script>
</body>