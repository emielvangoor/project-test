<?php

use PHPUnit\Framework\TestCase;
use Bonsa\TestClass;

class TestClassTest extends TestCase
{
    public function testEmielIsTheName() {
        $this->assertEquals(TestClass::nameOfEmiel(), "Emiel van Goor");
    }
}
