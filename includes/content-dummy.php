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
                        <form class="d-flex justify-content-between">
                            <!-- https://bootsnipp.com/snippets/featured/simple-css-custom-checkboxes-and-radios -->
                            <div>
                                <h3>1. Customs Checkboxes</h3>
                                <?php include('includes/form-checkboxes.php'); ?>
                            </div>
                            <div>
                                <h3>2. Customs Radios</h3>
                                <?php include('includes/form-radios.php'); ?>
                            </div>
                            <div>
                                <h3>3. Customs Toggles</h3>
                                <?php include('includes/form-toggles.php'); ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/parallax-events.php'); ?>
</main>
<?php include('includes/footer.php'); ?>
<?php include('includes/modal-search-dialog.php'); ?>