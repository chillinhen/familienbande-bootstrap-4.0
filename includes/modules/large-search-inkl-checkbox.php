<h2>Suchformular mit Check- und Radioboxen</h2>
<legend>Wo genau suchst du eine Hebamme?</legend>
<p>Lorem ipsum Anleitung dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.<br>

    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
<form>
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
            <select name="misc-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>                         
        </div>
    </div>
    <h3>Lorem Ipsum weitere Such-Kriterien</h3>
    <div class="d-flex justify-content-between">

        <div class="form-group custom-checkbox">
            <h3>1. Customs Checkboxes</h3>
            <?php include('includes/forms/form-checkboxes.php'); ?>
        </div>
        <div class="form-group custom-control">
            <h3>2. Customs Radios</h3>
            <?php include('includes/forms/form-radios.php'); ?>
        </div>
        <div class="form-group">
            <h3>3. Customs Toggles</h3>
            <?php include('includes/forms/form-toggles.php'); ?>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-outline-success" type="submit">Suche starten <i class="fas fa-search"></i></button>
    </div>    
</form>

