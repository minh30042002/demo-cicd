<?php

use PHPUnit\Framework\TestCase;

require_once './src/functions.php';

class FunctionsTest extends TestCase {
    public function testGreetUser() {
        $this->assertEquals("Hello, Guest!", greetUser(""));
        $this->assertEquals("Hello, John!", greetUser("John"));
    }

    public function testCalculateSum() {
        $this->assertEquals(5, calculateSum(2, 3));
        $this->assertEquals(0, calculateSum(-1, 1));
    }
}
