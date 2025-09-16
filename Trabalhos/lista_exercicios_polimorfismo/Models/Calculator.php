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