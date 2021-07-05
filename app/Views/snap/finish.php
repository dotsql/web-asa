<?= $this->extend('Codenom\MidtransSampleData\Views\Components\layouts'); ?>
<?= $this->section('main'); ?>
<div class="receipt-content">
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-md-12">
                <div class="invoice-wrapper">
                    <div class="intro">
                        Hi <strong>Andri Litani</strong>,
                        <br>
                        This is the receipt for a payment of <strong><?= \number_format($response->gross_amount); ?></strong> (IDR) for your works
                    </div>
                    <div class="payment-info">
                        <div class="row">
                            <div class="col-sm-6">
                                <span>Order ID.</span>
                                <strong><?= $response->order_id; ?></strong>
                            </div>
                            <div class="col-sm-6 text-right">
                                <span>Payment Date</span>
                                <strong><?= $response->transaction_time; ?></strong>
                            </div>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="row">
                            <div class="col-sm-6">
                                <span>Shipping Address:</span>
                                <strong>
                                    Obert Supriadi
                                </strong>
                                <p>
                                    Manggis 90 <br>
                                    Jakarta <br>
                                    16601 <br>
                                    Indonesia <br>
                                    <a href="#">
                                        CodenomDev@gmail.com
                                    </a>
                                </p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <span>Payment To</span>
                                <strong>
                                    Andri Litani
                                </strong>
                                <p>
                                    Mangga 20 <br>
                                    Jakarta <br>
                                    16602 <br>
                                    Indonesia <br>
                                    <a href="#">
                                        CodenomDev@gmail.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="line-items">
                        <div class="headers clearfix">
                            <div class="row">
                                <div class="col-sm-4">Description</div>
                                <div class="col-sm-3">Quantity</div>
                                <div class="col-sm-5 text-right">Amount</div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="row item">
                                <div class="col-sm-4 desc">
                                    Apple
                                </div>
                                <div class="col-sm-3 qty">
                                    3
                                </div>
                                <div class="col-sm-5 amount text-right">
                                    Rp 18.000
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-sm-4 desc">
                                    Orange
                                </div>
                                <div class="col-sm-3 qty">
                                    2
                                </div>
                                <div class="col-sm-5 amount text-right">
                                    Rp 20.000
                                </div>
                            </div>
                        </div>
                        <div class="total text-right">
                            <p class="extra-notes">
                                <strong>Extra Notes</strong>
                                Please send all items at the same time to shipping address by next week.
                                Thanks a lot.
                            </p>
                            <div class="field">
                                Subtotal <span>Rp 38.000</span>
                            </div>
                            <div class="field">
                                Shipping <span>Rp. 56.000</span>
                            </div>
                            <div class="field">
                                Discount <span>4.5%</span>
                            </div>
                            <div class="field grand-total">
                                Total <span><?= \number_format($response->gross_amount); ?></span>
                            </div>
                        </div>

                        <div class="print">
                            <a href="<?= $response->pdf_url; ?>" target="_blank">
                                <i class="fa fa-print"></i>
                                Download PDF
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    Copyright © 2020. Codenom Midtrans Sample Data
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>