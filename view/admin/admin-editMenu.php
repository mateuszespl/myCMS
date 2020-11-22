<?php
@include_once 'config/functions.php';
global $pages;
global $menuItems;
?>

            <div class="card w-100 bg-secondary p-2 flex-column h-100">
                <ul id="sortable" class="list-group mb-3">
                <?php
                    foreach($menuItems as $menuItem){
                    $id= $menuItem[0];
                    $position = $menuItem[1];
                    $data = unserialize($menuItem[2]);
                    $title = $data[4];
                    $submenu = $menuItem[3];
                    $submenuData = $menuItem[4];
                    echo '<li class="list-group-item sortable d-flex align-items-center" data-position='.$position.' data-id='.$id.'><span class="badge badge-dark mr-2">'.$position.'</span>'.$title.'<a class="btn btn-danger ml-auto" href="/?p=admin&l=1&a=menu&id='.$id.'&menu='.$title.'">Usuń</a></li>';
                    } ?>
                </ul>
                <div class="btn-group w-75 align-self-center  mb-3 mx-5" role="group" aria-label="Basic example">
                    <button class="btn btn-warning" data-toggle="modal" data-target="#pageModal">Dodaj pozycję do menu</button>
                    <a href="/?p=admin&l=1&a=menuaccept" class="btn btn-success disabled" >Zaakceptuj kolejność</a>
                </div>
            </div>
            <form method="POST">
                <div class="modal fade" id="pageModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Wybierz pozycję do menu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <select name="menu" class="custom-select custom-select-lg">
                                    <?php
                                    foreach($pages as $page){
                                        $id= $page[0];
                                        $robots = $page[1];
                                        $description = $page[2];
                                        $content = $page[3];
                                        $title = $page[4];
                                        $date = $page[5];
                                        echo "<option value='".serialize($page)."'>".$title."</option>";
                                    } ?>
                                </select>
                                <!-- INPUTY DO PRZEKIEROWANIA -->
                                <input name="p" value="admin" type="hidden"/>
                                <input name="a" value="menu" type="hidden"/>
                                <input name="id" value="0" type="hidden"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Anuluj</button>
                            <button type="submit" class="btn btn-success">Dodaj</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
    </main>
    <script src='config/script.js'></script>
</body>