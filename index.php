<?php

use www\Vladimirhw4\Currency;
use www\Vladimirhw4\Money;

require_once 'autoloader.php';
$cur1 = new Currency( 'USD');
$cur2 = new Currency( 'USD');
if ($cur1->equalCurrency($cur2) == true) {

    echo 'Yes'.'<br><br>';

} else echo ' No'.'<br><br>';
'<br><br>';
$m = new Money(1, 'EUR');
$m1 = new Money(1, 'EUR');
if ($m->equalmc($m1) == true) {

    echo 'Yes'.'<br><br>';

} else echo ' No'.'<br><br>';

$m3 = ($m1 -> add ($m));
var_dump($m3);







