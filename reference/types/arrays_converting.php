<?php
/*
 * For any of the types: integer, float, string, boolean and resource,
 * converting a value to an array results in an array with a single element
 * with index zero and the value of the scalar which was converted. In other
 * words, (array) $scalarValue is exactly the same as array($scalarValue)
 */
$a1 = (array) 1;
var_dump($a1);

$same_as_a1 = array(1);
var_dump($same_as_a1);



/*
 * If an object is converted to an array, the result is an array whose elements
 * are the object's properties. The keys are the member variable names, with a
 * few exceptions: integer properties are unaccessible; private variables have
 * the class name prepended to the variable name; protected variables have a
 * '*' prepended to the variable. These prepended values have null bytes on
 * either side.
 */
class A {
    private $A; // This will become '\0A\0A'
}
class B extends A {
    private $A; // This will become '\0B\0A'
    public $AA; // This will become 'AA'
}

// will appear to have two keys named 'AA', although one of them is actually
// named '\0A\0A'
var_dump((array) new B());

// Converting null to an array results in an empty array
var_dump((array) null);
