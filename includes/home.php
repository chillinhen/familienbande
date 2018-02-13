<?php include('includes/header.php'); ?>
<main class="container-fluid">
    <div class="featured-articles">
        <div class="intro text-center">
            <h1>Familienbande24 - alles zu Vornamen, Schwangerschaft, Geburt und Kinder</h1>
            <p>Auf unseren Seiten findest du viele Infos und praktische Helferlein rund um die Themen Schwangerschaft, Geburt, Kinder und Familie.</p>
        </div>
        <div class="row">
            <?php include('includes/werbung.php'); ?>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Die neuesten Artikel</h2>
            </div>
            <div class="col-md-4"><?php include('includes/card.php'); ?></div>
            <div class="col-md-4"><?php include('includes/card.php'); ?></div>
            <div class="col-md-4"><?php include('includes/card.php'); ?></div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <?php include('includes/werbung.php'); ?>
        </div>
        <div class="row">
            <div class="col-md-8">
                <?php include('includes/big-card.php'); ?>
            </div>
            <div class="col-md-4">
                <?php include('includes/card-advanced-search.php'); ?>
                <?php include('includes/card-favorites.php'); ?>
                <?php include('includes/card-text.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 intro text-center">
                <h2>Unsere Themen</h2>
                <p>Auf unseren Seiten findest du viele Infos und praktische Helferlein rund um die Themen Schwangerschaft, Geburt, Kinder und Familie.</p>
            </div>
            <div class="col-md-3"><?php include('includes/block.php'); ?></div>
            <div class="col-md-3"><?php include('includes/block.php'); ?></div>
            <div class="col-md-3"><?php include('includes/block.php'); ?></div>
            <div class="col-md-3"><?php include('includes/block.php'); ?></div>
        </div>
    </div>

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
