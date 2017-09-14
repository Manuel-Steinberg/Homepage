<?php snippet('head') ?>
<body>
<div class="layout">
    <?php snippet('header') ?>
    <div class="content">
        <div class="article">
            <h1><?php echo $page->title()->html() ?></h1>

            <?php echo $page->law()->kirbytext() ?>

            <div itemscope itemtype="http://schema.org/Person">
                <span itemprop="name">Manuel Steinberg</span><br />
                <div itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                    <span itemprop="street-address">Am Tennisplatz 2</span><br />
                    <span itemprop="postal-code">91126</span>&nbsp;<span itemprop="locality">Rednitzhembach</span>
                    <br />
                    <br />
                    <span>Telefon: <a itemprop="telephone" href="tel:<?php echo $page->tel()->html() ?>" title="Telefon"><?php echo $page->tel()->html() ?></a></span>
                    <br />
                    <br />
                    <span>E-Mail: <a itemprop="email" title="E-Mail" href="mailto:<?php echo $page->email()->html() ?>"><?php echo $page->email()->text() ?></a></span>
                </div>
            </div>
            <br />
            <?php echo $page->text()->kirbytext() ?>

        </div>



        <?php snippet('footer') ?>
    </div>
</div>
</body>
</html>
