<?php
$action = "show_version";
$show_separators = TRUE;

if ($action == "show_version") {
    echo "The version is 1.23";
}

if ($show_separators) {
    echo "<hr>\n";
}

var_dump((bool) "");
var_dump((bool) 1);
var_dump((bool) -2);
var_dump((bool) "foo");
var_dump((bool) 2.3e5);
var_dump((bool) array(12));
var_dump((bool) array());
var_dump((bool) "false");