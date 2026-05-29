<?= snippet('head') ?>
<?php snippet('header', slots: false) ?>

<section class="section --ekotech-theme">
    <div class="container">
        <h2 class="section-heading --span-1-5 --text-heading">Ekotech: rivoluzione ecologica</h2>
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title">La nuova finestra minimale con il nodo totale ridotto a 70mm:
                moderna ed ecosostenibile</h3>
            <p class="section-subtitle --text-subtitle" style="text-align: center;">Ekotech è un prodotto brevettato da
                DGT Srl
            </p>
        </div>
    </div>
</section>

<section class="section --ekotech-theme">
    <div class="container">
        <div class="section-background --span-1-5"
            style="background: url('<?= $page->background()->toFile()->url() ?>') no-repeat center center/cover fixed;">
            <img src="<?= $page->cover()->toFile()->url() ?>" alt="<?= $page->title() ?>">
        </div>
    </div>
</section>

<section class="section --ekotech-theme">
    <div class="container">
        <div class="section-block --span-1-5">
            <h3 class="section-title --text-title">Sezioni a confronto</h3>
            <p class="section-text --text-body" style="text-align: center;">
                Trascina il cursore nel riquadro per vedere il confronto tra Ekotech e il Sistema 16 Alumframe.</p>
        </div>
        <div class="shutter-container --span-1-5">
            <div class="shutter-container-layer">
                <div class="shutter-container-cover">
                    <img src="/content/ekotech/sistema16-sezione-confronto-quote.png">
                </div>
            </div>
            <div class="shutter-container-ui">
                <svg viewBox="0 0 636 636" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M318 58V578M578 318H318H58M578 318L474 214M578 318L474 422M58 318L162 214M58 318L162 422"
                        stroke="#b4dac5" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" />
                    <circle cx="318" cy="318" r="315.5" stroke="#b4dac5" stroke-width="15" />
                </svg>
            </div>
            <div class="shutter-container-layer --element">
                <div class="shutter-container-cover">
                    <img src="/content/ekotech/ekotech-sezione-confronto-quote-2.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section --ekotech-theme">
    <div id="pensare-circolare" class="container">
        <div class="section-col section-col--image section-col--left --span-1-3"
            style="padding: 1rem; background: url('/content/ekotech/1-ekotech-grano-bg.jpg') no-repeat center center/cover fixed;">
            <img src="/content/ekotech/1-ekotech-grano.jpg" alt="Fotografia di un campo di grano">
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <h3 class="section-title --text-title">Pensare circolare</h3>
            <p class="section-subtitle --text-subtitle">Legno, Resysta® e alluminio Alumframe</p>
            <p class="section-text --text-body">Dall'unione di questi tre materiali nasce Ekotech, il nuovo concept di
                serramento ecologico e minimale, realizzato con il telaio a base di buccia di riso.</p>
            <ul class="section-custom-list --text-body">
                <li><svg viewBox="0 0 267 347" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M133.227 345.591V252.682M212.863 305.773L133.227 345.591L53.5903 305.773M133.227 186.318C133.227 151.116 147.211 117.357 172.102 92.4653C196.993 67.5747 230.753 53.5909 265.954 53.5909V119.954C265.954 155.156 251.971 188.916 227.079 213.807C202.189 238.698 168.428 252.682 133.227 252.682L133.227 186.318ZM133.227 252.682C98.026 252.682 64.2655 238.698 39.3749 213.807C14.4837 188.916 0.5 155.156 0.5 119.954V53.5909C35.7014 53.5909 69.4618 67.5747 94.3521 92.4653C119.244 117.357 133.227 151.116 133.227 186.318M64.8215 70.1818C86.772 23.7273 133.227 0.5 133.227 0.5C133.227 0.5 179.681 23.7273 201.63 70.1818" />
                    </svg>
                    Rispetto dell'ambiente</li>
                <li><svg viewBox="0 0 286 366" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M76.2532 355.351H208.753M142.503 302.226V209.258M142.503 209.258L89.5032 156.133M142.503 209.258L195.503 156.133M60.8489 247.441C45.0976 235.107 32.3393 219.357 23.5327 201.371C14.7261 183.386 10.1 163.634 10.002 143.599C9.60453 71.6141 67.5069 11.6991 139.306 10.039C167.131 9.36347 194.462 17.4881 217.42 33.2603C240.378 49.0324 257.799 71.6511 267.211 97.9069C276.621 124.163 277.545 152.722 269.849 179.534C262.153 206.345 246.23 230.047 224.338 247.275C219.508 251.029 215.596 255.834 212.895 261.328C210.195 266.821 208.778 272.86 208.752 278.984V288.945C208.752 292.467 207.357 295.846 204.871 298.336C202.387 300.827 199.016 302.226 195.502 302.226H89.5019C85.988 302.226 82.6172 300.827 80.1328 298.336C77.6485 295.846 76.2519 292.467 76.2519 288.945V278.984C76.2453 272.899 74.8554 266.894 72.1855 261.429C69.5169 255.964 65.64 251.18 60.8489 247.441Z" />
                    </svg>
                    Progettazione consapevole</li>
                <li><svg viewBox="0 0 339 392" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M235.636 10V89.6364M102.909 10V89.6364M169.273 302V381.636M10 89.6364H328.545M49.8181 89.6364V248.909C49.8181 262.99 55.4116 276.494 65.368 286.45C75.3246 296.407 88.8279 302 102.909 302H235.636C249.717 302 263.221 296.407 273.177 286.45C283.134 276.494 288.727 262.99 288.727 248.909V89.6364M175.909 248.909L195.818 195.818H142.727L162.636 142.727" />
                    </svg>
                    Risparmio energetico</li>
                <li><svg viewBox="0 0 392 392" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M195.818 49.8182V10M89.6363 89.6363L63.0908 63.0908M89.6363 302L63.0908 328.545M302 89.6363L328.545 63.0908M302 302L328.545 328.545M49.8182 195.818H10M195.818 341.818V381.636M341.818 195.818H381.636M195.818 288.727C247.131 288.727 288.727 247.13 288.727 195.818C288.727 144.506 247.131 102.909 195.818 102.909C144.506 102.909 102.909 144.506 102.909 195.818C102.909 247.13 144.506 288.727 195.818 288.727Z" />
                    </svg>
                    20% in più di luminosità</li>
            </ul>
            <a class="button button--outline" aria-label="Che cos'è Resysta®?" type="button"
                href="https://www.resysta.com/en/" target="_blank">Che cos'è
                Resysta®?</a>
        </div>
    </div>

    <div id="spazio-luce" class="container">
        <div class="section-col section-col--content section-col--left --span-1-3">
            <h3 class="section-title --text-title">Più spazio alla luce</h3>
            <p class="section-subtitle --text-subtitle">Grazie alla riduzione del nodo totale a 70mm, Ekotech offre alla
                tua casa grandi superfici vetrate e la trasforma in uno spazio più efficiente e stimolante</p>
            <ul class="section-custom-list --text-body">
                <li><svg viewBox="0 0 259 352" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M116.184 49.8181C145.505 49.8181 169.275 73.5877 169.275 102.91C169.275 132.23 145.505 156 116.184 156C86.8634 156 63.0933 132.23 63.0933 102.91C63.0933 73.5877 86.8634 49.8181 116.184 49.8181ZM116.184 49.8181L116.184 10M137.752 151.437L222.366 341.819M10.0024 341.819L94.6159 151.437M248.911 169.273C224.739 216.54 172.925 248.91 116.184 248.91C95.7519 248.939 75.5428 244.665 56.8721 236.367" />
                    </svg>
                    Design moderno e minimale</li>
                <li><svg viewBox="0 0 366 366" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M182.54 76.3599L235.631 129.451M129.449 129.451L182.54 182.542M76.3584 182.542L129.449 235.633M245.023 13.8874L13.8875 245.022C8.70415 250.205 8.70415 258.61 13.8875 263.793L101.299 351.204C106.482 356.388 114.886 356.388 120.069 351.204L351.205 120.07C356.388 114.886 356.388 106.483 351.205 101.299L263.793 13.8874C258.61 8.70418 250.206 8.70418 245.023 13.8874Z" />
                    </svg>
                    Minimo ingombro del nodo</li>
                <li><svg viewBox="0 0 312 312" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M209.091 102.911L10 302.002M49.5031 262.5C-29.9508 130.088 76.048 -2.32426 301.087 10.9153C314.327 236.021 181.915 341.954 49.5031 262.5Z" />
                    </svg>
                    Più luce e meno spreco</li>
            </ul>
        </div>
        <div class="section-col section-col--image section-col--right --span-3-5" style="padding: 1rem; background: url('/content/ekotech/2-ekotech-profilo-render-bg.jpg') no-repeat center
            center/cover fixed;">
            <img src="/content/ekotech/2-ekotech-profilo-render.png" alt="Fotografia del profilo di Ekotech">
        </div>
    </div>
    <div id="posa" class="container">
        <div class="section-col section-col--image section-col--left --span-1-3">
            <img src="/content/ekotech/3-ekotech-posa.png" alt="Fotografia del profilo di Ekotech">
        </div>
        <div class="section-col section-col--content section-col--right --span-3-5">
            <h3 class="section-title --text-title">Sistema di posa</h3>
            <p class="section-text --text-body">La posa in opera è prevista con anta in legno a filo muro interno,
                grazie all'utilizzo di specifici profili di posa in alluminio progettati sia per pareti in
                cartongesso
                che per intonaco.</p>
            <p class="section-text --text-body">L'alluminio esterno conferisce un'ulteriore protezione contro gli
                agenti
                atmosferici a un materiale già resistente a umidità, acqua, raggi UV, funghi e parassiti.</p>
        </div>
    </div>
    <div id="sostenibile" class="container">
        <div class="section-col section-col--content section-col--left --span-1-3">
            <h3 class="section-title --text-title">Scegliere sostenibile</h3>
            <p class="section-text --text-body">Ekotech è altamente personalizzabile, sia nella scelta del profilo
                anta che nelle finiture, grazie alla gamma di colori pensati per adattarsi al meglio a ogni stile di
                design.
            </p>
            <ul class="section-custom-list --text-body">
                <li>
                    <div class="color-swatch" style="background-color: #CDA074"></div>
                    Naturale
                </li>
                <li>
                    <div class="color-swatch" style="background-color: #828385"></div>
                    Grigio antracite
                </li>
                <li>
                    <div class="color-swatch" style="background-color: #D6D3CE"></div>
                    Grigio chiaro
                </li>
                <li>
                    <div class="color-swatch" style="background-color: #FFFFFF"></div>
                    Bianco
                </li>
            </ul>
        </div>
        <div class="section-col section-col--image section-col--right --span-3-5" style="padding: 1rem; background: url('/content/ekotech/4-ekotech-colori-bg.jpg') no-repeat center
            center/cover fixed;">
            <img src="/content/ekotech/4-ekotech-colori.png" alt="Fotografia di campioni di colore di Ekotech">
        </div>
    </div>
    </div>
