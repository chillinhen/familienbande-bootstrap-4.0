<ul class="nav nav-tabs" id="myDialogueTab" role="tablist">
    <li class="nav-item cat-yellow">
        <a class="nav-link text-break" id="dialogueTab-01" data-toggle="tab" href="#dialogueItem-01" role="tab" aria-controls="dialogueItem-01" aria-selected="true">
            <i class="far fa-user"></i>
            <span>Vornamen</span>
        </a>
    </li>
    <li class="nav-item cat-pink">
        <a class="nav-link text-break" id="dialogueTab-02" data-toggle="tab" href="#dialogueItem-02" role="tab" aria-controls="dialogueItem-02" aria-selected="false">
            <i class="fas fa-female"></i>
            <span>Hebammen</span>
        </a>
    </li>
    <li class="nav-item cat-cyan">
        <a class="nav-link text-break" id="dialogueTab-03" data-toggle="tab" href="#dialogueItem-03" role="tab" aria-controls="dialogueItem-03" aria-selected="false">
            <i class="fas fa-user-md"></i>
            <span>Kinderärzte</span>
        </a>
    </li>
    <li class="nav-item cat-blue ">
        <a class="nav-link text-break active" id="dialogueTab-04" data-toggle="tab" href="#dialogueItem-04" role="tab" aria-controls="dialogueItem-04" aria-selected="false">
            <i class="fas fa-map"></i>
            <span>Ausflugsziele</span>
        </a>
    </li>
    <li class="nav-item cat-purple">
        <a class="nav-link text-break" id="dialogueTab-05" data-toggle="tab" href="#dialogueItem-05" role="tab" aria-controls="dialogueItem-05" aria-selected="false">
            <i class="fas fa-file-alt"></i>
            <span>Webseite</span>
        </a>
    </li>
</ul>
<div class="tab-content py-3 mb-5" id="myDialogueTabContent">
        <div class="tab-pane fade show cat-yellow" id="dialogueItem-01" role="tabpanel" aria-labelledby="dialogueTab-01">
            <?php include('includes/modules/large-search-inkl-checkbox.php'); ?>
        </div>
        <div class="tab-pane fade cat-pink" id="dialogueItem-02" role="tabpanel" aria-labelledby="dialogueTab-02">
            <?php include('includes/modules/large-search-inkl-checkbox.php'); ?>
        </div>
        <div class="tab-pane fade table-responsive-sm cat-cyan" id="dialogueItem-03" role="tabpanel" aria-labelledby="dialogueTab-03">
            <?php include('includes/modules/large-search-inkl-checkbox.php'); ?>
        </div>
        <div class="tab-pane fade show cat-blue active" id="dialogueItem-04" role="tabpanel" aria-labelledby="dialogueTab-04">
            <?php include('includes/modules/large-search-inkl-checkbox.php'); ?>
        </div>
        <div class="tab-pane fade google-map grey" id="dialogueItem-05" role="tabpanel" aria-labelledby="dialogueTab-05">
            <?php include('includes/modules/large-search-inkl-checkbox.php'); ?>
        </div>
    </div>
