<?php include('includes/header.php'); ?>
<main class="container-fluid">
    <section class="featured">
        <!-- Themen -->
       <div class="row topics">
            <div class="col-md-3 cat-event"><?php include('includes/block-event.php'); ?></div>
            <div class="col-md-3 cat-name"><?php include('includes/block-name.php'); ?></div>
            <div class="col-md-3 cat-knowledge"><?php include('includes/block-knowledge.php'); ?></div>
            <div class="col-md-3 cat-slogan"><?php include('includes/block-slogans.php'); ?></div>
        </div>
                <div class="row">
            <div class="col-md-12 text-center">
                <h2>Die neuesten Artikel</h2>
            </div>
            <div class="col-md-3 cat-name"><?php include('includes/card.php'); ?></div>
            <div class="col-md-3 cat-knowledge"><?php include('includes/card.php'); ?></div>
            <div class="col-md-3 cat-event"><?php include('includes/card.php'); ?></div>
            <div class="col-md-3 cat-slogan"><?php include('includes/card.php'); ?></div>
        </div>
        <div class="row ads d-none d-sm-block">
            <div class="col-md-12 text-center">
                <img src="img/google-ads-landscape.jpg" alt=""/>
            </div>
        </div>
    </section>
    <section class="content">
        <!--current topic -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Lorem Ipsum sit dolor</h2>
            </div>
            <div class="col-md-8 content">
                <?php include('includes/big-card.php'); ?>
                <div class="ads d-none d-sm-block">
                    <img class="img-fluid" src="img/google-ads.jpg" alt=""/>
                </div>
            </div>
            <div class="col-md-4 sidebar">
                <?php include('includes/card-list.php'); ?>
                <div class="cat-name mb-5"><?php include('includes/card-text.php'); ?></div>
                <div class="cat-event mb-5"><?php include('includes/card-text.php'); ?></div>
                <div class="cat-slogan mb-5"><?php include('includes/card-text.php'); ?></div>
            </div>
        </div>
    </section>

</main>

<?php include('includes/footer.php'); ?>
<?php include('includes/modal-search-dialog.php'); ?>
