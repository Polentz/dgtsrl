<!DOCTYPE html>
<html lang="it-IT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($page->is("home")): ?>
        <title><?= $site->title() ?>: Il mondo intorno alla tua finestra</title>
    <?php else: ?>
        <title><?= $site->title() ?>: <?= $page->title() ?></title>
    <?php endif ?>
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