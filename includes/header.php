<header>
    <div class="top-border">
        <div class="blue">...</div>
        <div class="yellow">...</div>
        <div class="pink">...</div>
        <div class="green">...</div>
    </div>
    <nav class="navbar navbar-light navbar-expand-md bg-light navigation-clean-search">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span>familienbande24.de</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php include('menu.php'); ?>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid hero">
        <div class="row">
            <div class="claim col-md-6 col-lg-4 offset-lg-2">
                <h1>Familienbande24<br>
                    <span class="subline">alles zu Vornamen, Schwangerschaft, Geburt und Kinder</h1>
                <p>Auf unseren Seiten findest du viele Infos und praktische Helferlein rund um die Themen Schwangerschaft, Geburt, Kinder und Familie.</p>
            </div>
            <div class="cta col-md-6 col-lg-4">
                <?php include('includes/card-advanced-search.php'); ?>
            </div>
        </div>
    </div>
</header>