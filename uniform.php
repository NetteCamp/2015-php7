<?php

class Foo
{
    public $callback;

    public function bar(int $int)
    {
        echo 'bar: ', $int, PHP_EOL;
    }

    public static function baz()
    {
        echo 'static', PHP_EOL;
    }
}

$foo = new Foo;
$foo->callback = function () { echo 'Hi', PHP_EOL; };

($foo->callback)();

$args = [123];
[$foo, 'bar'](...$args);

'Foo'::baz();

(function ($arg) {
    echo $arg, PHP_EOL;
})('Hello');
