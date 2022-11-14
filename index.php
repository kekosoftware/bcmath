<?php

namespace Teladoc;

require_once "app/Number.php";

$number = new app\Number("123 456 789", "11 22 33");
var_dump($number->addNumbers());
echo '<br>';

$number = new app\Number("123456789012345678901 23456789", 
                           "12345678 234567890123456789012");
var_dump($number->addNumbers());
echo '<br>';

$number = new app\Number("1234567.8901 2.345", "12.34 2345678901.2");
var_dump($number->addNumbers());
echo '<br>';

$number = new app\Number("123 456 789", "11 22 33");
var_dump($number->checkDecimals('12.3', '0.155'));