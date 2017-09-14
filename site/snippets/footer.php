<div class="footer">
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
    <div class="navigation">
        <?php foreach($pages->invisible()->not('home', '404', 'login', 'apps', 'sitemap') as $p): ?>
            <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        <?php endforeach ?>
        <br />
        <p class="copyright"><span>C </span><a href="<?php echo html(site()->homePage()->url()) ?>">Manuel Steinberg</a></p>
    </div>
</div>

<?php
echo js('assets/js/main.min.js', false);
echo css('assets/css/main.min.css');
echo css('assets/css/normalize.css');

// Set Up Piwik Only For Production
if (getenv('HTTP_ENV') === 'PROD'){
   echo js('assets/js/piwik.config.js', true);
}
?>

<link rel="stylesheet" href="https://unpkg.com/gutenberg-css@0.4.0" media="print" integrity="sha384-/X3/u0SIC4RxC+iEqfrY/ZwCc+Yit7Xuy3Fyj1uhaHlfS4BBsyFH8IaXdgCEFfMU" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/gutenberg-css@0.4.0/dist/themes/modern.min.css" integrity="sha384-jlsI4AiMWV/iC71CpFtBCNpsNO9ztTRCqHL6GkM+GYdK+Zuol4f6lXERL/187Ecq" crossorigin="anonymous">

<?php if (getenv('HTTP_ENV') === 'DEV'): ?>
    <script src="https://dev.manuel-steinberg.de/assets/js/dev.jobs.minify.config.js" async></script>
<?php endif; ?>
