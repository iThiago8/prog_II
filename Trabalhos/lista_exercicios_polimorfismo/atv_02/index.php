<?php

class Calculator {
    public function __construct() {

    }

    public function sum(int $a, int $b, ?int $c = null): int {
        $result = $a + $b;

        if ($c !== null)
            $result += $c;

        return $result;
    }
}


$calc = new Calculator();

echo "Two integers sum: 2 + 5: " . $calc->sum(2, 5) . '<br>';

echo "Three integers sum: 2 + 5 + 6: " . $calc->sum(2, 5, 6) . '<br>';