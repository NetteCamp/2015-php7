<?php

$foo = ['a' => NULL, 'b' => 'ipsum'];

var_dump($foo['a'] ?? 'not found');
var_dump(isset($foo['a']) ? $foo['a'] : 'not found');
