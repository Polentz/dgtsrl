<?= snippet('head') ?>
<?= snippet('header') ?>

<section class="section --dark-theme">
    <div class="container">
        <h3 class="section-heading --span-1-5 --text-heading">Alumframe: il calore del legno e la protezione
            dell'alluminio
        </h3>
        <div class="section-block --span-1-5">
            <h2 class="section-title --text-title">I sistemi legno-alluminio Alumframe</h2>
        </div>
    </div>
</section>

<section class="section --dark-theme">
    <div class="gallery">
        <?php foreach ($page->children()->listed() as $page): ?>
            <figure class="gallery-item --span-1">
                <a href="<?= $page->url() ?>" target="_blank">
                    <img src="<?= $page->cover()->toFile()->url() ?>" alt="<?= $page->title() ?>">
                    <figcaption class="gallery-caption --text-title"><?= $page->title() ?></figcaption>
                </a>
            </figure>
        <?php endforeach ?>
    </div>
</section>

<section class="section --dark-theme">
    <div id="symbio" class="container">
        <div class="section-col section-col--image section-col--left --span-1-3">
            <img src="/content/alumframe/symbio.jpg" alt="Profilo guarnizioni">
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <h3 class="section-title --text-title">Symbio: l'armonia nasce dal contrasto</h3>
            <p class="section-subtitle --text-subtitle">SYMBIO rivoluziona il mondo del serramento in legno,
                introducendo una clip che tiene “in simbiosi” i due elementi di cui sono composti sia l'anta che il
                telaio, senza l'utilizzo di viti.</p>
            <ul class="section-list --text-body">
                <li>Sistema pratico e senza viti di ancoraggio, sia su telaio che su anta.</li>
                <li>Adatto a tutti i tipi di sistemi in legno.</li>
                <li>Montaggio (e smontaggio) semplice e veloce.</li>
                <li>Semolificazione nella produzione e riduzione dei costi.</li>
                <li>Alta personalizzazione dell'infisso: il bicolore non è mai stato così facile da realizzare.</li>
            </ul>
            <button class=" button button--outline"><a href="/alumframe" class="--text-button">Scarica la
                    brochure</a></button>
        </div>
    </div>
    <div id="alumfast" class="container">
        <div class="section-col section-col--content section-col--left --span-1-3">
            <h3 class="section-title --text-title">Alumfast: semplice e logico</h3>
            <p class="section-subtitle --text-subtitle">Un innovativo sistema di vendita in kit dei profili
                legno-alluminio Alumframe, pensato per ridurre i costi e guadagnare tempo, senza rinunciare alla
                qualità.</p>
            <ul class="section-list --text-body">
                <li>Ogni finestra in una confezione pronta per l'assemblaggio.</li>
                <li>Istruzioni di montaggio sintetiche e di facile lettura.</li>
                <li>Niente più bancali: zero problemi di gestione degli imballi.</li>
                <li>Sostituzione immediata in caso di danni.</li>
                <li>Software per la preventivazione in tempo reale.</li>
            </ul>
            <button class=" button button--outline"><a href="#kit" class="--text-button">Guarda il
                    video</a></button>
        </div>
        <div class="section-col section-col--image section-col--right --span-3-5">
            <img src="/content/alumframe/alumfast.png" alt="Profilo guarnizioni">
        </div>
    </div>
    <div id="finiture" class="container">
        <div class="section-col section-col--image section-col--left --span-1-3">
            <img src="/content/alumframe/alumframe-finiture.jpg" alt="Palette delle colorazioni">
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <h3 class="section-title --text-title">Ampia gamma di finiture</h3>
            <p class="section-subtitle --text-subtitle">Tecnicamente impeccabile, esteticamente bello: con la scelta
                della finitura più adatta a ogni progetto, il legno-alluminio Alumframe è design e stile unico.</p>
            <p class="section-text --text-body">Alumframe offre la possibilità di scegliere tra colorazioni RAL,
                speciali, decorato legno e anodizzati. I processi di verniciatura vengono realizzati con ossidazione
                anodica per consentire alle finiture Alumframe di resistere alla corrosione e all’azione degradante
                degli agenti atmosferici.</p>
        </div>
    </div>
</section>

<section id="kit" class="section --dark-theme">
    <div class="container">
        <h2 class="section-heading --text-heading --span-1-5">Fornitura in kit</h2>
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title ">
                Ogni finestra in una confezione pronta per l'assemblaggio, in pochi e semplici passaggi.
            </h3>
        </div>

        <video class="section-cover --span-1-5" autoplay muted loop>
            <source src="/content/alumframe/alumfast.mp4" type="video/mp4">
            Il tuo browser non supporta il tag video.
        </video>
    </div>
</section>

<section id="catalogo" class="section --alumframe-theme">
    <div class="container">
        <div class="banner --span-1-5">
            <h3 class="banner-title --text-title">Scarica il catalogo completo dei sistemi legno-alluminio Alumframe
            </h3>
            <a href="/content/catalogo-alumframe.pdf" target="_blank"
                class="button button--outline --text-button">Scarica il catalogo</a>
        </div>
    </div>
</section>

<?= snippet('footer') ?>
<?= snippet('foot') ?>