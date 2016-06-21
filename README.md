# toy-php
Just for learning php

## Escaping from html
```php
<?php ?>


<?= ?>
```


## comments
```php
// c++ style comment

/* multi line
   comments */

# shell-style comment
```

## string
```
.    // concatenation operator

.=   // concatenating assignment operator
```

> Useful functions
> - strlen

#### heredoc
```php
// variables will be expanded like Double Quoted string
$str = <<<"EOT"
hello $name!
EOT;
```

#### nowdoc
```php
// variables won't be expanded like Single Quoted string
$str = <<<'EOT'
hello world!
EOT;
```


## array

NOTE: The key can either be an integer or a string.

```php
$array[] = value;    // append an item
```

> Useful functions
> - unset
> - array_values    // `array array_values (array $array)`: returns all the values from the array and indexes the array numerically
> - count
> - array_diff


## super globals
- `$GLOBALS`
- `$_SERVER`
- `$_GET`
- `$_POST` - contains all POST data
- `$_FILES`
- `$_COOKIE`
- `$_SESSION`
- `$_REQUEST` - An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
- `$_ENV`


## predefined variables
- Superglobals — Superglobals are built-in variables that are always available in all scopes
- `$GLOBALS` — References all variables available in global scope
- `$_SERVER` — Server and execution environment information
- `$_GET` — HTTP GET variables
- `$_POST` — HTTP POST variables
- `$_FILES` — HTTP File Upload variables
- `$_REQUEST` — HTTP Request variables
- `$_SESSION` — Session variables
- `$_ENV` — Environment variables
- `$_COOKIE` — HTTP Cookies
- `$php_errormsg` — The previous error message
- `$HTTP_RAW_POST_DATA` — Raw POST data
- `$http_response_header` — HTTP response headers
- `$argc` — The number of arguments passed to script
- `$argv` — Array of arguments passed to script
