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
            <a href="#legno-alluminio" class="nav-button" type="button">
                <span class="--text-button">
                    Legno-alluminio
                </span>
            </a>
            <a href="#accessori" class="nav-button" type="button">
                <span class="--text-button">
                    Accessori
                </span>
            </a>
            <a href="#servizi" class="nav-button" type="button">
                <span class="--text-button">
                    Servizi
                </span>
            </a>
            <a href="#azienda" class="nav-button" type="button">
                <span class="--text-button">
                    Azienda
                </span>
            </a>
            <a href="#contatti" class="nav-button" type="button">
                <span class="--text-button">
                    Contatti
                </span>
            </a>
        </nav>
    </menu>
</header>