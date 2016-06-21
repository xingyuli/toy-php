<?php
$a1 = array("one" => 111, "two" => 222, "three" => 333);
var_dump($a1);

// as of PHP 5.4
$a2 = ["one" => 111, "two" => 222, "three" => 333];
var_dump($a2);

$array = [
    1 => 'a',
    "1" => 'b',
    1.5 => 'c',
    true => "d"
];
/*
 * As all the keys in the above example are cast to 1, the value will be
 * overwritten on every new element and the last assigned value "d" is the only
 * one left over.
 */
var_dump($array);

/*
 * The key is optional. If it is not specified, PHP will use the increment of
 * the largest previously used integer key.
 */
$array2 = [
    "a",
    "b",
    6 => "c",
    "d"
];
var_dump($array2);

$array3 = [
    'foo' => 'bar',
    42 => 24,
    'multi' => [
        'dimensional' => [
            'array' => 'foo'
        ]
    ]
];
var_dump($array3["foo"]);
var_dump($array3[42]);
var_dump($array3['multi']['dimensional']['array']);
