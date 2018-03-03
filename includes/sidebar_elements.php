<aside id="infoblock">
    <h5 id="btnSuche" class="cat-blue collapsed d-block d-sm-block d-lg-none" data-toggle="collapse" data-target="#collapseSuche" aria-expanded="false" aria-controls="collapseSuche">Vornamen- und Hebammensuche</h5>
                    <div id="collapseSuche" class="collapse mb-sm-5" aria-labelledby="btnSuche" data-parent="#infoblock">
                        <?php include('includes/card-advanced-search.php'); ?>
                    </div>
    <h5 id="btnEvents" class="collapsed d-block d-sm-block d-lg-none" data-toggle="collapse" data-target="#collapseEvents" aria-expanded="false" aria-controls="collapseListe">Erlebnisse nach Orte/ Rubriken suchen</h5>
    <div id="collapseEvents" class="collapse mb-sm-5" aria-labelledby="btnListe" data-parent="#infoblock">
        <?php include('includes/card-events.php'); ?>
    </div>
    <?php include('includes/sidebar.php');?>
    </div>
</aside>
