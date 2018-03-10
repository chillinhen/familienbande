<?php include('includes/template/head.php'); ?>
<body id="knowledge" class="cat-pink">
    <?php include('includes/template/header.php'); ?>

    <main class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 sidebar order-lg-2">
                    <aside id="infoblock" class="fixedsticky">
                        <?php include('includes/template/sidebar.php'); ?>
                    </aside>
                </div>
                <div class="col-lg-8 content order-lg-1"> 
                    <?php include('includes/content/content-search-site.php'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <button type="button" class="btn btn-secondary">
                        <a href="template-modules/profile.php">Bsp. Hebammenprofil</a>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('includes/template/footer.php');
    include('includes/modal-overlays/modal-search-dialog.php');
    ?>