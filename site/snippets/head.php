<?php
$seoTitle = $page->is('home') ? $site->title() . ': Il mondo intorno alla tua finestra' : $site->title() . ': ' . $page->title();
$seoDescription = $page->seo_description()->isNotEmpty() ? $page->seo_description()->escape() : $site->seo_description()->escape();
$seoUrl = $page->url();
$seoImage = $page->og_image()->toFile() ?? $site->og_image()->toFile();
$seoImageUrl = $seoImage ? $seoImage->url() : $page->image()->url();
?>

<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seoTitle ?></title>
    <!-- SEO -->
    <meta name="description" content="<?= $seoDescription ?>">
    <link rel="canonical" href="<?= $seoUrl ?>">
    <!-- Open Graph -->
    <meta property="og:type" content="<?= $page->is('home') ? 'website' : 'article' ?>">
    <meta property="og:site_name" content="<?= $site->title()->escape() ?>">
    <meta property="og:title" content="<?= $seoTitle ?>">
    <meta property="og:description" content="<?= $seoDescription ?>">
    <meta property="og:url" content="<?= $seoUrl ?>">
    <meta property="og:locale" content="it_IT">
    <?php if ($seoImageUrl): ?>
        <meta property="og:image" content="<?= $seoImageUrl ?>">
        <meta property="og:image:alt" content="<?= $seoTitle ?>">
    <?php endif ?>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $seoTitle ?>">
    <meta name="twitter:description" content="<?= $seoDescription ?>">
    <?php if ($seoImageUrl): ?>
        <meta name="twitter:image" content="<?= $seoImageUrl ?>">
        <meta name="twitter:image:alt" content="<?= $seoTitle ?>">
    <?php endif ?>
    <link href="<?= $site->favicon()->toFile()->url() ?>" rel="icon" type="image/x-icon">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="stylesheet" href="https://use.typekit.net/xto7pui.css">
    <?= css([
        'assets/css/variables.css',
        'assets/css/base.css',
        'assets/css/style.css',
        '@auto',
    ]) ?>
</head>

<body>