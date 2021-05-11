<?php

namespace Rigasyahrul\Factorial;

use Exception;

class Factorial
{

    public function calculate(int $value) : int
    {
        if ($value < 1) {
            throw new Exception(
                sprintf("Value must be greater than 0, {%d} given", $value)
            );
        }

        if ($value == 1) {
            return $value;
        }

        return $value * $this->calculate($value - 1);
    }
}