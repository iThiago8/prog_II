<?php

abstract class PaymentMethod {
    protected float $value;

    public function __construct($value) {
        $this->value = $value;
    }

    abstract protected function paymentProcessing():void ;
}