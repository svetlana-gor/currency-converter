<?php

require './vendor/autoload.php';
require './env.php';

?>

<!DOCTYPE html>
<html class="h-100">
  <head>
    <meta content="text/html; charset=utf-8">
    <meta name="description" content="Currency Converter">
    <meta name="keywords" content="currency, converter">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <title>Currency Converter</title>
  </head>

  <body class="d-flex flex-column h-100">

    <?php
    include 'views/header_view.php';
    include 'requestCurrencyRates.php';
    include 'views/currency_rates_calculator_view.php';
    include 'sql/create_db.php';
    include 'sql/create_table_requests.php';
    include 'sql/fill_in_table_requests.php';
    include 'views/history_view.php';
    include 'views/settings_view.php';

    if (isset($_REQUEST['showAllCurrencies'])) {
        include 'views/all_currencies_view.php';
    }

    include 'views/footer_view.php';
    ?>

  </body>
</html>
