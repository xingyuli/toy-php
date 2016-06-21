<?php
$str = <<<'EOT'
Example of string
spanning multiple lines
using nowdoc syntax.
EOT;

class bar {
    public $foo;
    public $bar;

    function foo() {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$bar = new bar();
$name = 'MyName';

echo <<<'EOT'
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

