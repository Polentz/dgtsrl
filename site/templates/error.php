<?= snippet('head') ?>

<section class="--dark-theme"
    style="height: var(--doc-height); display: flex; flex-direction: column; align-items: center; justify-content:center">
    <div class="container">
        <h2 class="section-heading --span-1-5 --text-heading">OPS! Errore
            404</h2>
        <h3 class=" section-title --text-title --span-1-5" style="text-align: center">
            Questa pagina non esiste <br>
            A breve verrai reindirizzato alla nostra Homepage
        </h3>
    </div>
</section>
<script>
    setTimeout(() => {
        window.location.href = '/';
    }, 4000);
</script>
<?= snippet('foot') ?>