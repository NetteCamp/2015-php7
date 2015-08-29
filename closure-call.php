<?php

class Test
{
    private $foo = 'bar';
}

$closure = function () {
    echo $this->foo, PHP_EOL;
};

$new = $closure->bindTo(new Test, 'Test');
$new();

$closure->call(new Test);
