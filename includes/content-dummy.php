<?php include('includes/header.php'); ?>
<main class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 sidebar order-lg-2">
                <aside id="infoblock" class="fixedsticky">
                    <?php include('includes/sidebar.php'); ?>
                </aside>
            </div>
            <div class="col-lg-8 content order-lg-1">
                <div class="row">
                    <div class="cols-sm-12">
                        <?php include('includes/breadcrumb.php');?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><?php include('includes/all-html-tags.php'); ?></div>
                </div>
                <div class="row article-grid">
                    <?php include('includes/article-grid-inkl-paging.php'); ?>
                </div>

                <div class="row">
                    <div class="col-sm-12 ads d-none d-sm-block"><img class="img-fluid" src="img/google-ads-dummy.jpg" alt=""/></div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><?php include('includes/large-tabs.php'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Versch. Listen</h2>
                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Mit Badges für Nummern</h3>
                                <ul class="list-group"><?php include('includes/list-items-width-badges.php'); ?></ul>
                            </div>
                            <div class="col-sm-8">
                                <h3>Mit Icons für Kategorien oder Orte/ Bundesländer</h3>
                                <ul class="list-group"><?php include('includes/list-items-width-icons.php'); ?></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><?php include('includes/tag-cloud.php'); ?></div>
                </div>
                <div class="row"><?php include('includes/small-img-grid.php'); ?></div>
                <div class="row">
                    <div class="col-sm-12">
                        <?php include('includes/large-search-inkl-checkbox.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 offset-sm-1 text-center">
            <h2>Passende Artikel</h2>
            <?php include('includes/items-carousel.php'); ?>
        </div>
    </div>
    <?php include('includes/parallax.php'); ?>
</main>
<?php include('includes/footer.php'); ?>
<?php include('includes/modal-search-dialog.php'); ?>