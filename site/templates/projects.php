<?php snippet('head') ?>
<body>
<div class="layout">
    <?php snippet('header') ?>
    <div class="content">
        <?php foreach($page->children()->visible()->flip() as $article): ?>
            <div class="article">
                <a href="<?php echo $article->url(); ?>" title="<?php echo $article->title()->html() ?>"><h1 class="content-subhead"><?php echo $article->title()->html() ?></h1></a>



                <h2 class="post-title">Introducing <?php echo html($article->title()) ?></h2>



                        <p>
                            <?php echo excerpt($article->text(), 20, 'words') ?>
                        </p>

                    <a href="<?php echo $article->url(); ?>">erfahre mehr über <?php echo html($article->title()) ?></a>

            </div>
        <?php endforeach ?>
        <?php snippet('footer') ?>
    </div>
</div>
</body>
</html>
