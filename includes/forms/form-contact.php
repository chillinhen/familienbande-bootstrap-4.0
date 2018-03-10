<form>
    <div class="form-row">
        <div class="form-group">
            <label for="inputName">Dein Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddonUser"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" id="inputName" aria-label="name" aria-describedby="btnGroupAddonName" placeholder="Vorname & Name eintragen">
            </div>
            <label for="inputEmail">Deine E-Mailadresse</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddonEmail"><i class="fas fa-at"></i></div>
                </div>
                <input type="email" class="form-control" id="inputEmail" aria-label="email" aria-describedby="btnGroupAddonEmail" placeholder="E-Mailadresse eintragen">
            </div>
            <label for="inputPhone">Deine Telefonnummer</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddonPhone"><i class="fas fa-phone"></i></div>
                </div>
                <input type="number" class="form-control" id="inputPhone" aria-label="phone" aria-describedby="btnGroupAddonPhone" placeholder="Telefonnummer eintragen">
            </div>
            <label for="inputMessage">Deine Nachricht</label>
            <div class="input-group">
                <div class="input-group-prepend justify-content-start">
                    <div class="input-group-text" id="btnGroupAddonMessage"><i class="fas fa-align-left"></i></div>
                </div>
                <textarea id="inputMessage" name="message" cols="50" rows="10" aria-label="message" aria-describedby="btnGroupAddonMessage"></textarea>
            </div>
            <button type="submit" class="float-right btn btn-primary">Abschicken</button>
        </div>
    </div>
</form>