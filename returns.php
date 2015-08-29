<?php

declare(strict_types=0);

class Test
{
    function foo($int) : int
    {
        return 1;
    }
}

class SubTest extends Test
{
    function foo($int): int
    {
        return parent::foo($int);
    }
}


var_dump((new SubTest())->foo(123));
