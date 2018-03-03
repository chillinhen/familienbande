<body id="names">
    <header class="other">
        <?php include('includes/top-nav.php'); ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center ads d-none d-lg-block">
                    <img class="leaderboard" src="https://dummyimage.com/970x90/eee/00ffd5.png." alt="Dummy Leaderboard">
                </div>
            </div>
        </div>
        <?php include('includes/parallax-names.php'); ?>
    </header>
    <main class="main-content cat-yellow">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 sidebar order-lg-2">
                <aside id="infoblock">
                    <h5 id="btnNames" class="collapsed d-block d-sm-block d-lg-none" data-toggle="collapse" data-target="#collapseNames" aria-expanded="false" aria-controls="collapseListe">Vornamen suchen</h5>
                    <div id="collapseNames" class="collapse mb-sm-5" aria-labelledby="btnListe" data-parent="#infoblock">
                        <?php include('includes/card-single-search.php'); ?>
                    </div>
                    <?php include('includes/sidebar.php'); ?>
                </aside>
            </div>
            <div class="col-lg-8 content order-lg-1">
                <div class="intro col-sm-12 my-5">
                    <h1>Lorem ipsum dolor sit amet Vornamen</h1>
                    <h2 class="subline">Consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>

                    <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                </div>
                <div class="row">
                    <div class="col-sm-6 my-5"><?php include('includes/card.php'); ?></div>
                    <div class="col-sm-6 my-5"><?php include('includes/card.php'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-6 my-5"><?php include('includes/card.php'); ?></div>
                    <div class="col-sm-6 my-5"><?php include('includes/card.php'); ?></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">


                    </div>
                </div>
                <div class ="row">
                    <div class="ads d-none d-sm-block">
                        <img class="img-fluid" src="img/google-ads.jpg" alt=""/>
                    </div>
                </div>
            </div>
        </div>
            </div>
    </main>
    <?php include('includes/footer.php'); ?>
    <?php include('includes/modal-search-dialog.php'); ?>