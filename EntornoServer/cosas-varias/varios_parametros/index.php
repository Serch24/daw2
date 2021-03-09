<?php

function test(...$parametros)
{
}

function test2($a, $b)
{
        return $a + $b;
}
test(test2(...[1, 2]));

?>
