<?php

namespace Rigasyahrul\Factorial;

class Factorial
{
    public function calculate(int $value) : int
    {
        if ($value == 1) {
            return $value;
        }

        return $value * $this->calculate($value - 1);
    }
}