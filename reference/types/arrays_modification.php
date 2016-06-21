<?php
$arr = [ 5 => 1, 12 => 2 ];
$arr[] = 56; // This is the same as $arr[13] = 56;
// at this point of the script
var_dump($arr);

$arr["x"] = 42;
var_dump($arr);

unset($arr[5]); // This removes the element from the array
var_dump($arr);

unset($arr);    // This deletes the how array
var_dump($arr);

$array = [1,2,3,4,5];
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);

// Re-index:
$array = array_values($array);
$array[] = 7;
print_r($array);
