<section class="featured">
    <!-- Themen -->
    <?php include('includes/modules/topics-multicolored.php'); ?>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Die neuesten Artikel</h2>
        </div>
        <div class="col-sm-4 cat-yellow mb-5"><?php include('includes/cards/card-with-thumbnail.php'); ?></div>
        <div class="col-sm-4 cat-pink mb-5"><?php include('includes/cards/card-with-thumbnail.php'); ?></div>
        <div class="col-sm-4 cat-green"><?php include('includes/cards/card-with-thumbnail.php'); ?></div>
    </div>
    <div class="ads d-none d-lg-block">
        <div class="col-sm-12 text-center">
            <img src="img/google-ads-landscape.jpg" alt=""/>
        </div>
    </div>
</section>
<section class="main-content">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2>Lorem Ipsum sit dolor</h2>
        </div>
        <div class="col-lg-4 sidebar order-lg-2">
            <aside id="infoblock" class="fixedsticky">
                <?php include('includes/template/sidebar.php'); ?>
            </aside>
        </div>
        <div class="col-lg-8 content order-lg-1"> 
            <?php include('includes/elements/txt-entry.php'); ?>
            <?php include('includes/elements/big-card.php'); ?>

            <div class="ads d-none d-sm-block">
                <img class="img-fluid" src="img/google-ads.jpg" alt=""/>
            </div>
            <?php include('includes/modal-overlays/call-modal-box.php'); ?>
            <?php include('includes/elements/txt-entry.php'); ?>
            <?php include('includes/elements/txt-entry.php'); ?>
        </div>
    </div>
</section>
<section class="bottom mt-5">
    <div class="container">
        <?php include('includes/modules/small-img-grid.php'); ?>
    </div>
</section>