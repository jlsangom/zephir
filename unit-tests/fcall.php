<?php

$t = new Test\Fcall();

assert($t->testCall1() === 0);
assert($t->testCall1FromVar() === 2);

assert($t->testStrtokFalse() === false);
assert($t->testStrtokVarBySlash('test') === 'test');