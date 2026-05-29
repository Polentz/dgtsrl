<?= snippet('head') ?>
<?php snippet('header', slots: true) ?>
<?php slot('home') ?>
<?php endslot() ?>
<?php endsnippet() ?>

<section class="section section-hero --dark-theme"
    style="--theme-cover: url('<?= $page->image('dgt-hero.jpg')?->url() ?>')">
    <div class="container">
        <h2 class="hero-text --span-1-5 --text-heading">
            <?= $site->title() ?>:<br>Il mondo intorno<br>alla tua finestra
        </h2>
    </div>
</section>

<section class="section --dark-theme">
    <div class="container">
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title">
                DGT Srl lavora al fianco di falegnami e serramentisti con idee e soluzioni intorno alla tua finestra in
                legno e legno-alluminio
            </h3>
        </div>
        <div class="section-block --span-2-4">
            <p class="section-text  --text-body">Progettiamo e produciamo sistemi completi per la lavorazione
                del serramento: dalla progettazione di sistemi legno-alluminio, alla produzione di guarnizioni, fino
                alla fornitura di soglie, gocciolatoi e accessori tecnici di qualità.</p>
        </div>
    </div>
</section>

<section class="section --dark-theme">
    <div id="ekotech" class="container">
        <div class="section-col section-col--image section-col--left --span-1-3">
            <img src="<?= $page->image('ekotech-colori.png')?->resize(1200, null)->url() ?>" loading="lazy"
                alt="Profili Ekotech in diverse colorazioni">
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <h3 class="section-title --text-title">Ekotech: più spazio alla luce</h3>
            <p class="section-subtitle --text-subtitle">La nuova finestra minimale con il nodo totale ridotto a 70 mm:
                moderna ed ecosostenibile. Ekotech è un prodotto brevettato da DGT srl</p>
            <p class="section-text --text-body">Legno, Resysta® e alluminio Alumframe:
                dall'unione di questi tre materiali nasce Ekotech, il nuovo concept di serramento ecologico e minimale,
                realizzato con il telaio a base di buccia di riso.</p>
            <a class="button button--outline" aria-label="Scopri Ekotech" type="button"
                href="<?= page('ekotech')?->url() ?>">Scopri Ekotech</a>
        </div>
    </div>
    <div id="legno-alluminio" class="container">
        <div class="section-col section-col--content section-col--left --span-1-3">
            <h3 class="section-title --text-title">Alumframe: il calore del legno e la protezione dell'alluminio
            </h3>
            <p class="section-subtitle --text-subtitle">Alumfast, Easy Slim, Grace, Canvas, Bridge, Orizon e Luce
                sono i sistemi legno-alluminio della famiglia Alumframe. Linee moderne e un sistema di montaggio rapido
                senza rischi
            </p>
            <p class="section-text --text-body">Dal 2016, DGT Srl è anche Alumframe, una linea di profili in
                legno-alluminio progettati per portare uno stile contemporaneo e di design all'interno della
                tradizione
                degli infissi e dei serramenti in legno.</p>
            <a class="button button--outline" aria-label="Scopri il legno-alluminio" type="button"
                href="<?= page('alumframe')?->url() ?>">Scopri il legno-alluminio</a>
        </div>
        <div class="section-col section-col--image section-col--right --span-3-5">
            <img src="<?= $page->image('graphics-alumframe.png')?->resize(1200, null)->url() ?>" loading="lazy"
                alt="Profilo Alumframe legno-alluminio">
        </div>
    </div>
    <div id="accessori" class="container">
        <div class="section-col section-col--image section-col--left --span-1-3">
            <img src="<?= $page->image('graphics-accessori.png')?->resize(1200, null)->url() ?>" loading="lazy"
                alt="Accessori per finestre, guarnizioni, soglie e gocciolatoi">
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <h3 class="section-title --text-title">Accessori per finestre sicure e certificate</h3>
            <p class="section-subtitle --text-subtitle">Guarnizioni, soglie e gocciolatoi assicurano alla tua
                finestra durevolezza, alte prestazioni di tenuta, isolamento e sostenibilità</p>
            <p class="section-text --text-body">Gli accessori DGT Srl rientrano nel programma Cascading Freud, per
                finestre e porte conformi alla marcatura CE. Sono prodotti testati e rispondenti ad alti standard
                qualitativi e di sicurezza, con l'ulteriore garanzia del Made in Italy.</p>
            <a class="button button--outline" aria-label="Scopri gli accessori" type="button"
                href="<?= page('accessori')?->url() ?>">Scopri
                gli accessori</a>
        </div>
    </div>
