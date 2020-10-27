<main class="min-vw-100 min-vh-100 position-relative">
    <?php @include_once 'navigation.php';?>
    <div class="admin__panel w-100 vh-100 d-flex justify-content-center align-items-center">
        <?php switch($_SERVER['REQUEST_URI']){
            case "/admin/index.php":
                @include_once 'welcomePage.php';
            break;
            case "/admin/pages":
                @include_once 'pagesEditPage.php';
            break;
            case "/admin/url":
                @include_once 'urlEditPage.php';
            break;
            case "/admin/menu":
                @include_once 'menuEditPage.php';
            break;
            default: header("/");
        }
        ?>
    </div>
</main>