</section>

<section id="brochure" class="section --ekotech-theme">
    <div class="container">
        <div class="banner --span-1-5">
            <h3 class="banner-title --text-title">Scarica la brochure Ekotech</h3>
            <a class="button button--outline" aria-label="Scarica la brochure" type="button"
                href="/content/ekotech/DGT-Ekotech-brochure.pdf" target="_blank">Scarica la brochure</a>
        </div>
    </div>
</section>

<section id="catalogo" class="section --ekotech-theme">
    <div class="container">
        <div class="banner --span-1-5">
            <h3 class="banner-title --text-title">Scarica il catalogo tecnico Ekotech
            </h3>
            <a class="button button--outline" aria-label="Scarica il catalogo" type="button"
                href="/content/ekotech/DGT-Ekotech-catalogo-01-2025.pdf" target="_blank">Scarica il catalogo</a>
        </div>
    </div>
</section>

<section class="section --ekotech-theme" style="border-top: 1px solid var(--secondary-color); padding-bottom: 0;">
    <div class="container">
        <div class="--span-1-5">
            <svg id="identity" viewBox="0 0 4294 884" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M4121.98 539.19V808.197C4121.98 861.796 4075.11 852.877 4024.87 855.064V870.715H4293.92V855.064C4232.48 852.877 4198.99 861.796 4198.99 808.197V484.497C4198.99 376.205 4127.54 300.307 4017.04 300.307C3956.78 300.307 3862.95 368.379 3804.88 407.506V10.0131L3613.93 78.085V94.8295C3683.19 73.6254 3727.8 47.9617 3727.8 145.063V812.656C3727.8 861.796 3680.92 852.877 3631.77 855.064V870.715H3900.82V855.064C3839.39 852.877 3804.8 861.796 3804.8 808.197V437.545C3837.2 412.975 3910.84 352.729 3981.19 352.729C4082.77 352.729 4121.9 419.707 4121.9 539.19M3540.21 379.57C3469.86 323.783 3406.23 299.214 3330.32 299.214C3148.38 299.214 3054.54 439.901 3054.54 602.803C3054.54 765.704 3172.87 883 3318.04 883C3442 883 3521.19 802.643 3559.23 710.001L3542.48 699.988C3498.97 773.698 3448.73 825.025 3349.34 825.025C3225.38 825.025 3131.63 721.192 3131.63 547.1C3131.63 413.144 3205.35 328.327 3320.31 328.327C3405.14 328.327 3482.23 383.02 3485.59 532.627H3501.25L3540.29 379.739L3540.21 379.57ZM2524.19 497.876C2537.57 414.153 2586.72 329.337 2687.2 329.337C2774.3 329.337 2836.83 395.221 2849.12 497.876H2524.19ZM2444.91 591.612C2444.91 769.07 2557.68 883 2716.23 883C2830.1 883 2913.83 818.294 2966.35 699.904L2946.23 692.079C2889.26 801.465 2801.06 822.669 2748.63 822.669C2605.74 822.669 2519.73 705.458 2519.73 546.932C2519.73 538.012 2519.73 527.915 2520.82 518.996H2942.87C2941.77 395.053 2843.48 300.223 2708.41 300.223C2532.02 300.223 2444.91 437.545 2444.91 591.612ZM2380.2 782.533L2364.54 769.154C2324.32 813.834 2295.28 832.766 2248.41 832.766C2205.99 832.766 2163.58 798.184 2163.58 726.746V336.068H2341.06V312.592H2163.58V167.445H2142.37C2132.36 238.883 2094.4 298.036 2006.21 312.592V336.068H2086.58V753.588C2086.58 841.77 2155.75 883.084 2218.28 883.084C2294.19 883.084 2337.7 836.216 2380.2 782.617M1456.83 591.696C1456.83 444.361 1538.3 331.609 1649.97 331.609C1761.65 331.609 1836.46 444.361 1836.46 591.696C1836.46 739.031 1760.55 851.783 1649.97 851.783C1539.39 851.783 1456.83 734.571 1456.83 591.696ZM1649.97 883.084C1814.08 883.084 1925.75 745.762 1925.75 591.696C1925.75 437.629 1814.08 300.307 1649.97 300.307C1485.87 300.307 1367.54 433.17 1367.54 591.696C1367.54 750.222 1485.87 883.084 1649.97 883.084ZM1243.58 806.093L1049.35 489.041L1149.83 413.144C1248.12 338.34 1273.79 328.327 1330.68 328.327V312.677H1096.22V328.327H1140.91C1201.17 328.327 1194.52 350.625 1156.56 378.561L905.355 564.938V0L726.691 56.965V75.9814C801.506 52.5054 828.268 38.0328 828.268 115.024V797.09C828.268 846.229 815.981 852.877 731.152 854.055V870.799H1000.2V854.055C916.464 852.961 905.271 846.229 905.271 797.09V599.521L986.735 538.097L1180.97 870.799H1357.36V855.148C1294.83 849.595 1266.89 843.957 1243.5 806.009M0.00012207 855.064V870.715H623.01L670.98 622.913H649.772C624.105 731.205 608.451 838.32 475.568 838.32H202.06V487.779H447.713C491.221 487.779 524.716 525.727 526.988 613.91H544.829V332.619H526.988C524.716 423.073 491.306 456.562 447.713 456.562H202.06V120.577H457.727C547.017 120.577 597.259 164.079 623.01 337.162H644.218L608.536 89.3602H0.00012207V105.011C83.7358 108.377 113.864 102.823 113.864 150.785V809.375C113.864 857.336 83.7358 851.783 0.00012207 855.148"
                    fill="#C5E5D6" />
            </svg>

        </div>
    </div>
</section>

<?= snippet('footer') ?>
<?= snippet('foot') ?>