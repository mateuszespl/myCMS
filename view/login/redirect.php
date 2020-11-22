<?php @include_once 'head.php';
global $action;
?>
<body>
    <div class="bg-secondary">
        <div class="w-100 h-100 d-flex justify-content-center align-items-center login">
            <div class="card">
            <div class="card-header"><?php
            switch($action){
                case "success":
                    echo "Pomyślnie zalogowano";
                break;
                case "logout":
                    echo "Pomyślnie wylogowano";
                break;
            }
            ?>
            </div>
                <div class="card-body p-5">
                    <p>Trwa przekierowywanie...</p>
                </div>
            </div>
        </div>
    </div>
    <script src='config/script.js'></script>
</body>
