<div id="carousel-width-cards" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#items_carousel" data-slide-to="0" class="active"></li>
    <li data-target="#items_carousel" data-slide-to="1"></li>
    <li data-target="#items_carousel" data-slide-to="2"></li>
  </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-group">
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card-group">
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card-group">
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
                <?php include('includes/cards/card-with-thumbnail.php'); ?>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#items_carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#items_carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>