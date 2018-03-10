<?php include('includes/template/head.php'); ?>
<body id="home">
    <?php include('includes/template/header.php'); ?>
    <?php include('includes/navigation/top-nav.php'); ?>
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
    <main class="main-content">
        <div class="container-fluid">
            <div class="row">
                <?php include('includes/content/content-index.php'); ?>
            </div>
        </div>
        <div class="row my-5 py-5">
            <div class="col-sm-10 offset-sm-1 text-center">
                <h2>Weitere Artikel</h2>
                <?php #include('includes/modules/items-carousel.php'); ?>
            </div>
        </div>
    </main>
    <?php
    include('includes/template/footer.php');
    include('includes/modal-overlays/modal-search-dialog.php');
    ?>