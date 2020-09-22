<?php

if (!isset($_REQUEST['form1'])) {
    return;
}

if (!is_numeric($_POST['amountOfCurrency1'])) {
    echo 'Enter the amount of money';
    return;
}

$allRates = [];

// create an array of cross rates for all currencies
// $allCurrencies[1] is dollar
for ($i = 0; $i < count($allCurrencies); $i++) {
    for ($k = 0; $k < count($allCurrencies); $k++) {

        $allRates["{$allCurrencies[$i]}_{$allCurrencies[$k]}"] =
        $allCurrencies[$i] == $allCurrencies[$k] ? 1 :
        round($data[$i]['buy'] / $data[$k]['sale'], 6);

        if ($allCurrencies[$i] == 'BTC') {
            $allRates["{$allCurrencies[$i]}_{$allCurrencies[$k]}"] =
            $allCurrencies[$i] == $allCurrencies[$k] ? 1 :
            ($allCurrencies[$k] == 'USD' ? $data[$i]['buy'] :
            ($data[$i]['buy'] * $allRates["{$allCurrencies[0]}_{$allCurrencies[$k]}"]));
        }

        if ($allCurrencies[$k] == 'BTC') {
            if ($allCurrencies[$i] == 'UAH') {
                $allRates["{$allCurrencies[$i]}_{$allCurrencies[$k]}"] =
                $allRates["{$allCurrencies[$i]}_{$allCurrencies[0]}"] / $data[$k]['sale'];
            }

            $allRates["{$allCurrencies[$i]}_{$allCurrencies[$k]}"] =
            $allCurrencies[$i] == $allCurrencies[$k] ? 1 :
            ($allCurrencies[$i] == 'USD' ? round(1 / $data[$k]['sale'], 6) :
            round($allRates["{$allCurrencies[$i]}_{$allCurrencies[0]}"] / $data[$k]['sale'], 6));
        }
    }
}

$nameOfCurrency1 = $_POST['nameOfCurrency1'];
$amountOfCurrency1 = $_POST['amountOfCurrency1'];

$nameOfCurrency2 = $_POST['nameOfCurrency2'];
$amountOfCurrency2 = round($amountOfCurrency1 * $allRates["{$nameOfCurrency1}_{$nameOfCurrency2}"], 2);

echo "If you exchange $amountOfCurrency1 $nameOfCurrency1 you will get $amountOfCurrency2 $nameOfCurrency2";
