@extends('layouts.main')

@section('content')

    
          <!-- Heading -->
          <h2 class="my-5 h2 text-center">Checkout</h2>
    
          <!--Grid row-->
          <div class="row">
    
            <!--Grid column-->
            <div class="col-md-8 mb-4">
    
              <!--Card-->
              <div class="card">
    
                <!--Card content-->
                <form class="card-body">
    
                  <!--Grid row-->
                  <div class="row">
    
                    <!--Grid column-->
                    <div class="col-md-6 mb-2">
    
                      <!--firstName-->
                      <div class="md-form ">
                        <input type="text" id="firstName" class="form-control">
                        <label for="firstName" class="">Voornaam</label>
                      </div>
    
                    </div>
                    <!--Grid column-->
    
                    <!--Grid column-->
                    <div class="col-md-6 mb-2">
    
                      <!--lastName-->
                      <div class="md-form">
                        <input type="text" id="lastName" class="form-control">
                        <label for="lastName" class="">Achternaam</label>
                      </div>
    
                    </div>
                    <!--Grid column-->
    
                  </div>
                  <!--Grid row-->
    
                  <!--Username-->
                  <div class="md-form input-group pl-0 mb-5">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
                  </div>
    
                  <!--email-->
                  <div class="md-form mb-5">
                    <input type="text" id="email" class="form-control" placeholder="email">
                    <label for="email" class="">Email (optional)</label>
                  </div>
    
                  <!--address-->
                  <div class="md-form mb-5">
                    <input type="text" id="address" class="form-control" placeholder="Grote markt 1">
                    <label for="address" class="">Adres</label>
                  </div>
    
                  <!--address-2-->
                  <div class="md-form mb-5">
                    <input type="text" id="address-2" class="form-control" placeholder="Huisnummer">
                    <label for="address-2" class="">Adres 2 (optional)</label>
                  </div>
    
                  <!--Grid row-->
                  <div class="row">
    
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
    
                      <label for="country">Land</label>
                      <select class="custom-select d-block w-100" id="country" required>
                        <option value="">Kies...</option>
                        <option>Nederland</option>
                      </select>
                      <div class="invalid-feedback">
                        Geef een geldig land op
                      </div>
    
                    </div>
                    <!--Grid column-->
    
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
    
                      <label for="state">Plaats</label>
                      <select class="custom-select d-block w-100" id="state" required>
                        <option value="">Kies...</option>
                        <option>Groningen</option>
                      </select>
                      <div class="invalid-feedback">
                        Geef een geldige plaats op
                      </div>
    
                    </div>
                    <!--Grid column-->
    
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
    
                      <label for="zip">Postcode</label>
                      <input type="text" class="form-control" id="zip" placeholder="" required>
                      <div class="invalid-feedback">
                        Postcode noodzakelijk
                      </div>
    
                    </div>
                    <!--Grid column-->
    
                  </div>
                  <!--Grid row-->
    
                  <hr>
    
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Het verzendadres is het zelfde als het factuuradres</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Bewaar deze informatie voor de volgende keer</label>
                  </div>
    
                  <hr>
    
                  <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                      <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                      <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="debit">iDeal</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                      <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="cc-name">Naam van kaart</label>
                      <input type="text" class="form-control" id="cc-name" placeholder="" required>
                      <small class="text-muted">Volledige naam als op de kaart</small>
                      <div class="invalid-feedback">
                        De naam is verplicht
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="cc-number">Credit card number</label>
                      <input type="text" class="form-control" id="cc-number" placeholder="" required>
                      <div class="invalid-feedback">
                        Credit card nummer is verplicht
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="cc-expiration">Vervaltijd</label>
                      <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                      <div class="invalid-feedback">
                        Vervaldatum vereist
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="cc-expiration">CVV</label>
                      <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                      <div class="invalid-feedback">
                        Beveiligingscode vereist
                      </div>
                    </div>
                  </div>
                  <hr class="mb-4">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
    
                </form>
    
              </div>
              <!--/.Card-->
    
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-4 mb-4">
    
              <!-- Heading -->
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Winkelmand</span>
                <span class="badge badge-secondary badge-pill">3</span>
              </h4>
    
              <!-- Cart -->
              <ul class="list-group mb-3 z-depth-1">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Product naam</h6>
                    <small class="text-muted">Boek omschrijving</small>
                  </div>
                  <span class="text-muted">€12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Tweede product</h6>
                    <small class="text-muted">Brief omschrijving</small>
                  </div>
                  <span class="text-muted">€8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Derde product</h6>
                    <small class="text-muted">Brief omschrijving</small>
                  </div>
                  <span class="text-muted">€5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div class="text-success">
                    <h6 class="my-0">Promotiecode</h6>
                    <small>VOORBEELDCODE</small>
                  </div>
                  <span class="text-success">-€5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (EU)</span>
                  <strong>€20</strong>
                </li>
              </ul>
              <!-- Cart -->
    
              <!-- Promo code -->
              <form class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
                  </div>
                </div>
              </form>
              <!-- Promo code -->
    
            </div>
            <!--Grid column-->
    
          </div>
          <!--Grid row-->
    
        </div>
@endsection