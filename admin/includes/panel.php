<main class="min-vw-100 min-vh-100 position-relative">
    <?php @include_once 'navigation.php';?>
    <div class="admin__panel w-100 min-vh-100 d-flex justify-content-center align-items-center">
        <?php 
        $uri = $_SERVER['REQUEST_URI'];
        if($uri == "/admin"){
            @include_once 'welcomePage.php';
        }elseif($uri == "/admin/pages"){
            @include_once 'pagesEditPage.php';
        }elseif($uri == "/admin/url"){
            @include_once 'urlEditPage.php';
        }elseif($uri == "/admin/menu"){
            @include_once 'menuEditPage.php';
        }elseif(preg_match("@/admin/pages/.*@Umsi", $uri)){
            @include_once 'pagesEditForm.php';
        }
        ?>
    </div>
</main>