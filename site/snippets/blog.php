<div class="article">
    <a href="<?php echo $data->url(); ?>" title="<?php echo $data->title()->html() ?>"><h1 class="content-subhead"><?php echo $data->title()->html() ?></h1></a>
    <hr />

    <?php echo $data->text()->kirbytext(); ?>
    <a href="<?php echo $data->url(); ?>">Meine Blogbeiträge ...</a>

</div>