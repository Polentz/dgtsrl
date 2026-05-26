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
            <a href="#legno-alluminio" class="button" type="button">
                <span class="text-label">
                    Legno-alluminio
                </span>
            </a>
            <a href="#accessori" class="button" type="button">
                <span class="text-label">
                    Accessori
                </span>
            </a>
            <a href="#servizi" class="button" type="button">
                <span class="text-label">
                    Servizi
                </span>
            </a>
            <a href="#azienda" class="button" type="button">
                <span class="text-label">
                    Azienda
                </span>
            </a>
            <a href="#contatti" class="button" type="button">
                <span class="text-label">
                    Contatti
                </span>
            </a>
        </nav>
    </menu>
</header>