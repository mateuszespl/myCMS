<?php 
@include_once 'config/functions.php';
$pages = getPages();
usort($pages, function ($item1, $item2) {
     return $item2[0] <=> $item1[0];
 }); 
 ?>

               <div class="card w-100 bg-secondary p-2 flex-column h-100">
                    <ul class="list-group h-100 mb-3">
                    <?php
                    foreach($pages as $page){
                    $id= $page[0];
                    $robots = $page[1];
                    $description = $page[2];
                    $content = $page[3];
                    $title = $page[4];
                    $date = $page[5];
                    $isMain = $page[7] == 1 ? " - <b> Strona Główna</b>" : "";
                    
                    echo '<li class="list-group-item d-flex align-items-center">'.$title.$isMain.'
                              <div class="btn-group ml-auto">
                                   <button class="btn btn-success">
                                        <a class="text-reset" href="/?p=admin&id='.$id.'">Edytuj</a>
                                   </button>
                                   <button class="btn btn-danger">
                                        <a class="text-reset" href="/?p=admin&a=delete&id='.$id.'">Usuń</a>
                                   </button>
                              </div>
                         </li>';
                    } ?>
                    </ul>
               <a href="/?p=admin&a=add&id=0" class="btn w-50 btn-warning mb-3 align-self-center mx-5">
               Dodaj nową stronę
               </a>
               </div>
          </div>
    </main>
    <script src='config/script.js'></script>
</body>