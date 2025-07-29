<?php

require_once 'abstract/Visa14.php';
require_once 'classes/BuyProduct14.php';

$buyProduct14 = new BuyProduct14();
echo $buyProduct14->getPayment();
