<ul class="navbar-nav">
    <li class="nav-item home d-none d-lg-block">
        <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item cat-blue dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownEvents" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wohin?</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" tabindex="-1" href="template-events.php">Einstiegsseite "Wohin"</a></li>
            <?php include('includes/navigation/dropdown.php'); ?>
        </ul>
    </li>
    <li class="nav-item cat-yellow dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNames" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vornamen</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" tabindex="-1" href="template-names.php">Einstiegsseite "Vornamen"</a></li>
            <?php include('includes/navigation/dropdown.php'); ?>
        </ul>
        
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