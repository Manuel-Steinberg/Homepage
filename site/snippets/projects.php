<div class="article">
    <a href="<?php echo $data->url(); ?>" title="<?php echo $data->title()->html() ?>"><h1><?php echo $data->title()->html() ?></h1></a>
    <hr />

        <?php echo $data->text()->kirbytext() ?>


        <?php foreach($data->children()->visible() as $project): ?>
            <p><?php echo $project->title(); ?></p>
        <?php endforeach ?>
        <a href="<?php echo $data->url(); ?>">Mehr über meine Projekte</a>

</div>