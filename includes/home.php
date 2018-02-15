<?php include('includes/header.php'); ?>
<main class="container-fluid">
    <section class="featured">
                <!-- Themen -->
        <div class="row">
            <div class="col-md-12 intro text-center">
                <h2>Unsere Themen</h2>
                <p class="pb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.<br/>
        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
            </div>
            <div class="col-md-3 cat-event"><?php include('includes/block-event.php'); ?></div>
            <div class="col-md-3 cat-name"><?php include('includes/block-name.php'); ?></div>
            <div class="col-md-3 cat-knowledge"><?php include('includes/block-knowledge.php'); ?></div>
            <div class="col-md-3 cat-slogan"><?php include('includes/block-slogans.php'); ?></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Die neuesten Artikel</h2>
            </div>
            <div class="col-md-4 cat-name"><?php include('includes/card.php'); ?></div>
            <div class="col-md-4 cat-knowledge"><?php include('includes/card.php'); ?></div>
            <div class="col-md-4 cat-slogan"><?php include('includes/card.php'); ?></div>
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
            </div>
            <div class="col-md-4 sidebar">
                <?php include('includes/card-list.php'); ?>
                <?php include('includes/card-text.php'); ?>
            </div>
        </div>
    </section>

</main>
    <section class="ads">
            <div class="row">
        <?php include('includes/werbung.php'); ?>
            </div>
    </section>

    <?php include('includes/footer.php'); ?>
<?php include('includes/social-media.php');?>
