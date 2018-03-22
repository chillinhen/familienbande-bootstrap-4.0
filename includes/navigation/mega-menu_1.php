<ul class="nav nav-tabs" id="megaMenu" role="tablist">
    <li class="dropdown nav-item">
        <a class="nav-link" id="tab-home">
            Home
        </a>
    </li>
    <li class="dropdown nav-item cat-blue">
        <a class="nav-link" id="tab-events" data-toggle="tab" href="#menu-events" role="tab" aria-controls="menu-events" aria-selected="false">
            Wohin
        </a>
    </li>
    <li class="dropdown nav-item cat-yellow">
        <a class="nav-link" id="tab-names" data-toggle="tab" href="#menu-names" role="tab" aria-controls="menu-names" aria-selected="false">
            Vornamen
        </a>
    </li>

    <li class="dropdown nav-item cat-pink">
        <a class="nav-link" id="tab-knowledge" data-toggle="tab" href="#menu-knowledge" role="tab" aria-controls="menu-knowledge" aria-selected="false">Wissen
        </a>
    </li>
    <li class="dropdown nav-item cat-green">
        <a class="nav-link" id="tab-slogans" data-toggle="tab" href="#menu-slogans" role="tab" aria-controls="menu-slogans" aria-selected="false">
            Sprüche
        </a>
    </li>
    <li class="dropdown nav-item search">
        <a class="nav-link" data-toggle="modal" data-target="#modalSearchDialog">Suche <i class="fas fa-search"></i></a>
    </li>
</ul>
<div class="tab-content mb-5" id="megaMenuContent">
    <div class="tab-pane px-4 pb-3 pt-5 cat-blue" id="menu-events" role="tabpanel" aria-labelledby="tab-events">
        <?php include('includes/scratch/mega-menu-list.php'); ?>
    </div>
    <div class="tab-pane px-4 pb-3 pt-5 cat-yellow" id="menu-names" role="tabpanel" aria-labelledby="tab-names">
        <?php include('includes/scratch/mega-menu-list.php'); ?>
    </div>
    <div class="tab-pane px-4 pb-3 pt-5 cat-pink" id="menu-knowledge" role="tabpanel" aria-labelledby="tab-knowledge">
        <?php include('includes/scratch/mega-menu-list.php'); ?>
    </div>
    <div class="tab-pane px-4 pb-3 pt-5 cat-green" id="menu-slogans" role="tabpanel" aria-labelledby="tab-slogans">
        <?php include('includes/scratch/mega-menu-list.php'); ?>
    </div>
</div>
