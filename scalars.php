<?php

declare(strict_types=1);

function test($int) {
    assert($int === NULL || is_int($int));
    var_dump($int);
}
