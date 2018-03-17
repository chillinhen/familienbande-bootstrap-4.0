<ul class="navbar-nav">
    <li class="nav-item home d-none d-lg-block">
        <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item cat-blue mega-dropdown">
        <a href="#" class=" nav-link dropdown-toggle" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Wohin <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
        <?php include('includes/navigation/mega-dropdown.php'); ?>

    </li>
    <li class="nav-item cat-yellow mega-dropdown">
        <a href="#" class=" nav-link dropdown-toggle" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">Vornamen <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
        <?php include('includes/navigation/mega-dropdown.php'); ?>

    </li>
    <li class="nav-item cat-pink dropdown ">
        <a class="nav-link dropdown-toggle" id="navbarDropdownKnowledge" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wissen</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" tabindex="-1" href="template-knowledge.php" >Einstiegsseite "Wissen"</a></li>
            <li><a class="dropdown-item" tabindex="-1" href="template-search-site.php" >Hebammensuche</a></li>
            <?php include('includes/navigation/dropdown.php'); ?>
        </ul>

    </li>
    <li class="nav-item cat-green dropdown ">
        <a class="nav-link dropdown-toggle" id="navbarDropdownSlogans" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sprüche</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" tabindex="-1" href="template-slogans.php" >Einstiegsseite "Sprüche"</a></li>
            <?php include('includes/navigation/dropdown.php'); ?>
        </ul>
    </li>
    <li class="nav-item search">
        <a class="nav-link" data-toggle="modal" data-target="#modalSearchDialog">Suche <i class="fas fa-search"></i></a>
    </li>
</ul>