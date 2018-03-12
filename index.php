<?php include('includes/template/head.php'); ?>
<body id="home" class="cat-blue">
    <?php include('includes/template/header.php'); ?>
    <?php include('includes/navigation/top-nav.php'); ?>
    <div class="hero">
        <div class="container">
            <div class="row align-items-md-end">
                <div class="claim col-sm-6 order-2 order-md-1">
                    <h1>Familienbande24</h1>
                    <h2 class="subline">alles zu Vornamen, Schwangerschaft, Geburt und Kinder</h2>
                    <p><strong>Auf unseren Seiten findest du viele Infos und praktische Helferlein rund um die Themen Schwangerschaft, Geburt, Kinder und Familie.</strong></p>
                </div>
                <div class="cta col-sm-6 order-1 order-md-2">
                    <?php include('includes/cards/card-vorname-des-tages.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <main class="main-content">
        <div class="container">
            <div class="row">
                <?php include('includes/content/content-index.php'); ?>
            </div>
        </div>
        <div class="row mb-5 pb-5">
            <div class="col-sm-10 offset-1 text-center">
                <h2>Weitere Artikel</h2>
                <?php include('includes/modules/carousel-width-cards.php'); ?>
            </div>
        </div>
    </main>
    <?php
    include('includes/template/footer.php');
    include('includes/modal-overlays/modal-search-dialog.php');
    ?>