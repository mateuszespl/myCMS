<?php @include_once 'head.php';
global $action;
global $id;
?>
<body>
    <div class="bg-secondary">
        <div class="w-100 h-100 d-flex justify-content-center align-items-center login">
            <div class="card">
                <div class="card-header"><?php switch($action){
                    case "edit":
                        echo "Zmiany zostały wprowadzone";
                    break;
                    case "add":
                        echo "Strona została dodana";
                    break;
                    case "delete":
                        echo "Strona została usunięta";
                    break;
                    case "menu":
                        if($id == 0){
                        echo "Dodano pozycję do menu";
                        } else echo "Usunięto pozycję z menu";
                    break;
                    case "menuaccept":
                        echo "Kolejność zmieniona pomyślnie";
                }?></div>
                <div class="card-body p-5">
                    <p>Trwa przekierowywanie...</p>
                </div>
            </div>
        </div>
    </div>
    <script src='config/script.js'></script>
</body>
