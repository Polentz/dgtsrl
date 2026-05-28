<?= snippet('head') ?>
<?php snippet('header', slots: false) ?>

<section class="section --dark-theme">
    <div class="container">
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title">
                <?= $page->maintitle() ?>
            </h3>
        </div>
</section>

<section class="section --dark-theme">
    <div class="container">
        <div class="section-col section-col--image section-col--left --span-1-3">
            <figure>
                <img src="<?= $page->cover()->toFile()->url() ?>" alt="<?= $page->cover()->toFile()->title() ?>">
                <?php if ($page->cover()->toFile()->title()->isNotEmpty()): ?>
                    <figcaption class="gallery-caption --text-caption">
                        <?= $page->cover()->toFile()->title() ?>
                    </figcaption>
                <?php endif ?>
            </figure>
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <?php if ($page->subtitle()->isNotEmpty()): ?>
                <div class="section-subtitle --text-subtitle">
                    <?= $page->subtitle() ?>
                </div>
            <?php endif ?>
            <?php if ($page->description()->isNotEmpty()): ?>
                <div class="section-block --text-body">
                    <?= $page->description() ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</section>

<?php if ($page->gallery()->toFiles()->count() > 0): ?>
    <section class="section --dark-theme">
        <div class="gallery">
            <?php foreach ($page->gallery()->toFiles() as $file): ?>
                <figure class="gallery-item --span-1" <?= $file->span() ? "style='grid-column: span {$file->span()}'" : "" ?>>
                    <img src="<?= $file->url() ?>" alt="<?= $file->title() ?>">
                    <?php if ($file->title()->isNotEmpty()): ?>
                        <figcaption class="gallery-caption --text-caption">
                            <?= $file->title() ?>
                        </figcaption>
                    <?php endif ?>
                </figure>
            <?php endforeach ?>
        </div>
    </section>
<?php endif ?>

<section class="section --dark-theme">
    <div class="container">
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title">
                ESPLORA TUTTI I SISTEMI ALUMFRAME:
            </h3>
        </div>
    </div>
    <div class="gallery">
        <?php foreach ($page->siblings() as $sibling): ?>
            <?php if ($sibling->is($page)): ?>
                <button class="button button--outline --current" aria-label="Scopri <?= $sibling->title() ?>"
                    type="button"><?= $sibling->title() ?>
                </button>
            <?php else: ?>
                <a class="button button--outline" aria-label="Scopri <?= $sibling->title() ?>" type="button"
                    href="<?= $sibling->url() ?>"><?= $sibling->title() ?></a>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</section>

<section id="catalogo" class="section --alumframe-theme">
    <div class="container">
        <div class="banner --span-1-5">
            <h3 class="banner-title --text-title">Scarica il catalogo completo dei sistemi legno-alluminio Alumframe
            </h3>
            <a class="button button--outline" aria-label="Scarica il catalogo" type="button"
                href="/content/alumframe/DGT-ALUMFRAME-catalogo-4-2025.pdf" target="_blank">Scarica il catalogo</a>
        </div>
    </div>
</section>

<?= snippet('footer') ?>
<?= snippet('foot') ?>