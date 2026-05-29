<?php
$ekotech = page('ekotech');
$alumframe = page('alumframe');
$accessori = page('accessori');
?>

<header class="header">
    <menu class="menu">
        <h1 class="logo">
            <a href="<?= $site->url() ?>">
                <?= $site->title() ?>
            </a>
        </h1>
        <button class="menu-toggle" aria-label="Apri menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <?php if ($slots->home()): ?>
            <nav class="nav">
                <a href="<?= $ekotech?->url() ?>" class="nav-button<?= $ekotech?->isOpen() ? ' --current' : '' ?>"
                    type="button">Ekotech</a>
                <a href="<?= $alumframe?->url() ?>" class="nav-button<?= $alumframe?->isOpen() ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="<?= $accessori?->url() ?>" class="nav-button<?= $accessori?->isOpen() ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <a href="<?= $alumframe?->url() ?>#symbio" class="nav-button" type="button">Symbio<span
                        class="nav-label">Novità</span></a>
                <a href="#servizi" class="nav-button" type="button">L'azienda</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php else: ?>
            <nav class="nav">
                <a href="<?= $ekotech?->url() ?>" class="nav-button<?= $ekotech?->isOpen() ? ' --current' : '' ?>"
                    type="button">Ekotech</a>
                <a href="<?= $alumframe?->url() ?>" class="nav-button<?= $alumframe?->isOpen() ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="<?= $accessori?->url() ?>" class="nav-button<?= $accessori?->isOpen() ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <?php if ($page->intendedTemplate()->name() === 'alumframe'): ?>
                    <a href="#symbio" class="nav-button" type="button">Symbio<span class="nav-label">Novità</span></a>
                <?php else: ?>
                    <a href="<?= $alumframe?->url() ?>#symbio" class="nav-button" type="button">Symbio<span
                            class="nav-label">Novità</span></a>
                <?php endif ?>
                <a href="#catalogo" class="nav-button" type="button">Catalogo</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php endif ?>
    </menu>
</header>