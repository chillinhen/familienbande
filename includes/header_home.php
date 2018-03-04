<body id="home">
    <header id="header">
        <div id="top-bar">
            <div class="row justify-content-center">
                <a class="navbar-brand bg-image" href="index.php"><span>familienbande24.de</span></a>
                <img class="leaderboard" src="https://dummyimage.com/970x90/eee/00ffd5.png." alt="Dummy Leaderboard">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="btn btn-outline-success align-self-center d-none d-sm-block" type="button" data-toggle="modal" data-target="#modalSearchDialog"><i class="fas fa-search"></i><span>Suche</span></button>
            </div>
        </div>
    </header>
    <?php include('includes/top-nav.php'); ?>
    <div class="hero">
        <div class="container-fluid">
            <div class="row align-items-end">
                <div class="claim col-sm-6">
                    <h1>Familienbande24</h1>
                    <h2 class="subline">alles zu Vornamen, Schwangerschaft, Geburt und Kinder</h2>
                    <p><strong>Auf unseren Seiten findest du viele Infos und praktische Helferlein rund um die Themen Schwangerschaft, Geburt, Kinder und Familie.</strong></p>
                </div>
                <div class="cta col-sm-6 col-lg-4 offset-lg-2 d-none d-md-block d-sm-none">
                    <?php include('includes/card-vorname-des-tages.php'); ?>
                </div>
            </div>
        </div>
    </div>
