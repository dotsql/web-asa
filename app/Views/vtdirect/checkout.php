<?= $this->extend('Codenom\MidtransSampleData\Views\Components\layouts'); ?>
<?= $this->section('main'); ?>
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
        <!-- form for API Midtrans-->
        <?= form_open(route_to('midtrans/vtdirect/token'), ['id' => 'payment-form']); ?>
        <div class="form-group">
            <label for="CreditCard">Card Number</label>
            <?= form_input('card_number', '4811111111111114', ['class' => 'form-control card-number', 'id' => 'CreditCard']); ?>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <div class="form-group">
                    <label for="Expiration">Expiration Month</label>
                    <?= form_input('card_expiry_month', '12', ['class' => 'form-control card-expiry-month', 'id' => 'Expiration']); ?>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="Expirationyear">Expiration Year</label>
                    <?= form_input('card_expiry_year', '2022', ['class' => 'form-control card-expiry-year', 'id' => 'Expirationyear']); ?>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="CVV">CVV Code</label>
                    <?= form_input('card_cvv', '123', ['class' => 'form-control card-cvv', 'id' => 'CVV']); ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="SaveCC" name="save_card">
                <label class="custom-control-label" for="SaveCC">Save Credit Card</label>
            </div>
        </div>
        <input id="token_id" name="token_id" type="hidden" />
        <?= form_button(['content' => 'Pay with Credit Card', 'class' => 'btn btn-block btn-primary btn-lg submit-button', 'type' => 'submit']); ?>
        <?= form_close(); ?>
        <!-- end form for API Midtrans -->
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('js-assets'); ?>
<!-- Load javascript from midtrans, mode sandbox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" />
<script type="text/javascript" src="https://api.sandbox.veritrans.co.id/v2/assets/js/veritrans.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<!-- Javascript for token generation -->
<script type="text/javascript">
    // const iframe = document.createElement('iframe');
    // iframe.setAttribute('allowFullScreen', '');
    // iframe.setAttribute('allow', 'fullscreen');
    $(function() {
        // Sandbox URL
        Veritrans.url = "https://api.sandbox.veritrans.co.id/v2/token";
        // TODO: Change with your client key.
        Veritrans.client_key = "<?= $clientKey; ?>";
        //Veritrans.client_key = "VT-client-h7ubdjqpcsLAQnjY";

        //Veritrans.client_key = "d4b273bc-201c-42ae-8a35-c9bf48c1152b";
        var card = function() {
            return {
                'card_number': $(".card-number").val(),
                'card_exp_month': $(".card-expiry-month").val(),
                'card_exp_year': $(".card-expiry-year").val(),
                'card_cvv': $(".card-cvv").val(),
                'secure': true,
                'bank': 'bni',
                'gross_amount': 10000
            }
        };

        function callback(response) {
            if (response.redirect_url) {
                // 3dsecure transaction, please open this popup
                openDialog(response.redirect_url);

            } else if (response.status_code == '200') {
                // success 3d secure or success normal
                closeDialog();
                // submit form
                $(".submit-button").attr("disabled", "disabled");
                $("#token_id").val(response.token_id);
                $("#payment-form").submit();
            } else {
                // failed request token
                console.log('Close Dialog - failed');
                //closeDialog();
                //$('#purchase').removeAttr('disabled');
                // $('#message').show(FADE_DELAY);
                // $('#message').text(response.status_message);
                //alert(response.status_message);
            }
        }

        function openDialog(url) {
            $.fancybox.open({
                href: url,
                type: 'iframe',
                autoSize: false,
                width: 700,
                height: 500,
                closeBtn: false,
                modal: true
            });
        }

        function closeDialog() {
            $.fancybox.close();
        }

        $('.submit-button').click(function(event) {
            event.preventDefault();
            //$(this).attr("disabled", "disabled"); 
            Veritrans.token(card, callback);
            return false;
        });
    });
</script>
<?= $this->endSection(); ?>