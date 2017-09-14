<!DOCTYPE html>
<html lang="de" id="html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page->description()->html() ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#485563">

    <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>

    <link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="Blog Feed" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <?php echo css('assets/css/blocking.min.css'); ?>

    <!--[if lt IE 9]>
    <?php echo js('assets/js/html5shiv.min.js'); ?>
    <![endif]-->


</head>