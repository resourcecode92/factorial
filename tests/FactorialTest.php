<?php

namespace Rigasyahrul\Factorial\Tests;

use PHPUnit\Framework\TestCase;
use Rigasyahrul\Factorial\Factorial;
use Exception;

class FactorialTest extends TestCase
{
    /** @test */
    public function calculate_lower_than_one()
    {
        $factorial = new Factorial();

        $this->expectException(Exception::class);
        $factorial->calculate(0);
    }

    /** @test */
    public function it_return_a_one_factorial()
    {
        $factorial = new Factorial();

        $this->assertSame(1, $factorial->calculate(1));
    }

    /** @test */
    public function it_return_a_five_factorial()
    {
        $factorial = new Factorial();

        $this->assertSame(120, $factorial->calculate(5));
    }

    /** @test */
    public function it_return_a_ten_factorial()
    {
        $factorial = new Factorial();

        $this->assertSame(3628800, $factorial->calculate(10));
    }
}