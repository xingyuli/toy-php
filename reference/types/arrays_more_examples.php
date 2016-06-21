<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('html_errors', FALSE);
$array = [1,2];
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nChecking $i: \n";
    echo "Bad: " . $array['$i'] . "\n";
    echo "Good: " . $array[$i] . "\n";
    echo "Bad: {$array['$i']}\n";
    echo "Good: {$array[$i]}\n";
}

$arr = [ 'fruit'=>'apple', 'veggie'=>'carrot' ];
print $arr['fruit'];
print $arr['veggie'];

// This defines a constant to demonstrate what's going on. The value 'veggie'
// is assigned to a constant named fruit.
define('fruit', 'veggie');
print $arr['fruit'];
print $arr[fruit];

// The following is okay, as it is inside a string. Constants are not looked for
// within strings, so no E_NOTICE occurs here
print "Hello $arr[fruit]";

// With one exception: braces surrounding arrays within strings allows constants
// to be interpreted
print "Hello {$arr[fruit]}";
print "Hello {$arr['fruit']}";


$colors = [ 'red', 'blue', 'green', 'yellow' ];
foreach ($colors as $color) {
    echo "Do you like $color?\n";
}


// Changing element in the loop: NOTE the '&' sign - reference operator
foreach ($colors as &$color) {
    $color = strtoupper($color);
}
print_r($colors);


// Create a new multi-dimensional array
$juices['apple']['green'] = 'good';
print_r($juices);


// Array assignment always involves the value copying. Use the reference
// operator to copy an array by reference.
$arr1 = [2,3];
$arr2 = $arr1;
$arr2[] = 4; // $arr2 is changed, $arr1 is still [2,3]
print_r($arr2);
print_r($arr1);

$arr3 = &$arr1;
$arr3[] = 4; // now $arr1 and $arr3 are the same
print_r($arr3);
print_r($arr1);
