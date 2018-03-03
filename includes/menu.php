<ul class="navbar-nav">
    <li class="nav-item cat-home dropdown home">
        <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item cat-blue dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownEvents" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wohin?</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" tabindex="-1" href="template-events.php">Haupttemplate "Wohin"</a></li>
            <?php include('dropdown-menu.php'); ?>
        </ul>
    </li>
    <li class="nav-item cat-yellow dropdown ">
        <a class="nav-link dropdown-toggle" href="template.php" id="navbarDropdownNames" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vornamen</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" tabindex="-1" href="template-names.php">Haupttemplate "Vornamen"</a></li>
            <?php include('dropdown-menu.php'); ?>
        </ul>
        
    </li>
    <li class="nav-item cat-pink dropdown ">
        <a class="nav-link dropdown-toggle" id="navbarDropdownKnowledge" href="template.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wissen</a>
        <ul class="dropdown-menu"><?php include('dropdown-menu.php'); ?></ul>
        
    </li>
    <li class="nav-item cat-green dropdown ">
        <a class="nav-link dropdown-toggle" id="navbarDropdownSlogans" href="template.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sprüche</a>
        <ul class="dropdown-menu"><?php include('dropdown-menu.php'); ?></ul>
    </li>
</ul>