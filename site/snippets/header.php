<?php
$current = $site->children()->listed()->findBy('isOpen', true);
$navigation = $site->children()->listed();
?>

<header class="header">
    <menu class="menu">
        <h1 class="logo">
            <a href="<?= $site->url() ?>">
                <?= $site->title() ?>
            </a>
        </h1>
        <nav class="nav">
            <a href="#ekotech" class="nav-button" type="button">Ekotech</a>
            <a href="#legno-alluminio" class="nav-button" type="button">Legno-alluminio</a>
            <a href="#accessori" class="nav-button" type="button">Accessori</a>
            <a href="#servizi" class="nav-button" type="button">Servizi</a>
            <a href="#azienda" class="nav-button" type="button">Azienda</a>
            <a href="#contatti" class="nav-button" type="button">Contatti</a>
        </nav>
    </menu>
</header>