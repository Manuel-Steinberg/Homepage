<?php

$ignore = array('sitemap', '404');

// send the right header
header('Content-type: text/xml; charset="utf-8"');

// echo the doctype
echo '<?xml version="1.0" encoding="utf-8"?>';

?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <?php foreach($pages->index() as $p): ?><?php if(in_array($p->uri(), $ignore)) continue ?><url>
            <loc><?php echo html($p->url()) ?></loc>
            <lastmod><?php echo $p->modified('c') ?></lastmod>
            <priority><?php echo ($p->isHomePage()) ? 1 : number_format(0.5/$p->depth(), 1) ?></priority>
</url>
    <?php endforeach ?>
</urlset>