<?php

abstract class PaymentMethod {
    protected float $value;

    public function __construct(float $value) {
        $this->value = $value;
    }

    abstract protected function paymentProcessing():void ;
}

class Card extends PaymentMethod {
    private int $installmentsNumber;

    public function __construct(float $value, int $installmentsNumber) {
        parent::__construct($value);
        $this->installmentsNumber = $installmentsNumber;
    }

    public function paymentProcessing():void {
        $installmentValue = $this->calculateInstallmentValue($this->value, $this->installmentsNumber);

        echo "Payment processed succesfully! R$ $this->value was split in $this->installmentsNumber installment(s), with a installment value of $installmentValue";
    }

    public function calculateInstallmentValue(float $value, int $installmentsNumber):float {
        return $value / $installmentsNumber;
    }
}


class Pix extends PaymentMethod {
    private string $pixCode;

    public function __construct(float $value) {
        parent::__construct($value);
        $this->pixCode = $this->generatePixCode();
    }

    public function paymentProcessing():void {
        echo "Copy and paste code for payment in Pix of R$ $this->value: $this->pixCode";
    }

    private function generatePixCode():string {
        $length = 50;
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $randomString = '';

        for ($i = 0; $i < $length; $i++){
            $index = random_int(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}


class Slip extends PaymentMethod
{
    private string $slipCode;
    public function __construct($value) {
        parent::__construct($value);
        $this->slipCode = $this->generateSLipCode();
    }

    public function paymentProcessing():void {
        echo "Slip code for the payment of R$: $this->value: $this->slipCode";
    }

    function generateSLipCode(): string {
        $code = '';
        for ($i = 0; $i < 47; $i++) {
            $code .= mt_rand(0, 9);
        }
        return $code;
    }

}

$pixValue = 25.34;
$pixPayment = new Pix($pixValue);
echo "R$ $pixValue will be paid in Pix. <br>";
$pixPayment->paymentProcessing();

echo "<br><br>";

$slipValue = 30.54;
$slipPayment = new Slip($slipValue);
echo "R$ $slipValue will be paid via Slip. <br>";
$slipPayment->paymentProcessing();

echo "<br><br>";

$cardValue = 126.;
$installmentNumbers = 6;
$cardPayment = new Card($cardValue, $installmentNumbers);
echo "R$ $cardValue will be paid via Card. <br>";
$cardPayment->paymentProcessing();
