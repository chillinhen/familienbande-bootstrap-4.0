<?php include('includes/template/head.php'); ?>
<body id="knowledge" class="cat-pink">
    <?php include('includes/template/header.php'); ?>
<?php include('includes/navigation/top-nav.php'); ?>
    <main class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 sidebar order-lg-2">
                    <aside id="infoblock" class="fixedsticky">
                        <?php include('includes/template/sidebar.php'); ?>
                    </aside>
                </div>
                <div class="col-lg-8 content order-lg-1"> 
                    <?php include('includes/content/content-profile.php'); ?>
                    <h2>Weitere Profile/ Listenansicht</h2>
                     <?php include('includes/cards/list-item.php'); ?>
                    <?php include('includes/cards/list-item.php'); ?>
                    <?php include('includes/cards/list-item.php'); ?>
                    <?php include('includes/cards/list-item.php'); ?>
                    <?php include('includes/cards/list-item.php'); ?>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('includes/template/footer.php');
    include('includes/modal-overlays/modal-search-dialog.php');
    ?>