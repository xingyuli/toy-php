<?php
$str = 'This is a test';
$first = $str[0];

$third = $str[2];

$str = 'This is still a test.';
$last = $str[strlen($str)-1];
echo $last . PHP_EOL;

$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';
echo $str . PHP_EOL;