</section>

<section id="servizi" class="section --light-theme">
    <div class="container">
        <h2 class="section-heading --text-heading --span-1-5">Tecnologia in scatola <br>e servizi su misura</h2>
        <img class="--span-1" src="<?= $page->image('graphics-ufficio tecnico.png')?->resize(1200, null)->url() ?>"
            loading="lazy" alt="Simbolo ufficio tecnico">
        <img class="--span-1" src="<?= $page->image('graphics-rete.png')?->resize(1200, null)->url() ?>" loading="lazy"
            alt="Simbolo rete commerciale">
        <img class="--span-1" src="<?= $page->image('graphics-spedizioni.png')?->resize(1200, null)->url() ?>"
            loading="lazy" alt="Simbolo spedizioni">
        <img class="--span-1" src="<?= $page->image('graphics-certificazioni.png')?->resize(1200, null)->url() ?>"
            loading="lazy" alt="Simbolo certificazioni">
        <div class="section-block --span-1-3">
            <p class="section-subtitle --text-subtitle">Ufficio tecnico</p>
            <p class="section-text --text-body">Accompagnamo i nostri clienti nella scelta delle soluzioni
                migliori
                per
                risolvere problematiche molto diverse tra loro. Mettiamo a disposizione le nostre competenze
                tecniche nelle fasi di sviluppo, progettazione e post-vendita dei nostri prodotti e progetti.
            </p>
        </div>
        <div class="section-block --span-3-5">
            <p class="section-subtitle --text-subtitle">Spedizioni sicure</p>
            <p class="section-text --text-body">Nessuno ha tempo da perdere! Spedizioni sicure e tracciate,
                efficienza
                nell'organizzazione e nella gestione degli ordini, imballi resistenti a “prova d'urto”: sono
                questi gli ingredienti che ci hanno permesso di spedire ai nostri clienti in Europa e nel mondo.
            </p>
        </div>
        <div class="section-block --span-1-3">
            <p class="section-subtitle --text-subtitle">Rete commerciale</p>
            <p class="section-text --text-body">Ci affidiamo a una squadra di agenti esperti sia in campo
                tecnico
                che
                commerciale, dislocata su territorio nazionale. Un network di persone preparate per stabilire
                contatti diretti tra noi e i nostri clienti. Contattaci per conoscere l'agente più vicino a te.
            </p>
        </div>
        <div class="section-block --span-3-5">
            <p class="section-subtitle --text-subtitle">Certificazioni</p>
            <p class="section-text --text-body">Innovazione e sicurezza sono sinonimi di consapevolezza e
                responsabilità. Per questo motivo vogliamo che le tue finestre durino nel tempo e proponiamo
                prodotti affidabili e testati, conformi alla marcatura CE in linea con le direttive europee in
                materia.</p>
        </div>
        <img class="section-cover --span-1-5"
            src="<?= $page->image('graphics-boxes.png')?->resize(1200, null)->url() ?>" loading="lazy"
            alt="Disegno vettoriale di alcune scatole da spedizione">
    </div>
    </div>
</section>

<section id="azienda" class="section --light-theme">
    <div class="container">
        <h2 class="section-heading --text-heading --span-1-5">la nostra azienda</h2>
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title ">
                Pensare oltre, guardare lontano, con in mano i giusti strumenti per innovarsi continuamente.
            </h3>
        </div>
        <div class="section-block --span-2-4">
            <p class="section-text --text-body">Giovane e dinamica, ma radicata nella sua storia, DGT Srl può
                contare su una squadra di veri professionisti del settore. L'esperienza e la profonda conoscenza
                del mondo degli infissi e dei serramenti guidano l'azienda verso soluzioni al passo con i tempi, con
                lo sguardo orientato al futuro e alla crescita.</p>
            <p class="section-text --text-body">DGT Srl è prima di tutto una famiglia fatta di persone con
                competenze diverse e specializzate, unite sotto lo stesso tetto per far crescere nuove idee, con
                uno sguardo a 360 gradi intorno alla tua finestra.</p>
        </div>
        <video class="section-cover --span-1-5" autoplay muted loop>
            <source src="<?= $page->file('dgt-teaser.mp4')?->url() ?>" type="video/mp4">
            Il tuo browser non supporta il tag video.
        </video>
    </div>
</section>

<?= snippet('footer') ?>
<?= snippet('foot') ?>