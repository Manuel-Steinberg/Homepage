<?php snippet('head') ?>
    <body>
    <div class="layout">
        <?php snippet('header') ?>



        <div class="content">

            <?php foreach($page->children()->visible()->flip() as $article): ?>
                <!-- A wrapper for all the blog posts -->
                <div class="article">
                    <a href="<?php echo $article->url(); ?>" title="<?php echo $article->title()->html() ?>"><h1 class="content-subhead"><?php echo $article->title()->html() ?></h1></a>


                    <p><?php echo html($article->text()->excerpt(18, 'words')) ?></p>
                    <a href="<?php echo $article->url()?>">Weiter lesen</a>

                </div>
            <?php endforeach; ?>

            <?php snippet('footer') ?>

        </div>

    </div>
    </body>
    </html>




