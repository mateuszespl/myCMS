<?php
@include_once 'navigation.php';
global $page;
$content = $page[3];
$date = $page[5];
$contentTitle = $page[6];
?>
    <main class="h-100 w-75 mx-auto my-5">
        <header>
            <h1><?php echo $contentTitle; ?></h1>
        </header>
        <article>
            <p><?php echo $content; ?></p>
        </article>
    </main>
    <script src='/config/script.js'></script>
</body>