<?= snippet('head') ?>
<?php snippet('header', slots: false) ?>

<section class="section --dark-theme">
    <div class="container">
        <h2 class="section-heading --span-1-5 --text-heading">Alumframe: il calore del legno e la protezione
            dell'alluminio
        </h2>
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title">I sistemi legno-alluminio Alumframe</h3>
        </div>
    </div>
</section>

<section class="section --dark-theme">
    <div class="gallery">
        <?php foreach ($page->children()->listed() as $item): ?>
            <figure class="gallery-item --span-1">
                <a href="<?= $item->url() ?>">
                    <img src="<?= $item->cover()->toFile()->url() ?>" alt="<?= $item->title() ?>">
                </a>
                <figcaption class="gallery-caption --text-title">
                    <a href="<?= $item->url() ?>"><?= $item->title() ?></a>
                </figcaption>
            </figure>
        <?php endforeach ?>
    </div>
</section>

<section class="section --dark-theme">
    <div class="container">
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title">I profili legno-alluminio Alumframe danno la possibilità a
                costruttori e architetti di progettare nuove soluzioni e raggiungere nuovi standard performativi</h3>
        </div>
        <div class="section-block --text-body --span-2-4">
            <p>Alumframe è frutto di una ricerca costante che tiene conto di ogni aspetto: componenti, profili,
                materiali, design, prodotto finito.</p>
            <p>Ne è un esempio l'ampia gamma di accessori, quali clip di fissaggio e guarnizioni, che permettono di
                agevolare molteplici soluzioni di applicazione.</p>
        </div>
    </div>
</section>

<section class="section --dark-theme">
    <div id="symbio" class="container">
        <div class="section-col section-col--image section-col--left --span-1-3">
            <img src="<?= $page->image('symbio-2.png')?->url() ?>" alt="Render del sistema Symbio">
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <h3 class="section-title --text-title">Symbio: l'armonia nasce dal contrasto</h3>
            <p class="section-subtitle --text-subtitle">Symbio rivoluziona il mondo del serramento in legno,
                introducendo una clip che tiene “in simbiosi” i due elementi di cui sono composti sia l'anta che il
                telaio, senza l'utilizzo di viti</p>
            <ul class="section-list --text-body">
                <li>Sistema pratico e senza viti di ancoraggio, su telaio e su anta</li>
                <li>Adatto a tutti i tipi di sistemi in legno</li>
                <li>Montaggio (e smontaggio) in quattro semplici passaggi</li>
                <li>Semplificazione nella produzione e riduzione dei costi</li>
                <li>Il bicolore non è mai stato così facile da realizzare</li>
            </ul>
            <?php if ($brochure = $page->file('DGT-SYMBIO-brochure.pdf')): ?>
                <a class="button button--outline" aria-label="Scarica la brochure" type="button"
                    href="<?= $brochure->url() ?>" target="_blank">Scarica
                    la brochure</a>
            <?php endif ?>
        </div>
    </div>
    <div id="alumfast" class="container">
        <div class="section-col section-col--content section-col--left --span-1-3">
            <h3 class="section-title --text-title">Fornitura in kit</h3>
            <p class="section-subtitle --text-subtitle">Un innovativo sistema di vendita in kit dei profili
                legno-alluminio Alumframe, pensato per ridurre i costi e guadagnare tempo, senza rinunciare alla
                qualità</p>
            <ul class="section-list --text-body">
                <li>Ogni finestra in una confezione pronta per l'assemblaggio.</li>
                <li>Istruzioni di montaggio sintetiche e di facile lettura.</li>
                <li>Niente più bancali: zero problemi di gestione degli imballi.</li>
                <li>Sostituzione immediata in caso di danni.</li>
                <li>Software per la preventivazione in tempo reale.</li>
            </ul>
            <a class="button button--outline" aria-label="Guarda il video" type="button" href="#kit">Guarda il
                video</a>
        </div>
        <div class="section-col section-col--image section-col--right --span-3-5">
            <img src="<?= $page->image('alumfast.png')?->url() ?>" alt="Profilo Alumfast">
        </div>
    </div>
    <div id="finiture" class="container">
        <div class="section-col section-col--image section-col--left --span-1-3">
            <img src="<?= $page->image('alumframe-finiture.jpg')?->url() ?>"
                alt="Fotografia della palette delle colorazioni">
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <h3 class="section-title --text-title">Ampia gamma di finiture</h3>
            <p class="section-subtitle --text-subtitle">Tecnicamente impeccabile, esteticamente bello: con la scelta
                della finitura più adatta a ogni progetto, il legno-alluminio Alumframe è design e stile unico</p>
            <p class="section-text --text-body">Alumframe offre la possibilità di scegliere tra colorazioni RAL,
                speciali, decorato legno e anodizzati. I processi di verniciatura vengono realizzati con ossidazione
                anodica per consentire alle finiture Alumframe di resistere alla corrosione e all'azione degradante
                degli agenti atmosferici.</p>
        </div>
    </div>
</section>

<section id="kit" class="section --dark-theme">
    <div class="container">
        <h2 class="section-heading --text-heading --span-1-5">Alumfast:<br>semplice e logico</h2>
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title ">
                Ogni finestra in una confezione pronta per l'assemblaggio, in pochi e semplici passaggi
            </h3>
        </div>

        <video class="section-cover --span-1-5" autoplay muted loop controls>
            <source src="<?= $page->file('alumfast.mp4')?->url() ?>" type="video/mp4">
            Il tuo browser non supporta il tag video.
        </video>
    </div>
</section>

<section id="catalogo" class="section --alumframe-theme">
    <div class="container">
        <div class="banner --span-1-5">
            <h3 class="banner-title --text-title">Scarica il catalogo completo dei sistemi legno-alluminio Alumframe
            </h3>
            <?php if ($catalogo = $page->file('DGT-ALUMFRAME-catalogo-4-2025.pdf')): ?>
                <a class="button button--outline" aria-label="Scarica il catalogo" type="button"
                    href="<?= $catalogo->url() ?>" target="_blank">Scarica il catalogo</a>
            <?php endif ?>
        </div>
    </div>
</section>

<?= snippet('footer') ?>
<?= snippet('foot') ?>