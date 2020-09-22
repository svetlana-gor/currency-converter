<?php

$url = 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5';

// create request
$ch = curl_init();

// request settings
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// send and decode response
$data = json_decode(curl_exec($ch), $assoc=true);

// close request
curl_close($ch);

// add UAH to array of request
$data[] = ['ccy'      => 'UAH',
           'base_ccy' => 'UAH',
           'buy'      => 1,
           'sale'     => 1,];

// create an array with the names of all currencies
$allCurrencies = [];

foreach ($data as $value) {
    $allCurrencies[] = $value['ccy'];
}
