<?php
$arr1 = [ 'one','two', 'three','four', 'five' ];
var_dump(array_diff($arr1, ['one'], ['two', 'five']));

$a = [
    'color' => 'red',
    'taste' => 'sweet',
    'shape' => 'round',
    'name' => 'apple',
    4 // key will be 0
];
var_dump($a);

$b = [ 'a', 'b', 'c' ];


$aa1 = [ 'apple', 'banana' ];
$aa2 = [ 1=>'banana', '0'=>'apple' ];
var_dump($aa1 == $aa2); // bool(true)
var_dump($aa1 === $aa2); // bool(false)