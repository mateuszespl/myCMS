<?php
global $currentPage;
$content = $currentPage[3];
$date = $currentPage[5];
$contentTitle = $currentPage[6];
?>
    <main class="card mainContent">
        <header>
            <h1><?php echo $contentTitle; ?></h1>
        </header>
        <hr>
        <article>
            <p><?php echo $content; ?></p>
        </article>
    </main>
    <script src='config/script.js'></script>
</body>