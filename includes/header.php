<header>
    <div class="sticky-top top-border">
     <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">

            <div class="container-fluid d-flex justify-content-between align-items-end">
                <a class="navbar-brand bg-image" href="#"><span>familienbande24.de</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nanavbar-expand-mdvbarSupportedContent">
                    <?php include('menu.php'); ?>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Suche" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i><span>Suche</span></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row align-items-end hero">
            <div class="claim col-md-6 col-lg-4 offset-lg-2">
                <h1>Familienbande24</h1>
                <h2 class="subline">alles zu Vornamen, Schwangerschaft, Geburt und Kinder</h2>
                <p>Auf unseren Seiten findest du viele Infos und praktische Helferlein rund um die Themen Schwangerschaft, Geburt, Kinder und Familie.</p>
            </div>
            <div class="cta col-md-6 col-lg-4">
                <?php include('includes/card-advanced-search.php'); ?>
            </div>
        </div>
    </div>
</header>