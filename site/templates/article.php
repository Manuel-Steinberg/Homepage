<?php snippet('head') ?>
<body>
<div class="layout">
    <?php snippet('header') ?>
    <div class="content">
        <?php /*snippet('share-buttons');*/ ?>
        <div class="article">


                    <a href="<?php echo $page->url(); ?>" title="<?php echo $page->title()->html() ?>"><h1><?php echo $page->title()->html() ?></h1></a>

                    <!-- A single blog post -->
                    <?php echo $page->text()->kirbytext() ?>


        </div>

            <?php snippet('footer') ?>


    </div>
</div>
</body>
</html>