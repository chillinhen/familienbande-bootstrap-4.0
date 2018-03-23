<h6>Suchformular mit Check- und Radioboxen</h6>
<h2>Wo genau suchst du eine Hebamme?</h2>
<p>Lorem ipsum Anleitung dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.<br>

    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
<form class="simpleContentSearch">
    <div class="form-group">
        <div class="input-group align-items-center">
            <label for="location">
                PLZ oder Ort
            </label>
            <input class="form-control mr-sm-2" name="location" type="search" placeholder="PLZ oder Ort eingeben" aria-label="Suche">                             <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i><span>Suche</span></button>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group align-items-center">
            <label for="misc-select">
                wichtige Auswahlkriterien
            </label>
            <select class="custom-select" name="misc-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>                         
        </div>
    </div>
    <hr>
    <h6 class="small-category">Lorem Ipsum weitere Such-Kriterien</h6>
    <div class="d-flex justify-content-between">

        <div class="form-group custom-checkbox">
            <h4>1. Customs Checkboxes</h4>
            <?php include('includes/forms/form-checkboxes.php'); ?>
        </div>
        <div class="form-group custom-control">
            <h4>2. Customs Radios</h4>
            <?php include('includes/forms/form-radios.php'); ?>
        </div>
        <div class="form-group">
            <h4>3. Customs Toggles</h4>
            <?php include('includes/forms/form-toggles.php'); ?>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-outline-success" type="submit">Suche starten <i class="fas fa-search"></i></button>
    </div>    
</form>

