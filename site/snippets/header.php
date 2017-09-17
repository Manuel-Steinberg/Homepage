<div class="sidebar">
    <div class="header">
        <h1 class="brand-title"><?php echo $site->title()->html() ?></h1>
        <p id="i-am">Ich bin genial</p>
        <?php snippet('i-am'); ?>
        <div class="social-buttons">
            <a href="https://www.xing.com/profile/Manuel_Steinberg3" target="_blank" rel="noopener noreferrer" title="<?php echo $site->xing()->html(); ?>"><i class="fa fa-xing pure-menu-link" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/manuelsteinberg" target="_blank" rel="noopener noreferrer" title="<?php echo $site->linkedin()->html(); ?>"><i class="fa fa-linkedin pure-menu-link" aria-hidden="true"></i></a>
            <a href="https://twitter.com/MStnbrg" target="_blank" rel="noopener noreferrer" title="<?php echo $site->twitter()->html(); ?>"><i class="fa fa-twitter pure-menu-link" aria-hidden="true"></i></a>
            <a href="https://github.com/Manuel-Steinberg" target="_blank" rel="noopener noreferrer" title="<?php echo $site->github()->html(); ?>"><i class="fa fa-github pure-menu-link" aria-hidden="true"></i></a>
            <a href="<?php echo url('blog/feed') ?>" target="_blank" rel="noopener noreferrer" title="<?php echo $site->rss()->html(); ?>"><i class="fa fa-rss pure-menu-link" aria-hidden="true"></i></a>
        </div>
        <hr />
        <div class="breadcromb">
            <?php foreach($site->breadcrumb() as $crumb): ?>
                <?php if ($crumb->isHomePage() || $crumb != $site->activePage()): ?>
                    <a href="<?php echo html($crumb->url()) ?>">
                        <?php if ($crumb->isHomePage()): ?>
                            <i class="fa fa-home" aria-hidden="true"></i>
                        <?php else: echo html($crumb->title()); endif; ?>
                    </a>
                <? endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>