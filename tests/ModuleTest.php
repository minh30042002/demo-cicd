<?php

use PHPUnit\Framework\TestCase;

require_once './src/functions.php';

class ModuleTest extends TestCase {
    public function testGreetUserAndSum() {
        $name = "Alice";
        $greeting = greetUser($name);
        $sum = calculateSum(5, 7);

        $this->assertEquals("Hello, Alice!", $greeting);
        $this->assertEquals(12, $sum);
    }
}
