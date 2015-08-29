<?php

$items = [6, 4, 2, 0];

usort($items, function (int $a, int $b) : int {
    return $a <=> $b;
});

var_dump($items);
