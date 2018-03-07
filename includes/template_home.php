<main class="container-fluid">
    <section class="featured">
        <!-- Themen -->
        <?php include('includes/topics-multicolored.php');?>

        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Die neuesten Artikel</h2>
            </div>
            <div class="col-md-4 cat-yellow mb-5"><?php include('includes/card_with-thumbnail.php'); ?></div>
            <div class="col-md-4 cat-pink mb-5"><?php include('includes/card_with-thumbnail.php'); ?></div>
            <div class="col-md-4 cat-green"><?php include('includes/card_with-thumbnail.php'); ?></div>
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
                <?php include('includes/big-card_with-thumbnail.php'); ?>
                <div class="ads d-none d-sm-block">
                    <img class="img-fluid" src="img/google-ads.jpg" alt=""/>
                </div>
            </div>
            <div class="col-md-4 sidebar">
                <?php include('includes/card-list.php'); ?>
                <div class="cat-yellow mb-5"><?php include('includes/card-text.php'); ?></div>
                <div class="cat-yellow mb-5"><?php include('includes/card-text.php'); ?></div>
                <div class="cat-green mb-5"><?php include('includes/card-text.php'); ?></div>
            </div>
        </div>
    </section>

</main>

<?php include('includes/footer.php'); ?>
