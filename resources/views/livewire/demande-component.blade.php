<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <form class="row g-3" action="/demandes" method="POST">
                {{ csrf_field() }}
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" id="inputPassword4" required>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress"
                        placeholder="1234 Main St" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" name="addresss" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-5">
                    <label for="inputAddress2" class="form-label">Pays</label>
                    <input type="text" name="pays" class="form-control" id="inputAddress2" placeholder="France"
                        required>
                </div>
                <div class="col-5">
                    <label for="inputAddress2" class="form-label">Ville</label>
                    <input type="text" name="ville" class="form-control" id="inputAddress2" placeholder="Paris"
                        required>
                </div>
                {{-- <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">State</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div> --}}
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Code Postal</label>
                    <input type="text" name="post" class="form-control" id="inputZip">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Téléphon</label>
                    <input type="number" name="phone" class="form-control" placeholder="numero avec indicatif" id="inputZip">
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Profession</label>
                    <input type="text" name="profession" class="form-control" id="inputZip" required>
                </div>
                <div class="col-md-5">
                    <label for="inputZip" class="form-label">Revenus Mensuel</label>
                    <input type="text" name="revenus" class="form-control" id="inputZip" required>
                </div>
                <div class="col-md-5">
                    <label for="inputZip" class="form-label">Montant du crédit</label>
                    <input type="text" name="credit" class="form-control" id="inputZip" required>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Durée</label>
                    <input type="number" name="durer" placeholder="En année(s)" class="form-control" id="inputZip"
                        required>
                </div>
                <div class="col-12">
                    {{-- <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div> --}}
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>
<br><br>
