<?php

/*
 * Object Initialization
 */
class MyFoo {
    function do_foo() {
        echo 'Doing foo.';
    }
}

$bar = new MyFoo();
$bar->do_foo();


/*
 * Converting to object
 *
 * If an object is converted to an object, it is not modified.
 *
 * If a value of any other type is converted to an object, a new instance of
 * the stdClass is created.
 *
 * If the value was NULL, the new instance will be empty.
 *
 * An array converts to an object with properties named by keys and
 * corresponding values, with the exception of numeric keys which will be
 * inaccessible unless iterated.
 */
$obj = (object) ['1'=>'foo'];
var_dump(isset($obj->{'1'})); // outputs 'bool(false)'
var_dump(key($obj)); // outputs 'int(1)'

// numeric keys can be iterated
foreach ($obj as $key => $value) {
    print_r("$key: $value \n");
}

// For any other value, a member variable named 'scalar' will contain the value
$obj1 = (object) 'ciao';
echo $obj1->scalar;