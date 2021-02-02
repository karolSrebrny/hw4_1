<?php

use www\Currency;
use www\Money;

require_once 'autoloader.php';
$cur1 = new Currency( 'USD');
$cur2 = new Currency( 'USD');
if ($cur1->equalCurrency($cur2) == true) {

    echo 'Yes'.'<br><br>';

} else echo ' No'.'<br><br>';
'<br><br>';
$m = new Money(500, 'EUR');
$m1 = new Money(500, 'EUR');
if ($m->equalmc($m1) == true) {

    echo 'Yes'.'<br><br>';

} else echo ' No'.'<br><br>';
'<br><br>';