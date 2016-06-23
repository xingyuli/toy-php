<?php
$assigned_with_NULL = NULL;
var_dump(is_null($assigned_with_NULL));

$unassigned_variable;
var_dump(is_null($unassigned_variable));

$myVar = '1';
var_dump(is_null($myVar));
unset($myVar);
var_dump(is_null($myVar));
