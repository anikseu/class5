<?php

use MoneyInWords\MoneyInWords;

require './vendor/autoload.php';

$converter = new MoneyInWords; 


$number = 3125639562;

$kothay = ($converter->moneyToWords($number));

print_r($kothay);  


