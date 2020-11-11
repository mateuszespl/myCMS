<?php
global $currentPage;
$content = $currentPage[3];
$date = $currentPage[5];
$contentTitle = $currentPage[6];
global $slug;
?>
    <main class="h-100 w-75 mx-auto my-5">
        <header>
            <h1><?php echo $contentTitle; ?></h1>
        </header>
        <article>
            <p><?php echo $content; ?></p>
        </article>
    </main>
    <script src='config/script.js'></script>
</body>