<?php

abstract class PaymentMethod {
    protected float $value;

    public function __construct($value) {
        $this->value = $value;
    }

    abstract protected function paymentProcessing():void ;
}

class Card {

}

class Pix extends PaymentMethod {
    public function __construct(float $value) {
        parent::__construct($value);
    }

    public function paymentProcessing():void {
        $code = $this->generatePixCode();

        echo "Código copia e cola para pagamento Pix do valor de {$this->value}: $code";
    }

    private function generatePixCode(int $length = 50):string {
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $randomString = '';

        for ($i = 0; $i < $length; $i++){
            $index = random_int(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}


class Slip
{

}

$pixPayment = new Pix(25.34);
echo "Será pago R$ 25,34 via pix. <br>";
$pixPayment->paymentProcessing();
