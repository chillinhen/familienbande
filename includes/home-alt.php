<?php include('includes/header.php'); ?>
<main class="container-fluid">
    <section class="featured">
        <!-- Themen -->
        <div class="row">
            <div class="col-md-12 intro text-center">
                <h2>Lorem Ipsum SEO-Headline</h2>
            </div>
            <div class="col-md-8 offset-md-2 text-center">
                <p>Hier ist Platz für SEO-Text: Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>

                <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat.</p>
            </div>
        </div>
        <div class="row ads d-none d-sm-block">
            <div class="col-md-12 text-center">
                <img src="img/google-ads-landscape.jpg" alt=""/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 intro text-center">
                <h2>Unsere Themen</h2>
                <p class="pb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.<br/>
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
            </div>
            <div class="col-md-3 cat-yellow"><?php include('includes/block-event.php'); ?></div>
            <div class="col-md-3 cat-yellow"><?php include('includes/block-name.php'); ?></div>
            <div class="col-md-3 cat-pink"><?php include('includes/block-knowledge.php'); ?></div>
            <div class="col-md-3 cat-green"><?php include('includes/block-slogans.php'); ?></div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Die neuesten Artikel</h2>
            </div>
            <div class="col-md-4 cat-yellow"><?php include('includes/card-01.php'); ?></div>
            <div class="col-md-4 cat-pink"><?php include('includes/card-02.php'); ?></div>
            <div class="col-md-4 cat-yellow"><?php include('includes/card-03.php'); ?></div>
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
                <div class="cat-yellow mb-5"><?php include('includes/card-text.php'); ?></div>
                <div class="cat-yellow mb-5"><?php include('includes/card-text.php'); ?></div>
                <div class="cat-green mb-5"><?php include('includes/card-text.php'); ?></div>
            </div>
        </div>
    </section>

</main>

<?php include('includes/footer.php'); ?>
<?php include('includes/social-media.php'); ?>
