<?php snippet('head') ?>
<body>
<div class="layout">
    <?php snippet('header') ?>
    <div class="content">
        <?php foreach($page->children()->visible()->shuffle() as $question): ?>
            <!-- A wrapper for all the blog posts -->
            <div class="article">
                <a href="<?php echo $question->url(); ?>" title="<?php echo $question->title()->html() ?>"><h1><?php echo $question->title()->html() ?></h1></a>


                <p>
                    <?php echo html(kirbytext($question->text())) ?>
                </p>
            </div>
        <?php endforeach; ?>
        <?php snippet('footer') ?>
    </div>
</div>
</body>
</html>
