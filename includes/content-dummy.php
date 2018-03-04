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
                <?php include('includes/row-text.php'); ?>
                <?php include('includes/row-article-grid.php'); ?>
                <?php include('includes/row-google-ads.php'); ?> 
                <?php include('includes/row-large-tabs.php'); ?> 
            </div>
        </div>
    </div>
    <?php include('includes/parallax-events.php'); ?>
</main>
<?php include('includes/footer.php'); ?>
<?php include('includes/modal-search-dialog.php'); ?>