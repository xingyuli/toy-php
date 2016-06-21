<?php
$a = [ 'a'=>'apple', 'b'=>'banana' ];
$b = [ 'a'=>'pear', 'b'=>'strawberry', 'c'=>'cherry' ];

$c = $a + $b;
echo "Union of \$a and \$b: \n";
var_dump($c);

$c = $b + $a;
echo "Union of \$b and \$a: \n";
var_dump($c);

$a += $b;
echo "Union of \$a += \$b: \n";
var_dump($a);
