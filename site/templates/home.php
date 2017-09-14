<?php snippet('head') ?>
<body>
<div class="layout">
    <?php snippet('header') ?>
    <div class="content">
            <?php foreach($pages->visible() as $section) {
                snippet($section->template(), array('data' => $section));
            } ?>
            <?php snippet('footer') ?>
    </div>
</div>
</body>
</html>
