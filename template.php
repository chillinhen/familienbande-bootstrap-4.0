<?php include('includes/template/head.php'); ?>
<body id="all" class="cat-blue">
    <?php include('includes/template/header.php'); ?>
    <?php include('includes/navigation/top-nav.php'); ?>
    
<!--    <div class="hero">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-sm-10 offset-md-1">
                    <?php #include('includes/forms/form-large-double-search.php'); ?>
                </div>
            </div>
        </div>
    </div>-->
    <main class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 sidebar order-lg-2">
                    <aside id="infoblock" class="fixedsticky">
                        <?php include('includes/template/sidebar.php'); ?>
                        
                    </aside>
                </div>
                <div class="col-lg-8 content order-lg-1 pr-lg-5"> 
                    
                    <?php include('includes/content/content-dummy.php'); ?>
                </div>
            </div>
        </div>
        <?php include('includes/modules/parallax.php'); ?>
    </main>
    <?php
    include('includes/template/footer.php');
    include('includes/modal-overlays/modal-search-dialog.php');
    ?>