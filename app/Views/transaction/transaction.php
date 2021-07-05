<?= $this->extend('Codenom\MidtransSampleData\Views\Components\layouts'); ?>
<?= $this->section('main'); ?>
<div class="row">
    <div class="col-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <?php if (session()->has('errors')) : ?>
                    <ul class="alert alert-danger">
                        <?php foreach (session('errors') as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach ?>
                    </ul>
                <?php endif ?>
                <?= form_open(route_to('attemptTransaction')); ?>
                <div class="form-group">
                    <label for="OrderId">Order ID</label>
                    <?= form_input('order_id', set_value('order_id'), ['class' => 'form-control', 'id' => 'OrderId']); ?>
                </div>
                <div class="form-group">
                    <div>
                        <label for="">Select Action:</label>
                    </div>
                    <div class="form-check">
                        <?= form_radio('action', 'status', false, ['class' => 'form-check-input', 'id' => 'GetStatus']); ?>
                        <label class="form-check-label" for="GetStatus">
                            Get Status
                        </label>
                    </div>
                    <div class="form-check">
                        <?= form_radio('action', 'approve', false, ['class' => 'form-check-input', 'id' => 'Approve']); ?>
                        <label class="form-check-label" for="Approve">
                            Approve
                        </label>
                    </div>
                    <div class="form-check">
                        <?= form_radio('action', 'cancel', false, ['class' => 'form-check-input', 'id' => 'Cancel']); ?>
                        <label class="form-check-label" for="Cancel">
                            Cancel
                        </label>
                    </div>
                    <div class="form-check">
                        <?= form_radio('action', 'expire', false, ['class' => 'form-check-input', 'id' => 'Expire']); ?>
                        <label class="form-check-label" for="Expire">
                            Expire
                        </label>
                    </div>
                </div>
                <?= form_button(['content' => 'Submit', 'type' => 'submit', 'class' => 'btn btn-primary']); ?>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>