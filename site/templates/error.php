<?php snippet('head') ?>
<body>
<div class="layout">
    <?php snippet('header') ?>
    <div class="content">
        <div class="article">
            <h1><?php echo $page->title()->html() ?></h1>
            <?php echo $page->text()->kirbytext() ?>

        </div>
        <?php snippet('footer') ?>
    </div>
</div>
</body>
</html>
