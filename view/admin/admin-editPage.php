<?php 
@include_once 'config/functions.php';
$pages = getPages();?>

               <div class="card bg-secondary p-2">
                    <ul class="list-group mb-3">
                    <?php
                    foreach($pages as $page){
                    $id= $page[0];
                    $robots = $page[1];
                    $description = $page[2];
                    $content = $page[3];
                    $title = $page[4];
                    $date = $page[5];
                    
                    echo '<li class="list-group-item">'.$title.'
                              <div class="btn-group btn-group-sm mx-4">
                                   <button class="btn btn-success">
                                        <a class="text-reset" href="/?p=admin&id='.$id.'">Edytuj stronę</a>
                                   </button>
                                   <button class="btn btn-danger">Usuń stronę</button>
                              </div>
                         </li>';
                    } ?>
                    </ul>
               <button class="btn btn-warning mb-3 mx-5">Dodaj nową podstronę</button>
               </div>
          </div>
    </main>
    <script src='config/script.js'></script>
</body>