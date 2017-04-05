<?php

namespace Antalaron\Calculator;

/**
 * Calulator.
 *
 * @author Antal Áron <antalaron@antalaron.hu>
 */
class Calculator
{
    public function add($x, $y)
    {
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new \InvalidArgumentException('Either argumetn 1 or 2 is not numeric.');
        }

        return $x + $y;
    }
}
