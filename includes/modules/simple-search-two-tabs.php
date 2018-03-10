<!-- Nav tabs -->
<ul class="nav nav-tabs" id="tabbedList" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="tab-01" data-toggle="tab" href="#tabcontent-01" role="tab" aria-controls="tabcontent-01" aria-selected="true">Suche #1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="tab-02" data-toggle="tab" href="#tabcontent-02" role="tab" aria-controls="tabcontent-02" aria-selected="false">Suche #2</a>
    </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="tabcontent-01" role="tabpanel" aria-labelledby="tab-01">
        <h3 class="card-title">Gesucht wird ein ... Vorname</h3>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <form class="form-inline d-flex" id="simple-tabcontent-01">
            <input class="form-control mr-sm-2" type="search" placeholder="Vorname eingeben" aria-label="Suche">
            <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i><span>Suche</span></button>

        </form>
    </div>
    <div class="tab-pane" id="tabcontent-02" role="tabpanel" aria-labelledby="tab-02">
        <h3 class="card-title">Gesucht wird eine ... Hebamme</h3>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <form class="form-inline d-flex" id="tabcontent-02-suche">
            <input class="form-control mr-sm-2" type="search" placeholder="PLZ oder Ort eingeben" aria-label="Suche">
            <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i><span>Suche</span></button>
        </form>
    </div>
</div>