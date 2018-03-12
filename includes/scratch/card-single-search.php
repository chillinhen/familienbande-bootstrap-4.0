<!-- Nav tabs -->
<ul class="nav nav-tabs" id="tabbedList" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="topic" data-toggle="tab" href="#topic" role="tab" aria-controls="topic" aria-selected="true">Topic</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="category-tab" data-toggle="tab" href="#category" role="tab" aria-controls="category" aria-selected="false">Kategorien</a>
    </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="topic" role="tabpanel" aria-labelledby="topic-tab">
        <h3 class="card-title">Gesucht wird ein ... Vorname</h3>
        <p class="card-text d-none d-lg-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <form class="form-inline d-flex" id="vornamen-suche">
            <input class="form-control mr-sm-2" type="search" placeholder="Vorname eingeben" aria-label="Suche">
            <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i><span>Suche</span></button>

        </form>
    </div>
    <div class="tab-pane" id="category" role="tabpanel" aria-labelledby="category-tab">
        <h3 class="card-title">Filter nach Kategorien</h3>
        <p class="card-text d-none d-lg-block">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
</div>