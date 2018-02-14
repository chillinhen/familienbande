<?php include('includes/header.php'); ?>
<div class="container-fluid">
    <div class="row">
        <?php include('includes/werbung.php'); ?>
    </div>
</div>
<main class="container-fluid">
    <section class="featured-articles">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Die neuesten Artikel</h2>
            </div>
            <div class="col-md-4"><?php include('includes/card.php'); ?></div>
            <div class="col-md-4"><?php include('includes/card.php'); ?></div>
            <div class="col-md-4"><?php include('includes/card.php'); ?></div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <?php include('includes/werbung.php'); ?>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?php include('includes/big-card.php'); ?>
            </div>
            <div class="col-md-4">
                
                <?php include('includes/card-favorites.php'); ?>
                <?php include('includes/card-text.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 intro text-center">
                <h2>Unsere Themen</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>

                <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
            </div>
            <div class="col-md-3"><?php include('includes/block.php'); ?></div>
            <div class="col-md-3"><?php include('includes/block.php'); ?></div>
            <div class="col-md-3"><?php include('includes/block.php'); ?></div>
            <div class="col-md-3"><?php include('includes/block.php'); ?></div>
        </div>
    </section>

</main>
<footer class="container-fluid">
    <?php include('includes/footer.php'); ?>
</footer>
<div class="social-media-links">
    <ul class="list-unstyled">
        <li><a href="#" class="">Follow on Twitter</a></li>
        <li><a href="#" class="">Like on Facebook</a></li>
        <li><a href="#" class="">Email me</a></li>
    </ul>
</div>
