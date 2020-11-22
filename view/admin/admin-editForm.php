<?php
@include_once 'config/functions.php';
global $id;
$page = getPageByID($id);
$id= $page[0];
$robots = $page[1];
$description = $page[2];
$content = $page[3];
$title = $page[4];
$date = $page[5];
$contentTitle = $page[6];
$isMain = $page[7];
$url = $page[8];
 ?>
            <div class="card h-100 w-100 p-2 bg-secondary">
                <form class="bg-light p-5" method="POST">
                    <div class="form-group">
                        <label for="title">Meta tytuł</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
                        <small class="form-text text-muted">Ogranicz ilość znaków do 100 (łącznie z nazwą firmy).</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Meta opis</label>
                        <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>">
                        <small class="form-text text-muted">Ogranicz ilość znaków do 160.</small>
                    </div>
                    <div class="form-group">
                        <label for="robots">Meta robots</label>
                        <select name="robots" class="form-control" id="robots" value="<?php echo $robots; ?>">
                        <?php
                            $selectItems = ["index, follow","noindex, follow","index, nofollow", "noindex, nofollow"];
                            foreach($selectItems as $selectItem){
                                if($selectItem == $robots){
                                    echo "<option selected>".$selectItem."</option>";
                                } else  echo "<option>".$selectItem."</option>";
                            }
                            ?>
                        </select>
                        <small class="form-text text-muted">Ustawienia dla robotów wyszukiwarki Google.</small>
                    </div>
                    <div class="form-group">
                        <label for="header">Nagłówek artykułu</label>
                        <input type="text" class="form-control" id="header" name="header" required value="<?php echo $contentTitle; ?>">
                    </div>
                    <div class="my-3">
                        <label for="article">Artykuł</label>
                        <textarea id="article" name="article"><?php echo $content; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="url">Przyjazny URL</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">http://splawski.4suns.pl/</div>
                            </div>
                            <input type="text" class="form-control" required id="url" name="url" value="<?php echo $url; ?>">
                        </div>
                        <small class="form-text text-muted">Adres URL to na przykład: http://www.example.com/example.</small>
                    </div>
                    <div class="form-check mb-5">
                        <input type="checkbox" class="form-check-input" id="isMain" name="isMain" <?php echo $isMain ? "checked" : ""; ?>>
                        <label for="header" class="form-check-label">Strona główna</label>
                        <small class="form-text text-muted">Zaznacz, jeśli chcesz aby to była strona główna.</small>
                    </div>
                    <!-- INPUTY DO PRZEKIEROWANIA POST -->
                    <input name="a" value="edit" type="hidden"/>
                    <button type="submit" class="btn btn-success">Zaakceptuj zmiany</button>
                </form>
            </div>
        </div>
    </main>
    <script src='config/script.js'></script>
</body>