<?php

namespace cubuss\Factorial;

class Factorial
{

    public function factorial(int $value)
    {
        if ($value == 1) {
            return $value;
        }

        return $value * $this->factorial($value - 1);
    }
}