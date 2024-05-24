<?php

namespace App;

class Calculator{
    
    public function addition($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtraction($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiplication($num1, $num2) {
        return $num1 * $num2;
    }

    public function division($num1, $num2) {
        return $num1 / $num2;
    }
}