<?php
@include_once 'config/functions.php';
$pages = getPages();?>

            <div class="card bg-secondary p-2">
                <ul id="sortable" class="list-group mb-3">
                <?php
                    foreach($pages as $page){
                    $id= $page[0];
                    $robots = $page[1];
                    $description = $page[2];
                    $content = $page[3];
                    $title = $page[4];
                    $date = $page[5];
                    echo '<li class="list-group-item">'.$title.'</li>';
                    } ?>
                </ul>
                <button class="btn btn-warning mb-3 mx-5">Zapisz układ menu</button>
            </div>
        </div>
    </main>
    <script src='config/script.js'></script>
</body>