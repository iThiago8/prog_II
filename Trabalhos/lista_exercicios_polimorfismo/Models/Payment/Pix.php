<?php

class Pix extends PaymentMethod {
    public function __construct(float $value) {
        parent::__construct($value);
    }

    protected function paymentProcessing():void {
        echo "Código copia e cola para pagamento Pix do valor de {$this->value}: ";


    }
}