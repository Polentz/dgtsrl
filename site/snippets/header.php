<?php
$current = $site->children()->listed()->findBy('isOpen', true);
$navigation = $site->children()->listed();
$uri = $page->uri();
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
                <a href="/ekotech" class="nav-button<?= $uri === 'ekotech' ? ' --current' : '' ?>" type="button">Ekotech</a>
                <a href="/alumframe" class="nav-button<?= $uri === 'alumframe' ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="/accessori" class="nav-button<?= $uri === 'accessori' ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <a href="/alumframe#symbio" class="nav-button" type="button">Symbio<span class="nav-label">Novità</span></a>
                <a href="#servizi" class="nav-button" type="button">L'azienda</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php else: ?>
            <nav class="nav">
                <a href="/ekotech" class="nav-button<?= $uri === 'ekotech' ? ' --current' : '' ?>" type="button">Ekotech</a>
                <a href="/alumframe" class="nav-button<?= $uri === 'alumframe' ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="/accessori" class="nav-button<?= $uri === 'accessori' ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <a href="#symbio" class="nav-button" type="button">Symbio<span class="nav-label">Novità</span></a>
                <a href="#catalogo" class="nav-button" type="button">Catalogo</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php endif ?>

    </menu>
</header>