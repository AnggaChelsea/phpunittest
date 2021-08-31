<?php 
require_once 'Calculator.php';
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase{
    public $calculator;

    public function setUp():void{
        $this->calculator = new Calculator();
    }
    public function tearDown():void{
        $this->calculator = NULL;
    }
    public function testAdd() {
        $result = $this->calculator->add(2,2);
        $this->assertEquals(3, $result);
    }
}