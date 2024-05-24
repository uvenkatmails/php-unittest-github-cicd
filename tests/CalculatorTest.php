<?php
class CalculatorTest extends \PHPUnit\Framework\TestCase {
    
    public function testAddition() {
        
        $calculator = new App\Calculator;
        $result = $calculator->addition(20, 4);
        $this->assertEquals(24, $result);
    }

    public function testSubtraction() {
        
        $calculator = new App\Calculator;
        $result = $calculator->subtraction(20, 4);
        $this->assertEquals(16, $result);
    }

    public function testMultiplication() {
        $calculator = new App\Calculator;
        $result = $calculator->multiplication(6, 2);
        $this->assertEquals(12, $result);
    }

    public function testDivision() {
        $calculator = new App\Calculator;
        $result = $calculator->division(20, 5);
        $this->assertEquals(4, $result);
    }
}