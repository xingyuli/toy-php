<?php
// Show all errors
error_reporting(E_ALL);

$greet = 'fantastic';

echo "This is { $greet}";

echo "This is {$greet}";
echo "This is ${greet}";


class square {
    public $width = 100;
}
$square = new square();
echo "This square is {$square->width}00 centimeters broad.";


class beers {
    const softdrink = "rootbeer";
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

echo "I'd like an {${beers::softdrink}}\n";
echo "I'd like an {${beers::$ale}}\n";