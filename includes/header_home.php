<header class="home">
    <div id="top-nav" class="fixedsticky">
        <nav class="navbar navbar-light navbar-expand-md">

            <div class="container-fluid align-items-stretch">
                <a class="navbar-brand bg-image" href="#"><span>familienbande24.de</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between align-items-stretch" id="navbarSupportedContent">
                    <?php include('menu.php'); ?>
                    <button class="btn btn-outline-success align-self-center" type="button" data-toggle="modal" data-target="#modalSearchDialog"><i class="fas fa-search"></i><span>Suche</span></button>
                </div>
            </div>
        </nav>

    </div>
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center ads d-none d-lg-block d-xl-none">
                    <img class="leaderboard" src="https://dummyimage.com/970x90/eee/00ffd5.png." alt="Dummy Leaderboard">
                </div>
            </div>
            <div class="row align-items-end">
                <div class="claim col-sm-6 col-lg-4 offset-lg-2">
                <h1>Familienbande24</h1>
                <h2 class="subline">alles zu Vornamen, Schwangerschaft, Geburt und Kinder</h2>
                <p><strong>Auf unseren Seiten findest du viele Infos und praktische Helferlein rund um die Themen Schwangerschaft, Geburt, Kinder und Familie.</strong></p>
            </div>
            <div class="cta col-sm-6 col-lg-4 d-none d-md-block d-sm-none">
                <?php include('includes/card-vorname-des-tages.php'); ?>
            </div>
            </div>
        </div>
</header>