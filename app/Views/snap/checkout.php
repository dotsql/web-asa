<?= $this->extend('Codenom\MidtransSampleData\Views\Components\layouts'); ?>
<?= $this->section('main'); ?>

<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-dz6LnTXst1mCGO2x">
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">2</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">Apple</h6>
                    <small class="text-muted">Yummy</small>
                </div>
                <span class="text-muted">Rp 18.000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">Orange</h6>
                    <small class="text-muted">Fresh</small>
                </div>
                <span class="text-muted">Rp 20.000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                    <h6 class="my-0">Promo code</h6>
                    <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">-Rp 5.000</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span>Total (IDR)</span>
                <strong>Rp 94.000</strong>
            </li>
        </ul>

        <form class="card p-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="Andri" disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="Litani" disabled>
            </div>
        </div>
        <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Required)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" value="codenomdev@gmail.com" disabled>
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" placeholder="you@example.com" value="085161612323" disabled>
        </div>
        <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" value="Manggis 90" disabled>
        </div>

        <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" disabled>
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                    <option selected>Indonesia</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                    <option selected>DKI Jakarta</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" value="16601" disabled>
            </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address" checked="checked" disabled>
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>
        <!-- end form response from API Midtrans -->
        <button id="pay-button">Pay!</button>
        <script type="text/javascript">
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function() {
                snap.pay('<SNAP_TOKEN>');
            });
        </script>
    </div>
</div>