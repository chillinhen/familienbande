<body id="events" class="cat-blue has-hero">
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
                <div class="col-sm-10 offset-md-1">
                    <?php include('includes/form-large-double-search.php');?>
                </div>
            </div>
        </div>
    </div>
