<?php include('includes/template/head.php'); ?>
<body id="events" class="cat-blue">
    <?php include('includes/template/header.php'); ?>
    <?php include('includes/navigation/top-nav.php'); ?>
    <div class="hero">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-sm-10 offset-md-1">
                    <?php include('includes/forms/form-large-double-search.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <main class="main-content mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 content"> 
                    <?php include('includes/content/content-events.php'); ?>
                </div>
                <div class="col-lg-4 sidebar mb-5">
                    <aside id="infoblock" class="fixedsticky">
                        <?php include('includes/template/sidebar.php'); ?>
                    </aside>
                </div>
            </div>
        </div>
        
    </main>
    <?php
    include('includes/modules/parallax.php');
    include('includes/template/footer.php');
    include('includes/modal-overlays/modal-search-dialog.php');
    ?>