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
        <?php if ($slots->home()): ?>
            <nav class="nav">
                <a href="/ekotech" class="nav-button<?= $uri === 'ekotech' ? ' --current' : '' ?>" type="button">Ekotech</a>
                <a href="/alumframe" class="nav-button<?= $uri === 'alumframe' ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="/accessori" class="nav-button<?= $uri === 'accessori' ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <a href="#servizi" class="nav-button" type="button">Servizi</a>
                <a href="#azienda" class="nav-button" type="button">Azienda</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php endif ?>
        <?php if ($slots->alumframe()): ?>
            <nav class="nav">
                <a href="/ekotech" class="nav-button<?= $uri === 'ekotech' ? ' --current' : '' ?>" type="button">Ekotech</a>
                <a href="/alumframe" class="nav-button<?= $uri === 'alumframe' ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="/accessori" class="nav-button<?= $uri === 'accessori' ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <a href="#symbio" class="nav-button" type="button">Symbio</a>
                <a href="#catalogo" class="nav-button" type="button">Catalogo</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php endif ?>
        <?php if ($slots->accessori()): ?>
            <nav class="nav">
                <a href="/ekotech" class="nav-button<?= $uri === 'ekotech' ? ' --current' : '' ?>" type="button">Ekotech</a>
                <a href="/alumframe" class="nav-button<?= $uri === 'alumframe' ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="/accessori" class="nav-button<?= $uri === 'accessori' ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <a href="#catalogo" class="nav-button" type="button">Catalogo</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php endif ?>
        <?php if ($slots->ekotech()): ?>
            <nav class="nav">
                <a href="/ekotech" class="nav-button<?= $uri === 'ekotech' ? ' --current' : '' ?>" type="button">Ekotech</a>
                <a href="/alumframe" class="nav-button<?= $uri === 'alumframe' ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="/accessori" class="nav-button<?= $uri === 'accessori' ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <a href="#catalogo" class="nav-button" type="button">Catalogo</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php endif ?>
        <?php if ($slots->subpages()): ?>
            <nav class="nav">
                <a href="/ekotech" class="nav-button<?= $uri === 'ekotech' ? ' --current' : '' ?>" type="button">Ekotech</a>
                <a href="/alumframe" class="nav-button<?= $uri === 'alumframe' ? ' --current' : '' ?>"
                    type="button">Legno-alluminio</a>
                <a href="/accessori" class="nav-button<?= $uri === 'accessori' ? ' --current' : '' ?>"
                    type="button">Accessori</a>
                <a href="#catalogo" class="nav-button" type="button">Catalogo</a>
                <a href="#contatti" class="nav-button" type="button">Contatti</a>
            </nav>
        <?php endif ?>
    </menu>
</header>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const anchorLinks = document.querySelectorAll('.nav a[href^="#"]');
        if (!anchorLinks.length) return;

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                const link = document.querySelector('.nav a[href="#' + entry.target.id + '"]');
                if (link) {
                    link.classList.toggle('--active', entry.isIntersecting);
                }
            });
        }, {
            // Section is "active" when its top edge is within the upper 30% of the viewport
            rootMargin: '0px 0px -70% 0px',
            threshold: 0
        });

        anchorLinks.forEach(function (link) {
            const id = link.getAttribute('href').slice(1);
            const target = document.getElementById(id);
            if (target) observer.observe(target);
        });
    });
</script> -->