<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Midtrans</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .container {
            max-width: 960px;
        }

        .border-top {
            border-top: 1px solid #e5e5e5;
        }

        .border-bottom {
            border-bottom: 1px solid #e5e5e5;
        }

        .border-top-gray {
            border-top-color: #adb5bd;
        }

        .box-shadow {
            box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
        }

        .lh-condensed {
            line-height: 1.25;
        }
    </style>
    <style>
        .receipt-content .logo a:hover {
            text-decoration: none;
            color: #7793C4;
        }

        .receipt-content .invoice-wrapper {
            background: #FFF;
            border: 1px solid #CDD3E2;
            box-shadow: 0px 0px 1px #CCC;
            padding: 40px 40px 60px;
            margin-top: 40px;
            border-radius: 4px;
        }

        .receipt-content .invoice-wrapper .payment-details span {
            color: #A9B0BB;
            display: block;
        }

        .receipt-content .invoice-wrapper .payment-details a {
            display: inline-block;
            margin-top: 5px;
        }

        .receipt-content .invoice-wrapper .line-items .print a {
            display: inline-block;
            border: 1px solid #9CB5D6;
            padding: 13px 13px;
            border-radius: 5px;
            color: #708DC0;
            font-size: 13px;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .receipt-content .invoice-wrapper .line-items .print a:hover {
            text-decoration: none;
            border-color: #333;
            color: #333;
        }

        .receipt-content {
            background: #ECEEF4;
        }

        @media (min-width: 1200px) {
            .receipt-content .container {
                width: 900px;
            }
        }

        .receipt-content .logo {
            text-align: center;
            margin-top: 50px;
        }

        .receipt-content .logo a {
            font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
            font-size: 36px;
            letter-spacing: .1px;
            color: #555;
            font-weight: 300;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .receipt-content .invoice-wrapper .intro {
            line-height: 25px;
            color: #444;
        }

        .receipt-content .invoice-wrapper .payment-info {
            margin-top: 25px;
            padding-top: 15px;
        }

        .receipt-content .invoice-wrapper .payment-info span {
            color: #A9B0BB;
        }

        .receipt-content .invoice-wrapper .payment-info strong {
            display: block;
            color: #444;
            margin-top: 3px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .payment-info .text-right {
                text-align: left;
                margin-top: 20px;
            }
        }

        .receipt-content .invoice-wrapper .payment-details {
            border-top: 2px solid #EBECEE;
            margin-top: 30px;
            padding-top: 20px;
            line-height: 22px;
        }


        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .payment-details .text-right {
                text-align: left;
                margin-top: 20px;
            }
        }

        .receipt-content .invoice-wrapper .line-items {
            margin-top: 40px;
        }

        .receipt-content .invoice-wrapper .line-items .headers {
            color: #A9B0BB;
            font-size: 13px;
            letter-spacing: .3px;
            border-bottom: 2px solid #EBECEE;
            padding-bottom: 4px;
        }

        .receipt-content .invoice-wrapper .line-items .items {
            margin-top: 8px;
            border-bottom: 2px solid #EBECEE;
            padding-bottom: 8px;
        }

        .receipt-content .invoice-wrapper .line-items .items .item {
            padding: 10px 0;
            color: #696969;
            font-size: 15px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .items .item {
                font-size: 13px;
            }
        }

        .receipt-content .invoice-wrapper .line-items .items .item .amount {
            letter-spacing: 0.1px;
            color: #84868A;
            font-size: 16px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .items .item .amount {
                font-size: 13px;
            }
        }

        .receipt-content .invoice-wrapper .line-items .total {
            margin-top: 30px;
        }

        .receipt-content .invoice-wrapper .line-items .total .extra-notes {
            float: left;
            width: 40%;
            text-align: left;
            font-size: 13px;
            color: #7A7A7A;
            line-height: 20px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .total .extra-notes {
                width: 100%;
                margin-bottom: 30px;
                float: none;
            }
        }

        .receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
            display: block;
            margin-bottom: 5px;
            color: #454545;
        }

        .receipt-content .invoice-wrapper .line-items .total .field {
            margin-bottom: 7px;
            font-size: 14px;
            color: #555;
        }

        .receipt-content .invoice-wrapper .line-items .total .field.grand-total {
            margin-top: 10px;
            font-size: 16px;
            font-weight: 500;
        }

        .receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
            color: #20A720;
            font-size: 16px;
        }

        .receipt-content .invoice-wrapper .line-items .total .field span {
            display: inline-block;
            margin-left: 20px;
            min-width: 85px;
            color: #84868A;
            font-size: 15px;
        }

        .receipt-content .invoice-wrapper .line-items .print {
            margin-top: 50px;
            text-align: center;
        }



        .receipt-content .invoice-wrapper .line-items .print a i {
            margin-right: 3px;
            font-size: 14px;
        }

        .receipt-content .footer {
            margin-top: 40px;
            margin-bottom: 110px;
            text-align: center;
            font-size: 12px;
            color: #969CAD;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Load Container -->
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h2>Example Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <?= $this->renderSection('main'); ?>
        <!-- Footer Main -->
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2019-2020 Codenom Dev</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="https://github.com/codenomdev/midtrans-sample-data">Repository</a></li>
                <li class="list-inline-item"><a href="https://github.com/codenomdev/midtrans-sample-data/issues">Issue</a></li>
                <li class="list-inline-item"><a href="https://codenom.com">Support</a></li>
            </ul>
        </footer>
        <!-- End Footer Main -->
    </div>
    <!-- End Load Container -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <?= $this->renderSection('js-assets'); ?>
</body>

</html>